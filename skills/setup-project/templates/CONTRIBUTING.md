# Contributing

## Commits and branches

Use concise imperative subjects:

```text
type(scope): change
```

Examples: `fix(auth): refresh expired tokens`, `docs: explain local setup`.

Use `type/short-topic` branch names, such as `feat/password-reset` or `fix/token-refresh`.

## Pull requests

Keep the title in commit-subject format. Explain the outcome, why it matters, and how it was verified. Link the issue when one exists. Keep unrelated cleanup out of the change.

## Attribution

Do not add AI or agent `Co-authored-by` trailers, generated-by messages, or agent signatures to commit messages (including squash and merge commits) or PR titles and descriptions. Preserve genuine human authorship and co-author credit.

## Issues

Write an outcome-focused title. Include only the context, acceptance criteria, and evidence needed to act. Keep bug reproduction steps separate from feature acceptance criteria.

## Verification

Run the project's documented checks before requesting review. Report what ran and what could not run.

## Reviews and changelogs

Review comments state the location, problem, effect, and suggested correction. Changelog entries describe user-visible impact and follow the project's release process.
