# Existing database to Laravel migrations

Use this path when the user supplies a database, schema-only export, or existing schema without trustworthy migration coverage. Reconstruct the current schema, not an invented history of how it evolved. Continue from migrations into CRUD only when requested.

## Inspect without changing the source

1. Establish the intended connection, database engine/version, schema and table scope. Prefer read-only access. If connection access is missing, request a schema-only export or connection setup without asking the user to paste secrets into chat.
2. Inspect existing migrations, schema dumps and migration tracking alongside database metadata. Reconcile overlaps and drift before adding files; preserve established migration history.
3. Consult official Laravel 13 [database inspection](https://laravel.com/framework/docs/13.x/database#inspecting-your-databases) and [migration documentation](https://laravel.com/framework/docs/13.x/migrations). Use read-only schema APIs or the database's native metadata tools, checking engine-specific features in its official documentation when needed.
4. Capture tables, exact column types/lengths/precision, nullability, literal versus expression defaults, generated/identity columns, primary/unique keys, indexes, foreign keys and their actions. Include relevant collation, views, checks, triggers, sequences and other engine-specific objects, or explicitly mark anything not inspected/reproduced.

Inspect metadata rather than dumping application rows. Infer candidate relationships from constraints and existing application code; an `_id` suffix alone is not proof. Confirm unconstrained relationships, business validation and access rules with the user. Select actual business resources; do not expose every infrastructure or sensitive table as CRUD.

## Reconstruct a baseline

Write Laravel PHP baseline migrations for the observed schema, without silently renaming fields, adding timestamps or redesigning keys. Order tables by dependencies and place cyclic foreign keys in a later migration when necessary. Represent engine-specific features faithfully with documented SQL if Laravel's schema builder cannot express them; disclose portability limits. A schema dump may be an agreed alternative, but does not silently replace a request for PHP migrations.

Separate two deliverables:

- **Baseline:** recreates the observed schema in an empty database. It is not a pending instruction to create those tables again on the populated source.
- **Incremental changes:** express requested differences after that baseline. Do not fold new features or inferred improvements into the reconstructed schema.

Keep unadopted baseline files outside the application's normal pending-migration directory, such as `database/baselines/<connection>/`, until the adoption strategy is agreed. Explain how they will be used for fresh installations and how the existing database will be baselined. Reconcile any existing schema dump so a fresh installation does not create the same objects twice. Moving baseline files into the normal migration path or changing migration tracking on an existing database requires an explicit adoption plan and authorization; do not fabricate executed migration records automatically.

Avoid blanket `hasTable` guards that conceal schema differences. A guarded create with an unconditional drop in `down()` could destroy a pre-existing table. Document baseline rollback scope and test rollback only on disposable databases created for this purpose. Never run resets, drops, data changes or baseline migrations against the source simply to validate reconstruction.

## Prove equivalence and hand off

Replay the baseline in an isolated empty database using the same engine and a compatible version. Compare the resulting schema with the captured source metadata, accounting for engine-normalized names/defaults. Check columns, types, defaults, indexes, constraints and relevant engine-specific objects; a successful migration run alone is not proof of equivalence. SQLite-only tests do not establish equivalence for a different source engine.

Report reproduced objects, deviations or unknowns, files written, comparison/test results and the baseline-adoption plan still needing approval. If no suitable test database is available, deliver the files as unverified rather than implying reconstruction was proven. Once the schema is established, continue the main skill's backend/UI workflow within the user's requested scope.
