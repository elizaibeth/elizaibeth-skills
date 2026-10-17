# Loopy

Implement GitHub issues with TDD, path coverage, regression tests, code simplification, review, and a commit per iteration.

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

> Use $loopy for issues #12 and #15 --merge

Loopy reads the issues and plans the work, then proceeds without waiting for plan approval. It tests happy and failure paths, keeps code concise, and checks the final diff against the requirements.

Each stage runs its skill: `tdd` for Red and Green, `simplify` for Simplify, and `code-review` for Review. Loopy uses a built-in fallback only when a skill is not installed, and names the fallback in its progress line. Skill use does not reset or bypass iteration limits.

## Limits

The defaults are **3 iterations per issue** and **10 per run**. Set the run limit with `--iterations=N` or "N iterations", and the per-issue limit with `--per-issue=N` or "N per issue". Limits can rise to **5 per issue** and **20 per run**; higher values are clamped to these caps. Limits cannot disable the breaker.

Each slice runs Red → Green → Coverage → Regression → Simplify → Review → Commit. Simplify reruns the regression checks, so Review sees simplified, tested code. Each issue gets a `type/short-topic` branch, and each iteration ends with a commit that references the issue. Each progress line shows the review result and commit hash, so a skipped stage is visible.

Each new implementation slice or corrective retry consumes an iteration. An expected failing TDD test does not count as a retry. Resuming keeps the counters.

Loopy stops when a limit is reached, progress stalls, work leaves scope, or required checks cannot run. It also stops when an action needs additional approval. It reports completed work, test evidence, and remaining gaps.

## Options

| Option | Effect |
| --- | --- |
| `--iterations=N` | Run limit (default 10, cap 20). |
| `--per-issue=N` | Per-issue limit (default 3, cap 5). |
| `--merge` or `--merge=pr` | Push each issue branch and merge it through a pull request after its final review passes. |
| `--merge=local` | Merge each issue branch into the default branch locally after its final review passes. |

Plain-language requests, such as "10 iterations" or "merge each issue locally", work too. In Claude Code, typing `/loopy` shows these options as a hint.

Without a merge option, Loopy leaves the issue branches unmerged and lists them in its report. It does not close issues or create releases unless asked. See [the agent instructions](SKILL.md) for the full breaker rules.
