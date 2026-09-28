# Python

Configure Ruff to match the supported Python version, the existing runner or pytest, and mypy or the existing type checker. Scope typing and exclusions to the actual packages. Run pip-audit or the existing dependency audit against the project's dependencies. Local hooks must use the project environment so installed libraries and stubs are visible.

## Package manager

Default to **uv** for new Python projects, including Django, unless the user specifies another manager. Use `pyproject.toml` and commit `uv.lock`; keep `.venv` ignored and align `.python-version` with the supported Python range.

For existing projects, detect the manager from lockfiles, configuration, and contributor commands. `pyproject.toml` alone does not identify a manager. Preserve an established Poetry, Pipenv, or requirements-based workflow unless migration is requested. Use uv when no manager is established; avoid creating competing lockfiles.

For uv projects, add application dependencies with `uv add` and development tools with `uv add --dev`. Run checks through `uv run`; use `uv sync --locked` and `uv run --locked` in CI so stale locks fail. Match development groups between local checks and CI. See the official [project guide](https://docs.astral.sh/uv/guides/projects/) and [locking guidance](https://docs.astral.sh/uv/concepts/projects/sync/).

Use the project's declared Python version. Typical checks are:

```sh
uv lock --check                 # uv
poetry check                    # Poetry
python -m pip check             # pip environments
```

Only run dependency updates when requested. For other managers, use their canonical development dependency group and match CI dependencies to local checks.

## Coverage

Prefer the project's existing runner. For pytest projects, use `pytest-cov`:

```sh
pytest --cov=<package-or-source-dir> --cov-report=term-missing --cov-report=xml
```

Replace the source placeholder with the actual import package or directory. For another runner, use its native coverage integration or `coverage run`/`coverage report`. Document install, locked install, focused tests, full tests, coverage, lint, typing, and audit commands through the detected manager.
