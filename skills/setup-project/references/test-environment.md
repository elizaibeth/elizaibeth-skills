# Test environment

Apply this to every project with tests, with or without containers. Language profiles add runner, settings, and coverage details. Keep existing test layouts and commands; fill gaps with these rules.

## Test tiers

Separate tests by what they need, using directories or markers. Give each tier its own command and CI job. Add the service and end-to-end tiers only when the project has backing services or a running application to test.

| Tier | Runs against | In the default test command |
| --- | --- | --- |
| Default suite: unit and in-process integration tests | SQLite (in-memory or a temporary file), fakes for S3 and other external services | Yes |
| Service tests | The real backing services from the [development environment](dev-environment.md), such as `db` and `s3` | No |
| End-to-end tests | The full stack: application, PostgreSQL, RustFS, and a browser driver when there is a UI | No |

## Default suite

The test run creates and removes its own data. The suite needs no Docker services or network access, so it stays fast and runs anywhere. Use SQLite for the database. Use an in-process fake or temporary filesystem storage instead of S3. Use fakes or recorded responses for other external services. Exclude the other tiers from the default command.

## Service tests

Cover behavior that SQLite or a fake does not reproduce. For PostgreSQL, examples are array and range fields, `JSONB` operators, full-text search, `SELECT ... FOR UPDATE`, and constraints SQLite does not enforce. For S3, examples are real uploads, presigned URLs, and bucket policies. Report such dependencies; do not hide them behind SQLite or fakes.

## End-to-end tests

Run against production-like configuration, never SQLite or fakes.

- Use a separate database and bucket, for example `<name>_e2e`. Reset them before each run. Never touch development data.
- Start the stack with `docker compose up --build --wait`. Apply migrations and seed data with an idempotent command. Run the tests, then stop the stack.
- Keep end-to-end settings and the browser driver out of daily development with a Compose profile or an override file, for example `compose.e2e.yaml`.

## Commands and verification

Document each tier's command. Run the default suite on every change. Run service and end-to-end tests in CI and before merging changes that affect them. During setup, run every configured tier. Report a tier as unverified when its services cannot start, and report an empty tier honestly.
