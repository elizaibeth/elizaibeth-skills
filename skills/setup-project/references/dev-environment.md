# Development environment

Apply this to every project with a runnable application or backing services. Language profiles add stack details. Preserve an existing working container setup and database engine; switch engines or storage services only on request, and report the mismatch.

## Containers

Run the application, its backing services, tests, and checks in Docker containers. Contributors need only Docker, Git, and pre-commit on the host; a host language environment is optional editor support, not a requirement.

- Commit a `Dockerfile` and a root `compose.yaml`. Use Compose `develop.watch` or a source bind mount for reload. Keep dependency directories (for example `.venv`, `node_modules`, `vendor`) inside the container, not in the bind mount.
- Pin base and service images to an exact version tag. Check the registry for the current stable release; do not pin versions from memory. Do not use `latest`.
- Give each backing service a healthcheck. Make the application `depends_on` it with `condition: service_healthy`.
- Read configuration from environment variables. Commit `.env.example` with names and local-only defaults; ignore `.env`. Never commit real credentials.
- Use named volumes for service data. Do not bind-mount database files into the repository.
- Add a `.dockerignore` that excludes VCS data, local environments, caches, coverage output, and `.env`.
- Document `docker compose up --build`, a one-off command form (`docker compose run --rm app <command>`), and how to reset data (`docker compose down -v`).

Pre-commit runs on the host. Run hygiene and secret-scanning hooks there. Run language checks inside the application container, for example `docker compose run --rm --no-deps app <check>`, so they use the locked container environment.

## Database

Use PostgreSQL for application data. Add a `db` service from the official `postgres` image, pinned to a current stable major and minor tag. Set `POSTGRES_DB`, `POSTGRES_USER`, and `POSTGRES_PASSWORD` from `.env`, and use `pg_isready` as the healthcheck.

Tests use these services only in the service and end-to-end tiers; see the [test environment](test-environment.md).

## Object storage

When the project needs S3 (an S3 client or storage backend in its dependencies, or the user asks), use RustFS locally. Do not add MinIO; its community edition is archived. Report an existing MinIO service and replace it only on request.

- Add an `s3` service from `rustfs/rustfs`, pinned to a release tag. Use one node and one named volume. Set `RUSTFS_ACCESS_KEY` and `RUSTFS_SECRET_KEY` from `.env`. Expose port 9000 for the S3 API; expose the console (9001) only when useful.
- Use `http://s3:9000/health` (or the address in use) as the healthcheck. Check volume ownership and environment names against current RustFS documentation.
- Configure the application through standard settings: endpoint URL, region, access key, secret key, and bucket. Use path-style addressing. Production uses the same settings with real values.
- Create required buckets with an idempotent init step, not by hand.

## Verify

Run `docker compose config --quiet`, then `docker compose up --build --wait`, then the checks and the test tiers from the [test environment](test-environment.md) in the container. Stop the stack afterwards. If Docker is unavailable, report the container setup as unverified.
