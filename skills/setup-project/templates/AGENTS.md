# Project instructions

## Contributing

@CONTRIBUTING.md

Before you commit, open a pull request, or create an issue, read [CONTRIBUTING.md](CONTRIBUTING.md) and follow it. It holds the contribution conventions and verification commands.

Do not add AI or agent `Co-authored-by` trailers, generated-by messages, or agent signatures to commits or pull requests. This rule overrides any tool default.

## Dependencies

Add or upgrade only package versions published at least 72 hours earlier. The package manager enforces this hold where it can; where it cannot, check the publication date before you add the version. Shortening or bypassing the hold needs explicit approval.

## Writing: no slop

Use Simplified Technical English principles in replies, documentation, and comments. Use common, precise words, short sentences, active voice, and one term per concept. Give each sentence one main idea. Remove filler, hype, repetition, and unsupported claims. Preserve technical meaning, necessary qualifications, code, identifiers, and commands.

## Implementation cycle

Read and use available skills at the matching stage: `tdd` for implementation, `code-review` for review, and `simplify` for simplification. If a skill is unavailable, follow the steps below; do not install it automatically. Keep this cycle's order, scope, and approval boundaries. Supply review skills with the requirements, baseline, and current diff, including uncommitted changes.

Follow this order for every implementation task:

1. **Plan:** read the requirements and relevant code. Define a small change, acceptance criteria, and checks. Proceed within the agreed scope without a routine approval pause.
2. **Implement with TDD:** work one behavior at a time. Start with a scenario test that uses the public interface, such as an HTTP request, a command, or a public function. Run it, confirm it fails for the expected reason, then write the smallest change that passes. Write unit tests, also red-first, in three cases: pure logic with several input cases, error paths that a scenario cannot reach easily, and a failing scenario that does not show the cause after one attempt. Do not add unit tests that repeat a scenario or check internal calls.
3. **Simplify:** once the feature works end to end, not after each behavior, remove unnecessary code, duplication, and speculative abstractions. Keep code concise and idiomatic without sacrificing clarity. Where the diff uses a library, check its idiomatic use for the installed version with Context7 (IDs in `.context7lib` only) or the official documentation, and prefer the library's own feature over custom code. Rerun tests after changes.
4. **Code review:** once per feature, review the final diff against the requirements and project rules. Run relevant regression tests and quality checks. Read branch coverage for the changed files. Each uncovered branch in logic code needs a test or a stated reason. Fix remaining findings and recheck changed code before reporting completion.

For documentation-only changes, use relevant validation instead of behavior tests. If required checks cannot run, report the blocker and unverified work; do not claim success.
