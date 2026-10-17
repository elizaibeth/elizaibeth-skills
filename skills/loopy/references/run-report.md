# Loopy run report

After each slice, add one log line to the state file with the outcome, the review skill and open findings, the commit hash, and the counters. Name any fallback used in place of a skill. Then continue; a log line is not a reply to the user. For example:

```text
#42: expiry validation passes; review: code-review, 0 open findings; commit a1b2c3d; iterations 2/4 issue, 4/20 run.
```

At handoff, report each issue's status (complete or blocked), verification commands and results (including Red evidence, coverage, and regression checks), assumptions recorded during the run, unresolved review findings, and remaining risks. For each blocked issue, give the reason and the smallest decision or missing artifact needed to finish it. Group shared commands; omit empty sections and routine stage narration.

At a run-level breaker, include the stop condition, counters, changed files, last evidence, and the smallest decision or missing artifact needed to resume.
