---
name: loopy
description: Implement a bounded set of GitHub issues through read, plan, TDD, coverage, regression testing, simplification, code review, and a commit per iteration. Use explicitly when the user asks to work through issues as a controlled implementation loop.
argument-hint: "<issues...> [--iterations=N] [--per-issue=N] [--merge[=pr|local]]"
hooks:
  Stop:
    - hooks:
        - type: command
          command: |
            d=$(git rev-parse --git-common-dir 2>/dev/null) || exit 0
            f="$d/loopy-run.md"
            [ -f "$f" ] || exit 0
            [ "$(sed -n 's/^status: *//p' "$f")" = running ] || exit 0
            grep -q '^stop_blocks:' "$f" || echo 'stop_blocks: 0' >> "$f"
            b=$(sed -n 's/^stop_blocks: *//p' "$f")
            [ "${b:-0}" -ge 60 ] && exit 0
            sed -i.bak "s/^stop_blocks: .*/stop_blocks: $((b + 1))/" "$f" && rm -f "$f.bak"
            printf '{"decision":"block","reason":"The Loopy run is still running (status: running in %s). Read that file and continue with the next stage now. A progress line is not a stopping point. End the run only by setting status to done, breaker or cap, as the Loopy skill says."}' "$f"
---

# Loopy

Turn a supplied set of GitHub issues into verified, reviewable changes. Work in issue order unless dependencies require another order. Preserve the user's scope and repository instructions. Commit every iteration. Push and merge only with `--merge` or an explicit merge request. Close issues or create releases only when the user asks.

Run the whole set in one go. Do not pause for plan approval, progress reports or routine choices. Stop and wait only at a run-level breaker (see Breaker).

## Run state

Keep the run's state in `loopy-run.md` in the repository's git directory: the path is `$(git rev-parse --git-common-dir)/loopy-run.md`. Git does not track this file, so it never makes the working tree dirty. Create it before the first iteration:

```text
status: running
run_iterations: 0/20
current: #12 slice 1, Red
stop_blocks: 0
issues:
- #12: in progress, iterations 0/4
- #15: queued
log:
```

- Update it after every stage: the counters, the current issue, slice and stage, each issue's status, and one log line per finished slice.
- Read it at the start of every turn. It is the source of truth for counters and progress, also after context compaction.
- `status` is one of `running`, `done`, `breaker` or `cap`. While it is `running`, a Stop hook in Claude Code sends you back to work when you try to end the turn. After 60 blocks the hook lets the turn end, to prevent an endless loop.
- On a resumed run, keep the file and its counters. Set `status: running` again, and reset `stop_blocks` to 0.

## Start with read and plan

Read the full issue bodies, comments, labels, linked issues, repository instructions, current branch and diff, relevant code, tests, and existing quality gates. Use `gh issue view` for GitHub issues when available. Separate confirmed requirements, acceptance criteria, assumptions, and blockers.

Before editing, write a compact internal plan: issue order, one or more vertical slices per issue, the expected happy and sad paths, files likely to change, and the verification command for each slice. Proceed without a confirmation pause. Before an issue's first iteration, create a `type/short-topic` branch for it from the default branch, or reuse the current feature branch.

Where an issue leaves a choice open, choose the option that is simplest and closest to the existing code, record the choice as an assumption in the state file, and continue. If an issue is too ambiguous to implement safely, mark it `blocked` with the reason and continue with the next independent issue.

## Run the loop

Each stage names the skill it runs. Use a stage's fallback only when that skill is missing from the session's skill list, and name the fallback in the log line; do not install skills. Loopy's stage order, scope, approval boundaries, and breaker still apply. Run each skill in the foreground and wait for its result in the same turn; if a skill starts background agents, wait for their results before the next stage.

For each vertical slice, complete every stage in order:

1. **Red:** run the `tdd` skill for this slice's behavior tests: the happy path plus the relevant invalid, denied, missing, or boundary path. Done when the new tests run and fail for the intended reason. Fallback: write and run the tests yourself.
2. **Green:** continue the `tdd` skill with the smallest change that passes. Done when the new tests pass and existing behavior outside the slice is unchanged. Fallback: make the change yourself.
3. **Coverage:** run the focused tests and the project's coverage tool. Confirm both paths are exercised; use existing thresholds and report formats. Do not invent a threshold.
4. **Regression:** run the focused tests again, then the relevant broader suite. Add a regression test for every discovered failure.
5. **Simplify:** run the `simplify` skill on the slice diff, then rerun the Regression checks. Done when the skill's fixes are applied and the checks pass. Fallback: remove duplication, speculative abstractions, dead code, and unnecessary branches yourself, keeping the tests meaningful.
6. **Review:** run the `code-review` skill with the issue's requirements, the iteration's base commit, and the current diff. Done when its report is in hand and every finding is fixed or recorded for the final report. Fallback: inspect the diff against the issue and repository standards yourself.
7. **Commit:** commit the iteration on the issue branch, following the repository's commit conventions, with `Refs #<issue>` in the body. Done when the commit exists, its hooks pass, and the working tree is clean.

Keep command evidence for the final report. After each slice, add one log line to the state file using [the reporting guide](references/run-report.md), then start the next slice in the same turn. Do not end the turn to report progress.

## Breaker

An iteration is one attempt at a slice, from Red to Commit. Default to **4 iterations per issue** and **20 for the run**. Set the run limit from `--iterations=N` or a phrase such as "N iterations", and the per-issue limit from `--per-issue=N` or "N per issue". Hard caps are **8 per issue** and **40 total**: clamp a higher value to the cap and record that in the state file. An unlimited request changes neither defaults nor caps.

Consume one iteration before starting a slice. A slice that must restart from Red or Green, because its approach failed or a review finding needs a different design, consumes another iteration. Fixes that keep the approach do not consume an iteration: formatting, lint, static analysis, a failed commit hook, a flaky rerun, or a batch of review findings fixed in place. The expected Red failure is not a retry. Resumed turns do not reset counters, and charges never move between issues to bypass a limit.

**Issue-level breakers.** Mark the issue `blocked` with the reason and the last evidence, then continue with the next independent issue. Do not wait for direction. These apply when:

- the issue reaches its iteration limit;
- the same test or command fails twice without a new falsifiable hypothesis;
- two iterations produce no meaningful change in behavior, evidence, or understanding;
- the work needs a diff beyond the issue's acceptance criteria;
- coverage cannot exercise a required path and no safe test seam is available;
- the issue is too ambiguous to implement safely.

**Run-level breakers.** Finish verification of the current iteration, set `status: breaker` (or `status: cap` at the run limit), give the breaker report, and wait for direction. These apply when:

- the run reaches its iteration limit;
- a destructive action, migration on shared data, external write, or security-sensitive choice needs approval that the request does not give;
- required tests, dependencies, credentials, or environment access are unavailable for every remaining issue;
- every remaining issue is blocked or depends on a blocked issue.

On resume, retain the counters; a limit increase must stay within the hard caps. At a hard cap, end the run rather than starting another.

## Finish

After every issue is complete or blocked, run the relevant full test and quality suites, then run the `code-review` skill on the complete diff. Commit any fixes as in the Commit stage. Required acceptance criteria and verification must pass before an issue is complete.

With `--merge` or an explicit merge request, merge each complete issue after its final review passes. `--merge` and `--merge=pr` push the issue branch and merge it through a pull request; `--merge=local` merges it into the default branch locally. Use a method the user names in words. Without either, leave the branches unmerged and list them in the handoff.

Set `status: done` in the state file, then give the handoff using the reporting guide. Only then end the turn.
