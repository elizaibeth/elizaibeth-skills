# Loopy

Implement GitHub issues with TDD, path coverage, code simplification, regression tests, and review.

## Install

```sh
npx skills add elizaibeth/elizaibeth-skills --skill loopy --global
```

Omit `--global` to install in one project.

## Examples

Run from the target repository. Replace the issue numbers with your own. The agent needs access to the issues and a working test environment.

> Use $loopy to implement issues #12 and #15 in this repository.

> Use $loopy for issue #42. Limit this run to 2 iterations per issue and 2 total.

Loopy reads the issues and plans the work, then proceeds without waiting for plan approval. It tests happy and failure paths, keeps code concise, and checks the final diff against the requirements.

## Limits

The defaults are **3 iterations per issue** and **10 per run**. Explicit limits can raise these to **5 per issue** and **20 per run**, but cannot disable the breaker.

Each new implementation slice or corrective retry consumes an iteration. An expected failing TDD test does not count as a retry. Resuming keeps the counters.

Loopy stops when a limit is reached, progress stalls, work leaves scope, or required checks cannot run. It also stops when an action needs additional approval. It reports completed work, test evidence, and remaining gaps.

It does not push, merge, close issues, or create releases unless asked. See [the agent instructions](SKILL.md) for the full breaker rules.
