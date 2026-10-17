---
name: loopy
description: Implement a bounded set of GitHub issues through read, plan, TDD, coverage, regression testing, simplification, code review, and a commit per iteration. Use explicitly when the user asks to work through issues as a controlled implementation loop.
argument-hint: "<issues...> [--iterations=N] [--per-issue=N] [--merge[=pr|local]]"
---

# Loopy

Turn a supplied set of GitHub issues into verified, reviewable changes. Work in issue order unless dependencies require another order. Preserve the user's scope and repository instructions. Commit every iteration. Push and merge only with `--merge` or an explicit merge request. Close issues or create releases only when the user asks.

## Start with read and plan

Read the full issue bodies, comments, labels, linked issues, repository instructions, current branch and diff, relevant code, tests, and existing quality gates. Use `gh issue view` for GitHub issues when available. Separate confirmed requirements, acceptance criteria, assumptions, and blockers.

Before editing, write a compact internal plan: issue order, one or more vertical slices per issue, the expected happy and sad paths, files likely to change, and the verification command for each slice. Proceed without a confirmation pause. Before an issue's first iteration, create a `type/short-topic` branch for it from the default branch, or reuse the current feature branch. If an issue is too ambiguous to implement safely, stop that issue and continue only when the remaining issue set is independent.

## Run the loop

Each stage names the skill it runs. Use a stage's fallback only when that skill is missing from the session's skill list, and name the fallback in the progress line; do not install skills. Loopy's stage order, scope, approval boundaries, and breaker still apply; corrections and retries inside another skill count toward the same limits.

For each vertical slice, complete every stage in order:

1. **Red:** run the `tdd` skill for this slice's behavior tests: the happy path plus the relevant invalid, denied, missing, or boundary path. Done when the new tests run and fail for the intended reason. Fallback: write and run the tests yourself.
2. **Green:** continue the `tdd` skill with the smallest change that passes. Done when the new tests pass and existing behavior outside the slice is unchanged. Fallback: make the change yourself.
3. **Coverage:** run the focused tests and the project's coverage tool. Confirm both paths are exercised; use existing thresholds and report formats. Do not invent a threshold.
4. **Regression:** run the focused tests again, then the relevant broader suite. Add a regression test for every discovered failure.
5. **Simplify:** run the `simplify` skill on the slice diff, then rerun the Regression checks. Done when the skill's fixes are applied and the checks pass. Fallback: remove duplication, speculative abstractions, dead code, and unnecessary branches yourself, keeping the tests meaningful.
6. **Review:** run the `code-review` skill with the issue's requirements, the iteration's base commit, and the current diff. Done when its report is in hand and every finding is fixed or recorded for the final report. Fallback: inspect the diff against the issue and repository standards yourself.
7. **Commit:** commit the iteration on the issue branch, following the repository's commit conventions, with `Refs #<issue>` in the body. Done when the commit exists, its hooks pass, and the working tree is clean. A failed hook is a retry and consumes an iteration.

Keep command evidence for the final report. After each slice, give one progress line using [the reporting guide](references/run-report.md).

## Breaker

Default to **3 iterations per issue** and **10 for the run**. Set the run limit from `--iterations=N` or a phrase such as "N iterations", and the per-issue limit from `--per-issue=N` or "N per issue". Hard caps are **5 per issue** and **20 total**: clamp a higher value to the cap and say so in the first progress line. An unlimited request changes neither defaults nor caps.

Consume one iteration before starting a slice. Each corrective attempt or retry after an unexpected failure or review finding consumes another iteration before editing or rerunning checks, even within the same stage. Batch related findings into one attempt; rerun affected and downstream checks. The expected Red failure is not a retry. New hypotheses, slices, and resumed turns do not reset counters.

Initial final verification belongs to the last started iteration; its corrections and retries count normally. Shared corrections consume one iteration per affected issue and one for the run. If ownership is unknown, charge the current issue; never transfer charges to bypass a limit.

Finish verification within a started iteration unless an immediate breaker applies. Stop before any new slice or retry that would exceed either limit. Stop immediately when:

- the same test or command fails twice without a new falsifiable hypothesis;
- two iterations produce no meaningful change in behavior, evidence, or understanding;
- the diff expands beyond the issue's acceptance criteria;
- the code becomes more verbose without adding behavior, safety, or clarity;
- required tests, dependencies, credentials, or environment access are unavailable;
- a destructive action, migration, external write, or security-sensitive choice needs approval;
- coverage cannot exercise a required path and no safe test seam is available.

When the breaker fires, report it using the reporting guide and wait for direction. Retain counters on resume; a limit increase must stay within the hard caps. At a hard cap, end the run rather than automatically starting another.

## Finish

After all issues pass their loops, run the relevant full test and quality suites, then run the `code-review` skill on the complete diff. Commit any fixes as in the Commit stage. Required acceptance criteria and verification must pass before an issue is complete. Use the reporting guide for the handoff.

With `--merge` or an explicit merge request, merge each issue after its final review passes. `--merge` and `--merge=pr` push the issue branch and merge it through a pull request; `--merge=local` merges it into the default branch locally. Use a method the user names in words. Without either, leave the branches unmerged and list them in the handoff.
