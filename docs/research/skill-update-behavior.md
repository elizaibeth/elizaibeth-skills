# Skills CLI update behavior

Checked 2026-09-28 against the official `vercel-labs/skills` source at published commit `7407f3893ad4dceab546ac002c3ef806e4000c73` (CLI 1.7.0). This is source inspection; no installed skills were updated.

## What changes get installed?

- **Global GitHub skills:** `npx skills update -g` compares each tracked skill's stored folder hash with its current upstream folder hash. Unchanged skills are skipped even when another skill in the same repository changes. Missing hash/path tracking prevents automatic checking; moved paths can also trigger updates. [Global update implementation](https://github.com/vercel-labs/skills/blob/7407f3893ad4dceab546ac002c3ef806e4000c73/src/update.ts#L454-L594).
- **Project GitHub skills:** `npx skills update -p` refreshes each eligible tracked skill by calling `add` for that skill. It does **not** compare `computedHash` to skip unchanged skills. Legacy entries without `skillPath` require reinstalling. [Project update implementation](https://github.com/vercel-labs/skills/blob/7407f3893ad4dceab546ac002c3ef806e4000c73/src/update.ts#L682-L909).

The global GitHub hash is the skill directory's Git tree SHA, covering its nested files. Changes outside that folder do not change that SHA. A root-level skill uses the whole repository tree SHA instead. [Folder hash extraction](https://github.com/vercel-labs/skills/blob/7407f3893ad4dceab546ac002c3ef806e4000c73/src/blob.ts#L259-L280).

## Scope and versions

Use explicit `-g` or `-p`. Without flags, interactive updates prompt for project/global/both; `-y` or noninteractive operation selects project when project skills are detected, otherwise global. Named skills without a scope flag search both scopes. [Scope resolution](https://github.com/vercel-labs/skills/blob/7407f3893ad4dceab546ac002c3ef806e4000c73/src/update.ts#L79-L158).

Updates preserve the installed branch/tag ref. Without an explicit ref, GitHub tree lookup tries `HEAD`, then `main`, then `master`. The implementation does not discover or compare separate per-skill semantic-version tags. Pinning a tag keeps that tag; it does not advance automatically to the next tag. [Ref lookup](https://github.com/vercel-labs/skills/blob/7407f3893ad4dceab546ac002c3ef806e4000c73/src/blob.ts#L220-L257), [update source construction](https://github.com/vercel-labs/skills/blob/7407f3893ad4dceab546ac002c3ef806e4000c73/src/update-source.ts#L94-L139).

Recommendation: keep independently changing skills in separate folders within one repository. This already gives global installs selective content updates without collection or per-skill version numbers. Introduce versions only if users need named releases or explicit pins. Per-skill tags alone will not provide automatic semantic-version upgrades through this CLI.
