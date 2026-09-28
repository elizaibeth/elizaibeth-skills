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

From the repository root, install a skill with the [skills CLI](https://github.com/vercel-labs/skills):

```sh
npx skills add . --skill <skill-name>
```

Add `--global` to make it available across projects. For example:

```sh
npx skills add . --skill no-slop --global
```

Once hosted on GitHub, replace `.` with `OWNER/REPO` to install remotely.

### Claude Code plugin

From this repository's directory, run these commands inside Claude Code:

```text
/plugin marketplace add .
/plugin install elizaibeth-skills@elizaibeth-skills
```

Choose either the plugin or the skills CLI installation to avoid duplicate skills.

## Usage

### Setup Project

> Use $setup-project to set up this project.

Applies shared contribution conventions and profiles for Go, Python, Django, Swift/iOS, PHP, Laravel, and frontend projects. Mixed repositories use all matching profiles. For an empty directory, name the stack in your prompt. New frontend projects default to pnpm with a three-day release hold.

Setup creates a `.context7lib` allowlist for the project's tools. This guides agent queries when Context7 is available; it does not enforce tool access. See the [documentation policy](skills/setup-project/references/context7.md).

### Big Backend

See the [usage guide](skills/big-backend/README.md) for database, specification, design, and review examples.

## Development and releases

Use Node.js 22 or newer:

```sh
npm ci
npm run check
npm run changeset
```

Each skill lives in `skills/<skill-name>/`, with instructions in `SKILL.md` and supporting files alongside it. Add new skills to the table above.

Add a Changeset for user-visible skill or packaging changes. See the [release guide](docs/releases.md) for versioning and GitHub automation. npm is used for development tooling, not publication.

## License

[MIT](LICENSE).
