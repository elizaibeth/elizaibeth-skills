---
name: big-backend
description: Build Laravel 13 CRUD backends from a database, specification, or design conversation. Reconstruct migrations, add admin resources, or review CRUD code against official documentation using bundled reference patterns.
---

# BigBackend

Write native Laravel code in the target application. Adapt bundled patterns and implement missing behavior; template coverage does not limit the task.

Resolve bundled paths relative to this skill's directory. Keep these sources unchanged and load only references needed for the current phase.

## Choose the workflow

For builds and reviews, apply the [official documentation workflow](references/laravel-docs.md). Templates are reference patterns, not framework authority.

- **Review only:** use that reference's review section; skip the build steps.
- **Existing database:** read [database-first.md](references/database-first.md) before inspection or baseline reconstruction.
- **Written specification:** extract the schema and access rules.
- **Design conversation:** establish actors, workflows, ownership and lifecycle rules through focused questions. Stay in discussion until implementation is requested.

Reconcile existing migrations with the specification and accessible database; expose conflicts rather than silently choosing a source. A migrations-only request ends at verified migrations.

## Establish the target and schema

1. Inspect project instructions, Composer files, routes, models, authentication, frontend build, and tests. Target PHP 8.3+ and Laravel 13 (`laravel/framework: ^13.0`); agree upgrade scope before changing an existing framework major.
2. Propose resources, keys, field types/defaults/nullability, constraints, relationships/deletion rules, ownership, and CRUD actions. Identify the source of truth and assumptions. Schema alone establishes neither business permissions nor which tables need screens.
3. Obtain agreement for new systems or consequential schema changes, including effects on existing data. Reuse prior approval unless the proposal changes materially; small, explicit additions can proceed. Schema agreement does not authorize migration execution on an existing database.
4. Write migrations first, preserving history and data. Validate on an isolated database, then complete one resource through backend, authorization, UI, and tests before extending the pattern.

## Build and verify

- **Backend:** read [backend.md](references/backend.md) to select templates and replace their assumptions. Complete all requested layers, including missing pieces.
- **UI:** read [ui.md](references/ui.md) before selecting or installing examples. Use BigBackend styling for new interfaces; preserve an existing design unless redesign is requested.
- **Verification:** follow [verification.md](references/verification.md) for backend and browser evidence. Inspect the final diff for unintended changes.

Report delivered resources, checks actually run, results, and remaining limitations. Distinguish structural checks from application and browser tests.
