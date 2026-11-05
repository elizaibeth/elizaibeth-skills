# Loopy run report

After each slice, add one log line to the state file with the outcome, the commit hash, and the counters. After an issue's closing stages, add one line with the coverage result, the simplify and review skills, open findings, and the commit hash. Name any fallback used in place of a skill. Then continue; a log line is not a reply to the user. For example:

```text
#42 slice 2: expired token is refused; commit a1b2c3d; iterations 2/4 issue, 4/20 run.
#42 closed: coverage 94% branch, gaps none; simplify, code-review: 0 open findings; commit b4c5d6e.
```

At handoff, report each issue's status (complete or blocked), verification commands and results (including Red evidence, coverage, and regression checks), assumptions recorded during the run, unresolved review findings, and remaining risks. For each blocked issue, give the reason and the smallest decision or missing artifact needed to finish it. Group shared commands; omit empty sections and routine stage narration.

At a run-level breaker, include the stop condition, counters, changed files, last evidence, and the smallest decision or missing artifact needed to resume.
