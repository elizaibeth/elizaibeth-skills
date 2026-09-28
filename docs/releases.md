# Releasing the collection

The collection uses one version for all skills. `package.json` is the version source; the release command synchronises the Claude plugin manifest and npm lockfile. npm dependencies support maintenance only. The package is private and releases create Git tags, not npm packages.

## Record a change

1. Run `npm ci` with Node.js 22 or newer.
2. Edit the skills, then run `npm run check`.
3. Run `npm run changeset` and select `elizaibeth-skills`. Choose patch for corrections, minor for new skills or compatible additions, and major for incompatible changes to existing usage.
4. Commit the generated `.changeset/*.md` with the change.

Maintenance-only edits that do not affect skill users can omit a changeset.

The `human-id` override keeps Changesets compatible with early Node.js 22 versions: later `human-id` releases use ESM, while Changesets loads it with `require`. Recheck that compatibility before removing the override.

## Automated releases

After this repo is pushed to GitHub, enable **Settings → Actions → General → Allow GitHub Actions to create and approve pull requests**. The workflow uses the built-in `GITHUB_TOKEN`; no npm token is needed.

On pushes to `main`, the release workflow opens or updates a version PR. That PR consumes pending changesets, updates `CHANGELOG.md`, and synchronises versions. Review and merge it to create the version's Git tag. GitHub Release pages are not created by this workflow.

The initial changeset prepares version `0.1.0`. Until that PR is merged, the manifests use `0.0.0`.

GitHub does not start other push/PR workflows for changes made with its built-in token. If branch protection requires the Check workflow on the automated version PR, arrange a GitHub App token for the release action or push the release branch yourself. The release workflow also runs checks before any version or tag work.

## Local release preparation

To prepare version changes locally, run `npm run version`, then `npm run check` and review the changelog and manifests. Commit those generated files together. Use **npm run version**, not `npm version`, which has different tagging and lifecycle behaviour.

`npm run release` creates local Git tags; the GitHub action pushes them. It does not publish anything to npm.

## Claude Code packaging

The plugin automatically discovers `skills/*/SKILL.md`. `.claude-plugin/plugin.json` describes the collection, and `.claude-plugin/marketplace.json` makes this repository a marketplace containing that plugin.

Validate the manifests with `claude plugin validate .` when Claude Code is available. For installation, see the root README.

References: [Changesets action](https://github.com/changesets/action/tree/maintenance/v1), [Claude plugin reference](https://code.claude.com/docs/en/plugins-reference).
