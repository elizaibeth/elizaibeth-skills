# Context7 documentation policy

Generate the documentation allowlist during project setup. Use Context7 only when its tools are available; otherwise use installed sources or official version-matched documentation. Setup does not install Context7 or configure credentials.

## Set up the allowlist

Keep approved Context7 library IDs in `.context7lib` at the target repository root: one exact ID per line, with no annotations. This is our project convention, not a Context7 configuration file that enforces access.

Read the matching sections of the [approved catalog](context7-libraries.md). Its exact IDs are pre-approved defaults. Select the language/framework entries and tools actually used or configured in this run, based on manifests, direct dependencies, imports, and tool configuration. Do not include unrelated rows or every transitive package.

Write the selected IDs automatically, sorted and deduplicated, without a selection pause. Merge existing approved entries; preserve explicit project exclusions and version pins rather than adding the unversioned equivalent. Reruns must not duplicate entries. If no rows match, write an empty file and report the unsupported libraries. Generate it even when Context7 is unavailable and report that live access was not checked.

Unknown libraries use official documentation. Expanding the catalog or adding a project-specific exception requires an explicit request and source verification. Ordinary planning, coding, and review never expand the allowlist. An absent or empty allowlist permits no Context7 queries.

## Persist the usage rule

Add this rule to the target's existing agent instructions, adapting its wording without duplicating existing policy:

> When Context7 is available, query documentation only for exact IDs listed in `.context7lib`. Match documentation to installed versions. During planning, check API capabilities or constraints that affect the approach. During implementation, verify uncertain signatures, configuration, and behavior. During review, verify library-dependent findings against relevant documentation. Reuse evidence already gathered for the same version and question. For an unlisted library or unavailable service, use installed sources or official documentation and report unresolved uncertainty. Do not automatically add IDs, substitute another ID, or treat a library's presence on the list as approval to install it.

Use the hard-coded IDs directly; setup does not need discovery searches. Do not manufacture version suffixes or silently substitute IDs. Include the installed version in queries; if returned documentation does not cover it, fall back to official versioned docs. Keep queries specific and exclude credentials and private project data. For security-critical decisions, verify against official security guidance and tests.

This rule guides agent behavior; hard enforcement requires a separate tool-call guard. Report IDs retained or added, unmatched dependencies, and whether Context7 could be checked.
