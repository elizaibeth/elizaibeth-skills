---
name: setup-project
description: Set up repository conventions, Docker development environments, package management, tests, coverage, linting, security checks, and pre-commit for Go, Python, Django, Swift, PHP, Laravel, and frontend projects, with optional CI.
---

# Setup Project

One run establishes shared contribution conventions and the project's language-specific tooling. Keep instructions and generated configuration concise. Preserve working project choices; merge missing pieces and make reruns safe.

## Inspect and select

Read project instructions, manifests, lockfiles, tests, hooks, contribution templates, release tooling, and CI. Detect language, framework, supported versions, package manager, and module roots. For an empty directory, use the requested stack; ask for it if unspecified.

Always read and apply [conventions](references/conventions.md), then load every matching profile:

| Project | Read |
| --- | --- |
| Go | [Go](references/go.md) |
| Python, not Django | [Python](references/python.md) + [Python design style](references/python-style.md) |
| Django | [Python](references/python.md) + [Django](references/django.md) + [Django design style](references/django-style.md) |
| Swift/iOS | [Swift](references/swift.md) |
| PHP | [PHP](references/php.md) |
| Laravel | [PHP](references/php.md) + [Laravel](references/laravel.md) |
| Frontend dependencies, standalone or with any backend | [Frontend](references/frontend.md) |

Framework additions override conflicting language defaults. In mixed repositories, apply profiles per module and merge shared conventions and hooks once. For unsupported stacks, apply conventions, retain existing tooling, and report the missing profile.

Read [development environment](references/dev-environment.md) for every project with a runnable application or backing services. It sets Docker, PostgreSQL, and RustFS for S3. Read [test environment](references/test-environment.md) for every project with tests. It sets the test tiers: SQLite and fakes by default, real services for service and end-to-end tests.

Read [Context7 policy](references/context7.md) and generate `.context7lib` from its bundled catalog alongside conventions. This needs no Context7 connection; documentation queries run only when Context7 is available.

## Configure and verify

1. Apply contribution conventions and templates on every run. Create or update root `AGENTS.md` with the shared writing and implementation rules; make `CLAUDE.md` contain only `@AGENTS.md`. Already compliant files need no edits.
2. Configure the selected profiles' package commands, formatting, linting, tests, coverage, and audits. Use existing tools before adding alternatives; verify version-dependent commands against installed help or official documentation. Keep dependencies in the chosen manager's manifests and lockfiles; avoid unrelated upgrades.
3. Set up the container development environment and backing services.
4. Merge pre-commit hygiene and secret scanning with the language checks. Pin hook revisions, install hooks in the target clone, and document tool prerequisites. Keep slow suites and audits available as explicit commands. When CI is requested, use the same locked environment and checks there.
5. Run the configured checks and record coverage. Exercise meaningful happy, failure, and boundary paths; a percentage alone proves none of these. Preserve existing thresholds; add new thresholds only when requested. Ignore generated reports. Mark unavailable checks unverified and report an empty test suite honestly.

Stay within project setup. Preserve application behavior, migration history, secrets, signing settings, and user changes. Review formatter changes before accepting a baseline; leave unrelated application failures reported for follow-up.

## Done when

- `.git/hooks/pre-commit` exists, and `pre-commit run --all-files` passes. Each `exclude` pattern matches a real path.
- Hook revisions came from `pre-commit autoupdate` or the registry, not memory.
- When the project has a container stack, it starts healthy and the checks pass in it, or the report marks them unverified.
- The contribution guide lists the actual commands: start, one-off command, install, focused test, full test, service and end-to-end tests (when present), coverage, lint, format, typing, audit, and hooks.
- The conventions files, tracker templates, `AGENTS.md`, `CLAUDE.md`, and `.context7lib` exist or the report says why not.

Report selected profiles, files changed, contributor commands, check results, coverage baseline, and remaining gaps. Keep it brief.
