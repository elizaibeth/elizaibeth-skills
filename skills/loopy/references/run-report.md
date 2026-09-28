# Loopy run report

After each slice, give one progress line with the outcome, status, and counters. For example:

```text
#42: expiry validation passes; issue in progress; iterations 2/3 issue, 4/10 run.
```

At handoff, report each issue's status, verification commands and results (including Red evidence, coverage, and regression checks), unresolved review findings, and remaining risks. Group shared commands; omit empty sections and routine stage narration.

At a breaker, include the stop condition, counters, changed files, last evidence, and the smallest decision or missing artifact needed to resume.
