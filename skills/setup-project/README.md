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

Setup creates or updates `AGENTS.md` with Simplified Technical English principles and the required cycle: plan → implement with TDD → quick code review → simplify → code review. It directs agents to use `tdd`, `code-review`, and `simplify` when available, with built-in fallback instructions. `CLAUDE.md` contains only `@AGENTS.md`. Existing project instructions are merged into `AGENTS.md`.

Development runs in Docker Compose. Application data uses PostgreSQL, automated tests use SQLite, and projects that need S3 use RustFS locally. Existing database engines and container setups are kept unless you request a change.

New Python and Django projects default to **uv**. New frontend projects default to **pnpm**. Existing package managers and working configuration are preserved unless you request a migration.

Every profile applies a three-day release hold: packages must be published at least 72 hours before install. uv, pnpm, and Composer enforce it in configuration. Go and Swift have no native setting, so agents check publication dates by hand and Dependabot gets a cooldown when CI is added.

Setup creates a `.context7lib` allowlist for the project's tools. This guides agent queries when Context7 is available; it does not enforce tool access. See the [documentation policy](references/context7.md).

## Limits

CI is added only when requested. Setup records a coverage baseline and preserves existing thresholds; it adds a new threshold only when asked. Unavailable checks and empty test suites are reported, not marked as passing.

Reruns fill gaps without replacing compliant configuration. Setup preserves application behavior, migration history, secrets, signing settings, and your changes. See [the agent instructions](SKILL.md) for the full workflow.
