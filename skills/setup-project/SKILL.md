---
name: setup-project
description: Set up repository conventions, package management, tests, coverage, linting, security checks, and pre-commit for Go, Python, Django, Swift, PHP, Laravel, and frontend projects, with optional CI.
---

# Setup Project

One run establishes shared contribution conventions and the project's language-specific tooling. Keep instructions and generated configuration concise. Preserve working project choices; merge missing pieces and make reruns safe.

## Inspect and select

Read project instructions, manifests, lockfiles, tests, hooks, contribution templates, release tooling, and CI. Detect language, framework, supported versions, package manager, and module roots. For an empty directory, use the requested stack; ask for it if unspecified.

Always read and apply [conventions](references/conventions.md), then load every matching profile:

| Project | Read |
| --- | --- |
| Go | [Go](references/go.md) |
| Python | [Python](references/python.md) |
| Django | [Python](references/python.md) + [Django](references/django.md) |
| Swift/iOS | [Swift](references/swift.md) |
| PHP | [PHP](references/php.md) |
| Laravel | [PHP](references/php.md) + [Laravel](references/laravel.md) |
| Frontend dependencies, standalone or with any backend | [Frontend](references/frontend.md) |

Framework additions override conflicting language defaults. In mixed repositories, apply profiles per module and merge shared conventions and hooks once. For unsupported stacks, apply conventions, retain existing tooling, and report the missing profile.

Read [Context7 policy](references/context7.md) and generate `.context7lib` from its bundled catalog alongside conventions. This needs no Context7 connection; documentation queries run only when Context7 is available.

## Configure and verify

1. Apply contribution conventions and templates on every run. Create or update root `AGENTS.md` with the shared writing and implementation rules; make `CLAUDE.md` contain only `@AGENTS.md`. Already compliant files need no edits.
2. Configure the selected profiles' package commands, formatting, linting, tests, coverage, and audits. Use existing tools before adding alternatives; verify version-dependent commands against installed help or official documentation. Keep dependencies in the chosen manager's manifests and lockfiles; avoid unrelated upgrades.
3. Merge pre-commit hygiene and secret scanning with the language checks. Pin hook revisions, install hooks in the target clone, and document tool prerequisites. Keep slow suites and audits available as explicit commands. When CI is requested, use the same locked environment and checks there.
4. Run the configured checks and record coverage. Exercise meaningful happy, failure, and boundary paths; a percentage alone proves none of these. Preserve existing thresholds; add new thresholds only when requested. Ignore generated reports. Mark unavailable checks unverified and report an empty test suite honestly.

Stay within project setup. Preserve application behavior, migration history, secrets, signing settings, and user changes. Review formatter changes before accepting a baseline; leave unrelated application failures reported for follow-up.

Report selected profiles, files changed, contributor commands, check results, coverage baseline, and remaining gaps. Keep it brief.
