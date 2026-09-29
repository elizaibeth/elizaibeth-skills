---
name: loopy
description: Implement a bounded set of GitHub issues through read, plan, TDD, coverage, simplification, regression testing, and code review. Use explicitly when the user asks to work through issues as a controlled implementation loop.
---

# Loopy

Turn a supplied set of GitHub issues into verified, reviewable changes. Work in issue order unless dependencies require another order. Preserve the user's scope and repository instructions. Do not push, merge, close issues, or create releases unless the user asks.

## Start with read and plan

Read the full issue bodies, comments, labels, linked issues, repository instructions, current branch and diff, relevant code, tests, and existing quality gates. Use `gh issue view` for GitHub issues when available. Separate confirmed requirements, acceptance criteria, assumptions, and blockers.

Before editing, write a compact internal plan: issue order, one or more vertical slices per issue, the expected happy and sad paths, files likely to change, and the verification command for each slice. Proceed without a confirmation pause. If an issue is too ambiguous to implement safely, stop that issue and continue only when the remaining issue set is independent.

## Run the loop

Read and use available skills at the matching stage: `tdd` for Red/Green, `simplify` for Simplify, and `code-review` for Review and the final review. If a skill is unavailable, follow the steps below; do not install it automatically. Supply review skills with the issue requirements, baseline, and current diff, including uncommitted changes. Loopy's stage order, scope, approval boundaries, and breaker still apply; corrections and retries inside another skill count toward the same limits.

For each vertical slice, complete every stage in order:

1. **Red:** add or update behavior tests for the happy path and relevant invalid, denied, missing, or boundary path. Run them and confirm they fail for the intended reason before implementing.
2. **Green:** implement the smallest change that makes the new tests pass. Preserve existing behavior outside the slice.
3. **Coverage:** run the focused tests and the project's coverage tool. Confirm both paths are exercised; use existing thresholds and report formats. Do not invent a threshold.
4. **Simplify:** keep the implementation terse, idiomatic, and easy to scan. Remove duplication, speculative abstractions, dead code, ceremony, and unnecessary branches while keeping the tests meaningful. Add an abstraction only when it removes real complexity or protects a real seam.
5. **Regression:** run the focused tests again, then the relevant broader suite. Add a regression test for every discovered failure.
6. **Review:** inspect the diff against the issue and repository standards. Fix concrete findings within the remaining budget before moving on.

Keep command evidence for the final report. After each slice, give one progress line using [the reporting guide](references/run-report.md).

## Breaker

Default to **3 iterations per issue** and **10 for the run**. Accept explicit numeric limits up to hard caps of **5 per issue** and **20 total**. An unlimited request changes neither defaults nor caps.

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

After all issues pass their loops, run the relevant full test and quality suites, inspect the complete diff, and perform one final code review. Use the reporting guide for the handoff. Required acceptance criteria and verification must pass before an issue is complete.
