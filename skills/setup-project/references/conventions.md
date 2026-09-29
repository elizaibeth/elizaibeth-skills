# Contribution conventions

Apply these on every setup run. Inspect contribution files, agent instructions, tracker templates, and release tooling first. Preserve established rules, fill gaps with these defaults, and report conflicts briefly.

- Commit and PR subjects: `type(scope): imperative change`, targeting 72 characters; scope optional. Example: `fix(auth): refresh expired tokens`.
- Branches: `type/short-topic`, such as `feat/password-reset`.
- Issue titles: a concrete outcome, such as `Fix token refresh after expiry`.
- PR bodies: outcome, reason, verification; risks only when relevant. Link the issue.
- Attribution: apply the contribution template's attribution rule to commit messages (including squash/merge commits) and PR titles/descriptions. Exclude agent co-author trailers and generated-by signatures; preserve human attribution.
- Issues: brief context and observable acceptance criteria. Bugs also need reproduction and evidence; identify missing evidence honestly.
- Reviews: location, concrete problem, effect, and suggested correction. Omit generic praise and stylistic objections already handled by tools.
- Changelogs: user-visible impact, following existing release tooling.

Merge [CONTRIBUTING.md](../templates/CONTRIBUTING.md) into the target contribution guide, replacing generic verification guidance with actual project commands after tooling setup. Keep contribution policy there and link it from `AGENTS.md`.

## Agent instructions

Always create or update root `AGENTS.md` from [the agent template](../templates/AGENTS.md), including for unsupported stacks. Its writing rules and implementation cycle are required, not optional defaults. Merge equivalent sections once, preserve unrelated instructions, and report direct conflicts rather than silently dropping either rule. Keep the generated rules self-contained; they must not depend on installed skills or this collection.

Make root `CLAUDE.md` contain exactly one line: `@AGENTS.md`. Before replacing its contents, merge existing instructions into `AGENTS.md`, keeping Claude-specific rules labelled as such. Avoid circular references. Verify that instructions were preserved and `CLAUDE.md` contains only the import; reruns must not duplicate rules.

## Tracker templates

For GitHub repositories, install or merge [the PR template](../templates/pull-request.md) into `.github/pull_request_template.md` and [bug](../templates/issue-bug.md) / [feature](../templates/issue-feature.md) templates into `.github/ISSUE_TEMPLATE/`. Preserve existing issue forms; add template-picker metadata when creating Markdown issue templates. For other trackers, adapt to their existing local template mechanism and document conventions in the contribution guide.

Keep sections short and remove optional empty sections. Reuse existing template files on reruns. This configures future contributions; it does not rename branches, rewrite history, or change remote tracker settings.
