# Frontend

Apply this profile whenever frontend dependencies exist or are requested, including Django and Laravel asset pipelines. Backend package managers remain unchanged. A tooling-only `package.json` does not require adding a frontend stack.

## Packages

Default new frontend projects to **pnpm**. Pin an exact supported version in `package.json`'s `packageManager` field, align Node.js with the framework, and commit `pnpm-lock.yaml`. Use the same versions locally and in CI.

Preserve an established npm, Yarn, or Bun setup unless migration is requested. Report the pnpm policy as unapplied; do not silently replace its lockfile or claim the release hold is enforced.

## Three-day release hold

Merge this into the root `pnpm-workspace.yaml`, including for single-package projects. Preserve workspace definitions and stricter existing settings:

```yaml
minimumReleaseAge: 4320
minimumReleaseAgeStrict: true
minimumReleaseAgeIgnoreMissingTime: false
trustLockfile: false
```

This delays newly published registry versions, including transitive dependencies, for 72 hours. Fail when no eligible version exists or publication dates are missing; keep lockfile verification enabled. This reduces risk; it does not guarantee safety.

The full configuration requires pnpm 11.3 or newer. `minimumReleaseAge` alone exists from 10.16. For an older pinned version, configure supported controls and report enforcement gaps; a major upgrade needs approval. Verify behavior against the installed version's [official settings](https://pnpm.io/settings/dependency-resolution#minimumreleaseage).

Keep `minimumReleaseAgeExclude` absent or empty by default. Report existing exceptions. Adding exemptions, shortening the hold, or bypassing it with another manager or Git/tarball dependencies requires explicit approval. If a version is too new, use an eligible compatible version or report the block.

## Checks

Use `pnpm add` / `pnpm add -D` for dependencies and `pnpm run <script>` for project checks. Use `pnpm install --frozen-lockfile` in CI; setup may run `pnpm install` to create or intentionally update the lockfile.

Reuse framework tooling and existing scripts for formatting, linting, type checks, tests, coverage, and production builds. Add only missing checks relevant to the project. Run tests in non-watch mode and collect coverage with the chosen runner. Keep audits (`pnpm audit`) explicit and ignore dependencies and build output.

Verify the effective release-age settings and locked install before reporting success. Report unavailable checks and enforcement gaps separately from passing checks.
