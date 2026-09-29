# Project instructions

Follow [CONTRIBUTING.md](CONTRIBUTING.md) for contribution conventions and verification commands.

## Writing: no slop

Use Simplified Technical English principles in replies, documentation, and comments. Use common, precise words, short sentences, active voice, and one term per concept. Give each sentence one main idea. Remove filler, hype, repetition, and unsupported claims. Preserve technical meaning, necessary qualifications, code, identifiers, and commands.

## Implementation cycle

Read and use available skills at the matching stage: `tdd` for implementation, `code-review` for both reviews, and `simplify` for simplification. If a skill is unavailable, follow the steps below; do not install it automatically. Keep this cycle's order, scope, and approval boundaries. Supply review skills with the requirements, baseline, and current diff, including uncommitted changes.

Follow this order for every implementation task:

1. **Plan:** read the requirements and relevant code. Define a small change, acceptance criteria, and checks. Proceed within the agreed scope without a routine approval pause.
2. **Implement with TDD:** work one behavior at a time. Write a test, run it, confirm it fails for the expected reason, then write the smallest change that passes. Cover happy paths and relevant failure and boundary cases through public behavior.
3. **Quick code review:** check the diff for correctness, scope, safety, and missing tests. Fix concrete findings and rerun affected tests.
4. **Simplify:** remove unnecessary code, duplication, and speculative abstractions. Keep code concise and idiomatic without sacrificing clarity. Rerun tests after changes.
5. **Code review:** review the final diff against the requirements and project rules. Run relevant regression tests and quality checks. Fix remaining findings and recheck changed code before reporting completion.

For documentation-only changes, use relevant validation instead of behavior tests. If required checks cannot run, report the blocker and unverified work; do not claim success.
