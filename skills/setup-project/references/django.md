# Django additions

Apply the Python profile, the [development environment](dev-environment.md), and the [test environment](test-environment.md) first. Inspect settings modules, apps, migrations, and database configuration. Preserve app boundaries and migration history. Run deployment checks only when deployment settings are in scope.

Read [design style](django-style.md) and add its `## Django design` rules to `AGENTS.md`.

## New projects

Create the project with `django-admin startproject config .`. Split settings into `config/settings/` modules: `base`, `dev`, `test`, `e2e` when needed, and `prod`. Read `SECRET_KEY`, `DEBUG`, `ALLOWED_HOSTS`, and database and storage settings from the environment; list their names in `.env.example`.

- **dev:** PostgreSQL from the Compose `db` service, through `psycopg`.
- **test:** for the default suite. SQLite (`ENGINE: django.db.backends.sqlite3`; Django's test runner uses an in-memory database). Use a fixed placeholder `SECRET_KEY` and no external services. Test settings must import without `.env`, so tools such as mypy can load them.
- **e2e:** for service and end-to-end tests, when the project has them. Extends `test` with PostgreSQL and RustFS from the environment, using separate end-to-end database and bucket names.
- **prod:** PostgreSQL and real environment values only.

Follow the [test environment](test-environment.md) tiers. Code that uses `django.contrib.postgres` or other PostgreSQL-only features needs service tests with the `e2e` settings. For browser tests, use pytest-playwright against the running stack, or `StaticLiveServerTestCase` with the `e2e` settings.

When the project needs S3, use `django-storages` with its S3 backend. Set `endpoint_url` and `addressing_style: "path"` in `STORAGES` options from the environment, and point dev at the RustFS service. Test settings use `FileSystemStorage` in a temporary directory or `InMemoryStorage`.

## Settings for tools

Configure each tool with the test settings module, not an environment variable that contributors must remember:

```toml
[tool.pytest.ini_options]
DJANGO_SETTINGS_MODULE = "config.settings.test"

[tool.mypy]
plugins = ["mypy_django_plugin.main"]

[tool.django-stubs]
django_settings_module = "config.settings.test"
```

Add `django-stubs` when using mypy, and `djangorestframework-stubs` when the project uses Django REST framework. Add the Ruff `DJ` rules and exclude `migrations/` from linting. Allow a placeholder secret (`S105`) only in the test settings file.

## Checks

In uv projects, prefix the commands below with `uv run`; with the container setup, run them in the application container. Never point checks at production settings or data.

```sh
python manage.py check --fail-level WARNING
python manage.py makemigrations --check --dry-run
python manage.py test        # or pytest, with pytest-django
```

Keep `makemigrations --check` as an explicit command and CI step, not a commit hook; it starts Django. Use `pytest-django` only when the project already uses pytest or chose it during setup. Run `check --deploy` only with production settings, on request, and with placeholder environment values, never real secrets.

## Coverage

Scope coverage to application packages, and omit generated and boilerplate files:

```toml
[tool.coverage.run]
source = ["config", "<app>", "..."]
omit = ["*/migrations/*", "*/settings/*", "manage.py", "*/asgi.py", "*/wsgi.py"]
branch = true
```

For pytest projects, run `pytest --cov --cov-report=term-missing --cov-report=xml`. For Django's test runner, use the project's existing coverage wrapper, or `coverage run manage.py test` followed by `coverage report` and `coverage xml`. Keep the project's existing exclusion policy. Document test settings and database prerequisites. Schema checks do not authorize applying migrations to shared data.
