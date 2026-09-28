# elizaibeth-skills

Reusable AI agent skills for project setup, development, review, and clear technical writing.

## Available skills

| Skill | Description |
| --- | --- |
| [no-slop](skills/no-slop/SKILL.md) | Write and rewrite using Simplified Technical English to remove AI slop. |
| [stress-test](skills/stress-test/SKILL.md) | Ruthlessly critique ideas, plans, reports, or code. |
| [big-backend](skills/big-backend/SKILL.md) | Build Laravel 13 CRUD backends from a database, specification, or system-design conversation. |
| [setup-project](skills/setup-project/SKILL.md) | Apply contribution conventions and set up language-specific tooling, tests, coverage, hooks, and optional CI. |
| [loopy](skills/loopy/SKILL.md) | Implement GitHub issues with TDD, coverage, regression checks, and bounded iterations. |

## Installation

Install the skills you want with the [skills CLI](https://github.com/vercel-labs/skills) using Node.js 22.20 or newer:

```sh
npx skills add elizaibeth/elizaibeth-skills --skill no-slop --global
npx skills add elizaibeth/elizaibeth-skills --skill stress-test --global
npx skills add elizaibeth/elizaibeth-skills --skill big-backend --global
npx skills add elizaibeth/elizaibeth-skills --skill setup-project --global
npx skills add elizaibeth/elizaibeth-skills --skill loopy --global
```

Use `--skill '*'` to install all skills in one command. Omit `--global` for a project-local installation. To install from a local checkout, replace `elizaibeth/elizaibeth-skills` with `.`.

## Updates

Update all globally installed skills:

```sh
npx skills update --global
```

For tracked GitHub installs, the CLI skips unchanged skill folders. Updates follow the installed source branch or ref, not numbered skill releases. Project-local updates use `--project` and currently refresh unchanged skills too. See the [CLI documentation](https://github.com/vercel-labs/skills#skills-update).

If you installed the former Claude Code plugin, uninstall it through Claude Code before using this method to avoid duplicate skills.

## Usage

### Setup Project

> Use $setup-project to set up this project.

See the [usage guide](skills/setup-project/README.md) for supported stacks, defaults, and examples.

### Loopy

> Use $loopy to implement issues #12 and #15 in this repository.

See the [usage guide](skills/loopy/README.md) for the implementation loop and iteration limits.

### Big Backend

See the [usage guide](skills/big-backend/README.md) for database, specification, design, and review examples.

### No Slop

> Use $no-slop to rewrite this README in Simplified Technical English. Preserve commands and technical meaning.

> Use $no-slop to write a short PR description for this diff.

### Stress Test

> Use $stress-test on this implementation plan. Check its assumptions and failure modes.

> Use $stress-test to assess whether this change meets the issue's acceptance criteria.

## Development

Use Node.js 22 or newer:

```sh
npm ci
npm run check
```

Each skill lives in `skills/<skill-name>/`, with instructions in `SKILL.md` and supporting files alongside it. Add new skills to the table above.

Work on `develop`; merge verified changes to `main` for stable use and make `main` the GitHub default branch. CI runs on both branches and pull requests. Git history records changes; no Changesets or version bumps are needed. npm supplies validation tooling only; nothing is published to npm.

## License

[MIT](LICENSE).
