# Big Backend

Build Laravel 13 CRUD backends and admin interfaces from a database, specification, or design conversation, using bundled backend templates and UI examples. Targets PHP 8.3+.

## Install

Install from GitHub with Node.js 22.20 or newer:

```sh
npx skills add elizaibeth/elizaibeth-skills --skill big-backend --global
```

Omit `--global` for project-local use. For local development, replace the repository name with `.` from the collection root, or symlink the complete skill folder to `~/.agents/skills/big-backend`. Choose one installation method to avoid duplicates.

## Use

Open the target Laravel project, or name a directory for a new app. Include `$big-backend` in your prompt. Application code goes in the target, not this reference library.

### Existing database

> Use $big-backend to inspect this database, reconstruct missing Laravel migrations, and build an admin interface. Do not change the source database.

Inspection is read-only. The agent reconciles existing migrations and reconstructs the current schema, not its history. Baseline migrations are tested separately from the source database. Supply access through the environment or a schema-only export; keep credentials out of chat.

### Written specification

> Use $big-backend to turn this specification into migrations and a complete CRUD website. Start with a schema proposal.

### Design conversation

> Use $big-backend to design a booking system. Agree the requirements and schema before building.

### Existing project or review

> Use $big-backend to add an admin editor to this existing Laravel project.

> Use $big-backend to review these Laravel 13 CRUD changes against official documentation. Report findings without changing files.

You can also request migrations alone or start from existing migrations.

## Build workflow

For new systems or consequential schema changes, the agent presents the schema and waits for agreement before implementation. Small, clearly specified additions can proceed directly. Agreement on a schema does not authorize running migrations against an existing database.

Builds proceed through migrations, models, validation, authorization, routes, screens, and tests. The agent checks framework behavior against official Laravel 13 documentation and reports test results and unverified work.

## Skill contents

- [SKILL.md](SKILL.md): instructions for the coding agent.
- [backend/resources/templates/](backend/resources/templates/): backend reference templates.
- [components/COMPONENTS.md](components/COMPONENTS.md): UI examples, CSS and JavaScript guidance.
- [references/](references/): focused implementation, database and verification guides.
- [agents/openai.yaml](agents/openai.yaml): skill-picker metadata and automatic-invocation policy.

## Maintenance

Keep `backend/`, `components/`, `references/` and `agents/` with `SKILL.md`. Installed use must not depend on the collection's root documentation or development tools. Maintain the source in `skills/big-backend/`.

## License

[MIT](LICENSE).
