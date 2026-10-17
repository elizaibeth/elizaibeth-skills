# Loopy run report

After each slice, give one progress line with the outcome, the review skill and open findings, the commit hash, and the counters. Name any fallback used in place of a skill. For example:

```text
#42: expiry validation passes; review: code-review, 0 open findings; commit a1b2c3d; iterations 2/3 issue, 4/10 run.
```

At handoff, report each issue's status, verification commands and results (including Red evidence, coverage, and regression checks), unresolved review findings, and remaining risks. Group shared commands; omit empty sections and routine stage narration.

At a breaker, include the stop condition, counters, changed files, last evidence, and the smallest decision or missing artifact needed to resume.
