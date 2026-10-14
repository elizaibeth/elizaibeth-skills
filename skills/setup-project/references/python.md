# Python

Configure Ruff to match the supported Python version, the existing runner or pytest, and mypy or the existing type checker. Scope typing and exclusions to the actual packages. Run pip-audit or the existing dependency audit against the project's locked dependencies. Local hooks must use the project environment so installed libraries and stubs are visible.

## Package manager

Default to **uv** for new Python projects, including Django, unless the user specifies another manager. Use `pyproject.toml` and commit `uv.lock`; keep `.venv` ignored and align `.python-version` with the supported Python range. Use a `src/` layout for new packages (`uv init --package`).

For existing projects, detect the manager from lockfiles, configuration, and contributor commands. `pyproject.toml` alone does not identify a manager. Preserve an established Poetry, Pipenv, or requirements-based workflow unless migration is requested. Use uv when no manager is established; avoid creating competing lockfiles.

For uv projects, change dependencies only with `uv add`, `uv add --dev`, and `uv remove`, so each entry gets a lower bound and the lock stays current. Do not edit dependency arrays by hand. Run checks through `uv run`; use `uv sync --locked` and `uv run --locked` in CI so stale locks fail. Match development groups between local checks and CI. See the official [project guide](https://docs.astral.sh/uv/guides/projects/) and [locking guidance](https://docs.astral.sh/uv/concepts/projects/sync/).

Use the project's declared Python version. Typical checks are:

```sh
uv lock --check                 # uv
poetry check                    # Poetry
python -m pip check             # pip environments
```

Only run dependency updates when requested. For other managers, use their canonical development dependency group and match CI dependencies to local checks.

## Container

Follow the [development environment](dev-environment.md). Base the image on the official `python` slim image for the declared version. Copy uv from `ghcr.io/astral-sh/uv:<pinned version>`. Set `UV_LINK_MODE=copy`, use a cache mount, and run `uv sync --locked --no-install-project` before copying the source, then `uv sync --locked`. Keep the environment out of the bind mount: set `UV_PROJECT_ENVIRONMENT=/opt/venv`, or exclude `.venv/` from Compose watch. See the uv [Docker guide](https://docs.astral.sh/uv/guides/integration/docker/).

## Defaults for new projects

Keep existing choices. When the project has none, use:

- **Ruff:** `select = ["E", "W", "F", "I", "UP", "B", "SIM", "C4", "RET", "PTH", "S"]`. Ignore `S101` in tests only, not all of `S`. Add framework rule sets, such as `DJ` for Django or `FAST` for FastAPI.
- **mypy:** `strict = true`, with plugins for the libraries in use, such as `pydantic.mypy`. For existing untyped code, increase strictness per module with overrides.
- **pytest:** set `testpaths`. Keep coverage flags out of `addopts` so focused runs stay fast.

## Hooks and audit

Run Ruff, the format check, and mypy as local hooks in the project environment: the application container, or `uv run --locked` when the project has no container. After writing `.pre-commit-config.yaml`, run `pre-commit autoupdate` so remote hooks pin current releases. Keep the audit and full test suite as explicit commands.

Audit the locked dependencies, not the installed project. Verify flags against the installed `pip-audit --help`:

```sh
uv export --frozen --no-emit-project | uv run --locked pip-audit --strict --disable-pip --require-hashes -r /dev/stdin
```

Ignore only files the project creates. Editor and OS files, such as `.idea/` and `.DS_Store`, belong in the contributor's global gitignore.

## Coverage

Prefer the project's existing runner. Configure `[tool.coverage.run]` with `source` set to the import package and `branch = true`. For pytest projects, use `pytest-cov` in an explicit coverage command:

```sh
pytest --cov --cov-report=term-missing --cov-report=xml
```

For another runner, use its native coverage integration or `coverage run`/`coverage report`. Document install, locked install, focused tests, full tests, coverage, lint, format, typing, and audit commands through the detected manager and container.
