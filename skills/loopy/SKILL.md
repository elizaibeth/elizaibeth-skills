---
name: loopy
description: Implement a bounded set of GitHub issues through a TDD, coverage, simplify, review and commit loop. Use explicitly when the user asks to work through issues as a controlled implementation loop.
argument-hint: "<issues...> [--iterations=N] [--per-issue=N] [--merge[=pr|local]]"
hooks:
  Stop:
    - hooks:
        - type: command
          command: |
            d=$(git rev-parse --git-dir 2>/dev/null) || exit 0
            f="$d/loopy-run.md"
            [ -f "$f" ] || exit 0
            [ "$(sed -n 's/^status: *//p' "$f")" = running ] || exit 0
            grep -q '^stop_blocks:' "$f" || echo 'stop_blocks: 0' >> "$f"
            b=$(sed -n 's/^stop_blocks: *//p' "$f")
            [ "${b:-0}" -ge 60 ] && exit 0
            sed -i.bak "s/^stop_blocks: .*/stop_blocks: $((b + 1))/" "$f" && rm -f "$f.bak"
            printf '{"decision":"block","reason":"The Loopy run is still running (%s). Read that file and continue with the next stage. End the run only by setting status to done, breaker, cap or stopped."}' "$f"
---

# Loopy

Turn the given GitHub issues into verified, reviewable changes, in issue order unless dependencies require otherwise. Keep to the user's scope and the repository's instructions. Commit every iteration. Push and merge only with `--merge` or an explicit request; close issues or create releases only when asked.

Run the whole set without pausing: plan approval, progress reports and routine choices are not stopping points. Wait only at a run-level breaker.

## Run state

The state file is `$(git rev-parse --git-dir)/loopy-run.md`: untracked by git, and one per worktree. It is the source of truth for progress and counters. Read it at the start of every turn, including after context compaction, and update it after every stage.

```text
status: running
options: #12 #15 --merge=pr
run_iterations: 0/20
current: #12 slice 1, Red
stop_blocks: 0
issues:
- #12: in progress, iterations 0/4
- #15: queued
log:
```

- `options`: the issue list and every flag or phrase that sets limits or merging. Follow it, not memory.
- `status`: `running`, `done`, `breaker`, `cap` or `stopped`. While it is `running`, a Claude Code Stop hook sends you back to work when you end the turn, until `stop_blocks` reaches 60.
- `issues`: each issue's status, counter, recorded assumptions and blocked reason.
- When the user asks to stop, pause or cancel, set `status: stopped`, give the breaker report and end the turn.
- A new run (issue set differs from `options`, or resume intent unclear) replaces the file. A resumed run keeps it and its counters, sets `status: running` and resets `stop_blocks` to 0.

## Read and plan

Read each issue in full with `gh issue view` when available (body, comments, labels, linked issues), plus the repository instructions, current branch and diff, relevant code, tests and quality gates. Separate confirmed requirements, acceptance criteria, assumptions and blockers.

Plan internally, then start: issue order, and vertical slices per issue, each with its happy and sad paths, likely files and verification command. Where an issue leaves a choice open, take the simplest option closest to the existing code and record it as an assumption. Before an issue's first iteration, branch `type/short-topic` from the default branch, or reuse the current feature branch.

## Loop

Run each stage's skill in the foreground and wait for its result, including any background agents it starts, before the next stage. Use the fallback only when the skill is absent from the session's skill list (install nothing), and name it in the log line. Skills run inside Loopy's stage order, scope, approvals and breaker.

For each slice:

1. **Red:** `tdd` skill: behavior tests for the happy path plus the relevant invalid, denied, missing or boundary path. Done when they fail for the intended reason. Fallback: write and run them yourself.
2. **Green:** `tdd` skill: the smallest passing change. Done when the new tests pass and behavior outside the slice is unchanged. Fallback: make the change yourself.
3. **Coverage:** focused tests plus the project's coverage tool, with its existing thresholds and report format; invent no threshold. Done when both paths are exercised.
4. **Regression:** focused tests, then the relevant broader suite. Add a regression test for every failure found.
5. **Simplify:** `simplify` skill on the slice diff, then rerun Regression. Done when its fixes are applied and the checks pass. Fallback: remove duplication, speculative abstractions, dead code and needless branches yourself, keeping the tests meaningful.
6. **Review:** `code-review` skill with the issue's requirements, the iteration's base commit and the diff. Done when every finding is fixed or recorded for the handoff. Fallback: check the diff against the issue and repository standards yourself.
7. **Commit:** on the issue branch, per repository conventions, with `Refs #<issue>` in the body. Done when the hooks pass and the working tree is clean.

Keep command evidence for the handoff. After each slice, add a log line per [the reporting guide](references/run-report.md) and start the next slice in the same turn.

## Breaker

An iteration is one attempt at a slice, Red to Commit; charge it before the slice starts. Defaults: **4 per issue** and **20 per run**, set with `--per-issue=N` or "N per issue" and `--iterations=N` or "N iterations". Hard caps: **8** and **40**; clamp higher values and record the clamp. An unlimited request leaves the defaults and caps in force.

Restarting a slice from Red or Green, because the approach failed or a review finding needs a different design, charges another iteration. Fixes that keep the approach are free: formatting, lint, static analysis, a failed commit hook, a flaky rerun, review findings fixed in place, and the expected Red failure. Counters survive resumes and never move between issues.

**Issue-level breakers:** mark the issue `blocked` with the reason and last evidence, then continue with the next independent issue. They apply when:

- the issue reaches its iteration limit;
- the same test or command fails twice without a new falsifiable hypothesis;
- two iterations produce no meaningful change in behavior, evidence or understanding;
- the work needs a diff beyond the issue's acceptance criteria;
- coverage cannot exercise a required path and no safe test seam exists;
- the issue is too ambiguous to implement safely.

**Run-level breakers:** finish verifying the current iteration, set `status: breaker` (`cap` at the run limit), give the breaker report and wait for direction. They apply when:

- the run reaches its iteration limit;
- a destructive action, migration on shared data, external write or security-sensitive choice needs approval the request does not give;
- required tests, dependencies, credentials or environment access are unavailable for every remaining issue;
- every remaining issue is blocked or depends on a blocked issue.

On resume, a raised limit stays within the hard caps; at a hard cap, end the run.

## Finish

When every issue is complete or blocked, run the full test and quality suites, then the `code-review` skill on the complete diff, and commit fixes as in Commit. An issue is complete only when its acceptance criteria and verification pass.

After an issue's final review passes, `--merge` or `--merge=pr` pushes its branch and merges it through a pull request, and `--merge=local` merges it into the default branch locally; a method the user names in words takes precedence. Without a merge request, list the unmerged branches in the handoff.

Set `status: done`, give the handoff per the reporting guide, then end the turn.
