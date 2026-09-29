# Setup Project

Set up contribution conventions, package management, tests, coverage, linting, security checks, and pre-commit hooks.

## Install

```sh
npx skills add elizaibeth/elizaibeth-skills --skill setup-project --global
```

Omit `--global` to install in one project.

## Examples

> Use $setup-project to configure this Go repository, including GitHub Actions.

> Use $setup-project in this empty directory for a Django project.

> Use $setup-project to fill setup gaps in this Laravel repository. Keep its existing package managers.

## What it sets up

Every run applies shared commit, PR, and issue conventions, including no agent co-author trailers or generated-by signatures. It then applies all matching profiles: Go, Python, Django, Swift/iOS, PHP, Laravel, and frontend dependencies. Name the stack when starting in an empty directory.

Setup creates or updates `AGENTS.md` with Simplified Technical English principles and the required cycle: plan → implement with TDD → quick code review → simplify → code review. `CLAUDE.md` contains only `@AGENTS.md`. Existing project instructions are merged into `AGENTS.md`; the rules need no separate skills installed.

New Python and Django projects default to **uv**. New frontend projects default to **pnpm** with a three-day release hold. Existing package managers and working configuration are preserved unless you request a migration.

Setup creates a `.context7lib` allowlist for the project's tools. This guides agent queries when Context7 is available; it does not enforce tool access. See the [documentation policy](references/context7.md).

## Limits

CI is added only when requested. Setup records a coverage baseline and preserves existing thresholds; it adds a new threshold only when asked. Unavailable checks and empty test suites are reported, not marked as passing.

Reruns fill gaps without replacing compliant configuration. Setup preserves application behavior, migration history, secrets, signing settings, and your changes. See [the agent instructions](SKILL.md) for the full workflow.
