# elizaibeth-skills

My collection of reusable agent skills, organised like [mattpocock/skills](https://github.com/mattpocock/skills).

## Available skills

| Skill | Description |
| --- | --- |
| [no-slop](skills/no-slop/SKILL.md) | Write and rewrite using Simplified Technical English to remove AI slop. |
| [stress-test](skills/stress-test/SKILL.md) | Ruthlessly critique ideas, plans, reports, or code. |
| [big-backend](skills/big-backend/SKILL.md) | Build Laravel 13 CRUD backends from a database, specification, or system-design conversation. |
| [setup-project](skills/setup-project/SKILL.md) | Apply contribution conventions and set up language-specific tooling, tests, coverage, hooks, and optional CI. |
| [loopy](skills/loopy/SKILL.md) | Implement GitHub issues with TDD, coverage, regression checks, and bounded iterations. |

## Installation

Install with the [skills CLI](https://github.com/vercel-labs/skills) using Node.js 22.20 or newer:

```sh
npx skills add elizaibeth/elizaibeth-skills --skill no-slop --global
```

Replace `no-slop` with another skill name, or use `--skill '*'` for all skills. Omit `--global` for a project-local installation. To install from a local checkout, replace `elizaibeth/elizaibeth-skills` with `.`.

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

Applies shared contribution conventions and profiles for Go, Python, Django, Swift/iOS, PHP, Laravel, and frontend projects. Mixed repositories use all matching profiles. For an empty directory, name the stack in your prompt. New frontend projects default to pnpm with a three-day release hold.

Setup creates a `.context7lib` allowlist for the project's tools. This guides agent queries when Context7 is available; it does not enforce tool access. See the [documentation policy](skills/setup-project/references/context7.md).

### Big Backend

See the [usage guide](skills/big-backend/README.md) for database, specification, design, and review examples.

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
