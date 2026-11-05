# Context7 documentation policy

Generate the documentation allowlist during project setup. Use Context7 only when its tools are available; otherwise use installed sources or official version-matched documentation. Setup does not install Context7 or configure credentials.

## Set up the allowlist

Keep approved Context7 library IDs in `.context7/allowlist.txt` in the target repository: one exact ID per line. Lines that start with `#` are comments. Start the file with this header:

```text
# Context7 library IDs that agents may query for documentation.
# Setup checks each ID live: it exists, is rated High, and comes from the official project.
# One ID per line. See AGENTS.md.
```

This is our project convention, not a Context7 configuration file that enforces access. If a legacy `.context7lib` exists, check its entries like any other, move them into the new file, and delete it.

Check every ID live on every setup run. Do not copy IDs from memory or from the catalog without the check.

1. List the libraries and tools actually used or configured in this run, based on manifests, direct dependencies, imports, and tool configuration. Do not include transitive packages.
2. For each one, start from the matching row in the [known-ID catalog](context7-libraries.md) when there is one. Otherwise call `resolve-library-id` with the exact package name.
3. Accept an ID only when all of these are true:
   - `resolve-library-id` returns it with Source Reputation **High**.
   - Its source is the official project: the upstream repository or the official documentation site. Search rank and benchmark score alone do not prove this.
   - A `query-docs` call with the installed version returns documentation for that library.
4. If the catalog ID fails, look for another entry that passes. If no entry passes, leave the library out and list it as unmatched.

Run all lookups for one step in a single parallel batch. Write the accepted IDs sorted and deduplicated, without a selection pause. Merge existing entries only when they pass the same check; report and remove entries that fail. Preserve explicit project exclusions and version pins. Reruns must not duplicate entries.

When Context7 is unavailable, write the file with only its header and report that no IDs could be checked. An absent or empty allowlist permits no Context7 queries. Ordinary planning, coding, and review never expand the allowlist; only a setup run or an explicit request does.

## Persist the usage rule

Add this rule to the target's root `AGENTS.md`, adapting its wording without duplicating existing policy:

> When Context7 is available, query documentation only for exact IDs listed in `.context7/allowlist.txt`. Match documentation to installed versions. During planning, check API capabilities or constraints that affect the approach. During implementation, verify uncertain signatures, configuration, and behavior. During simplification, check idiomatic use and built-in features that can replace custom code. During review, verify library-dependent findings against relevant documentation. Reuse evidence already gathered for the same version and question. For an unlisted library or unavailable service, use installed sources or official documentation and report unresolved uncertainty. Do not automatically add IDs, substitute another ID, or treat a library's presence on the list as approval to install it.

Do not manufacture version suffixes or silently substitute IDs. Include the installed version in queries; if returned documentation does not cover it, fall back to official versioned docs. Keep queries specific and exclude credentials and private project data. For security-critical decisions, verify against official security guidance and tests.

This rule guides agent behavior; hard enforcement requires a separate tool-call guard. Report IDs accepted, IDs rejected with the reason (not found, rating below High, unofficial source, no documentation), and unmatched dependencies.
