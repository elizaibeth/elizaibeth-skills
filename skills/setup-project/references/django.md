# Django additions

Apply the Python profile first. Inspect settings modules, apps, migrations, and database configuration. Preserve app boundaries and migration history. Add django-stubs when using mypy; configure the actual settings module and dependencies. Run deployment checks only when deployment settings are in scope.

## Package manager and settings

In uv projects, prefix the commands below with `uv run`. Use the project's test settings module and a disposable test database. Never point checks at production settings or data.

Run the checks with the same settings and environment shape used by CI:

```sh
python manage.py check
python manage.py makemigrations --check --dry-run
python manage.py test
```

Use `pytest-django` only when the project already uses pytest or has chosen it during setup.

## Coverage

For pytest projects:

```sh
pytest --cov=. --cov-report=term-missing --cov-report=xml
```

For Django's test runner, use the project's existing coverage wrapper or `coverage run manage.py test` followed by `coverage report` and `coverage xml`. Scope coverage to application packages and retain the project's exclusion policy. Document test settings and database prerequisites. Schema checks do not authorize applying migrations to shared data.
