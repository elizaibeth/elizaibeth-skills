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

Each stage runs its skill: `tdd` for Red and Green, `simplify` for Simplify, and `code-review` for Review. Loopy uses a built-in fallback only when a skill is not installed, and names the fallback in its log. Skill use does not reset or bypass iteration limits.

## One run, no pauses

Loopy works through the whole issue set in one go. It keeps the run's state in `loopy-run.md` in the repository's git directory (`git rev-parse --git-common-dir`): the status, counters, issue statuses and a log line per slice. Git does not track this file. The agent reads it every turn, so a run survives context compaction.

In Claude Code, the skill adds a Stop hook. While the state file says `status: running`, the hook sends the agent back to work when it tries to end its turn. The hook does nothing without that file, and after 60 blocks it lets the turn end. To stop a run yourself, press Esc and ask Loopy to stop, or set `status: breaker` in the file. Other agents ignore the hook and follow the same instructions without it.

## Limits

An iteration is one attempt at a slice. The defaults are **4 iterations per issue** and **20 per run**. Set the run limit with `--iterations=N` or "N iterations", and the per-issue limit with `--per-issue=N` or "N per issue". Limits can rise to **8 per issue** and **40 per run**; higher values are clamped to these caps. Limits cannot disable the breaker.

Each slice runs Red → Green → Coverage → Regression → Simplify → Review → Commit. Simplify reruns the regression checks, so Review sees simplified, tested code. Each issue gets a `type/short-topic` branch, and each iteration ends with a commit that references the issue. Each log line shows the review result and commit hash, so a skipped stage is visible.

A slice that must restart from Red or Green consumes another iteration. Fixes that keep the approach do not: formatting, lint, static analysis, a failed commit hook, a flaky rerun, or review findings fixed in place. An expected failing TDD test does not count as a retry. Resuming keeps the counters.

When an issue stalls, leaves scope, reaches its limit or is too ambiguous, Loopy marks it blocked and continues with the next independent issue. Where an issue leaves a choice open, Loopy picks the simplest option and records it as an assumption. The run stops and waits only when the run limit is reached, an action needs approval the request does not give, required checks cannot run for any remaining issue, or every remaining issue is blocked. The report lists completed and blocked issues, test evidence, assumptions and remaining gaps.

## Options

| Option | Effect |
| --- | --- |
| `--iterations=N` | Run limit (default 20, cap 40). |
| `--per-issue=N` | Per-issue limit (default 4, cap 8). |
| `--merge` or `--merge=pr` | Push each issue branch and merge it through a pull request after its final review passes. |
| `--merge=local` | Merge each issue branch into the default branch locally after its final review passes. |

Plain-language requests, such as "10 iterations" or "merge each issue locally", work too. In Claude Code, typing `/loopy` shows these options as a hint.

Without a merge option, Loopy leaves the issue branches unmerged and lists them in its report. It does not close issues or create releases unless asked. See [the agent instructions](SKILL.md) for the full breaker rules.
