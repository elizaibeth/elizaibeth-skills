# Loopy

Implement GitHub issues with TDD, path coverage, regression tests, code simplification, and review.

## Install

```sh
npx skills add elizaibeth/elizaibeth-skills --skill loopy --global
```

Omit `--global` to install in one project.

## Examples

Run from the target repository. Replace the issue numbers with your own. The agent needs access to the issues and a working test environment.

> Use $loopy to implement issues #12 and #15 in this repository.

> Use $loopy for issue #42. Limit this run to 2 iterations per issue and 2 total.

> Use $loopy for issues #12 to #18 --iterations=20 --per-issue=4

Loopy reads the issues and plans the work, then proceeds without waiting for plan approval. It tests happy and failure paths, keeps code concise, and checks the final diff against the requirements.

It uses `tdd`, `simplify`, and `code-review` when available, with built-in fallback instructions. Skill use does not reset or bypass iteration limits.

## Limits

The defaults are **3 iterations per issue** and **10 per run**. Set the run limit with `--iterations=N` or "N iterations", and the per-issue limit with `--per-issue=N` or "N per issue". Limits can rise to **5 per issue** and **20 per run**; higher values are clamped to these caps. Limits cannot disable the breaker.

Each slice runs Red → Green → Coverage → Regression → Simplify → Review. Simplify reruns the regression checks, so Review sees simplified, tested code.

Each new implementation slice or corrective retry consumes an iteration. An expected failing TDD test does not count as a retry. Resuming keeps the counters.

Loopy stops when a limit is reached, progress stalls, work leaves scope, or required checks cannot run. It also stops when an action needs additional approval. It reports completed work, test evidence, and remaining gaps.

It does not push, merge, close issues, or create releases unless asked. See [the agent instructions](SKILL.md) for the full breaker rules.
