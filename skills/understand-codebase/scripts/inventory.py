#!/usr/bin/env python3
"""Map a codebase before reading it. Standard library only.

  inventory.py <target> [--since "6 months"] [--top 12]

Prints the stack files, entry points, docs, saved results, tests, CI, git
hotspots, change coupling, removal commits and complex functions. The output
is a reading list: it says where to look, not what the code does.
"""

import argparse
import ast
import json
import re
import subprocess
import sys
from collections import Counter
from itertools import combinations
from pathlib import Path

SKIP_DIRS = {
    ".git", "node_modules", "vendor", ".venv", "venv", "dist", "build", "target",
    "__pycache__", ".mypy_cache", ".ruff_cache", ".pytest_cache", ".next",
    ".idea", ".vscode", "coverage", "htmlcov", ".tox", "Pods", "DerivedData",
}
SKIP_FILES = re.compile(
    r"(\.lock|lock\.json|\.min\.(js|css)|\.map|\.svg|\.png|\.jpe?g|\.gif|\.ico|"
    r"\.woff2?|\.ttf|\.pdf|\.sum)$|(^|/)(go\.sum|uv\.lock|poetry\.lock|Cargo\.lock)$"
)
CODE_EXT = {
    ".py": "Python", ".go": "Go", ".swift": "Swift", ".php": "PHP", ".ts": "TypeScript",
    ".tsx": "TypeScript", ".js": "JavaScript", ".jsx": "JavaScript", ".mjs": "JavaScript",
    ".vue": "Vue", ".svelte": "Svelte", ".rb": "Ruby", ".rs": "Rust", ".java": "Java",
    ".kt": "Kotlin", ".cs": "C#", ".c": "C", ".cpp": "C++", ".sh": "Shell", ".sql": "SQL",
    ".html": "HTML", ".css": "CSS", ".scss": "CSS",
}
MANIFESTS = {
    "pyproject.toml", "requirements.txt", "setup.py", "Pipfile", "package.json",
    "go.mod", "composer.json", "Package.swift", "Podfile", "Cargo.toml", "Gemfile",
    "pom.xml", "build.gradle", "build.gradle.kts", "Dockerfile", "compose.yaml",
    "compose.yml", "docker-compose.yml", "docker-compose.yaml", "Makefile",
    "justfile", ".pre-commit-config.yaml", "manage.py", "artisan",
}
ENTRY = [
    (re.compile(r"""if __name__ == ["']__main__["']"""), "script main"),
    (re.compile(r"^func main\(\)"), "Go main"),
    (re.compile(r"\b(FastAPI|Flask|Starlette)\("), "web app"),
    (re.compile(r"def (create_app|app_factory)\b"), "app factory"),
    (re.compile(r"@(app|router)\.(get|post|put|patch|delete)\("), "route"),
    (re.compile(r"\burlpatterns\s*="), "Django URLs"),
    (re.compile(r"Route::(get|post|put|patch|delete|resource)\("), "Laravel route"),
    (re.compile(r"@main\b"), "Swift main"),
    (re.compile(r"\b(express|Hono|Fastify)\(\)"), "web app"),
    (re.compile(r"^\s*(CMD|ENTRYPOINT)\b"), "container start"),
    (re.compile(r"^\s*command:"), "compose command"),
]
DOC_HINT = re.compile(
    r"(readme|agents|claude|context|glossary|decision|adr|architecture|design|"
    r"requirement|spec|plan|brief|progress|missing_tests|contributing|runbook)",
    re.I,
)
RESULT_HINT = re.compile(
    r"(summary\.json$|results?/.*\.(json|md)$|coverage\.(xml|json)$|"
    r"bench(mark)?s?/.*\.(json|txt|md)$|load.*\.json$)",
    re.I,
)
TEST_FILE = re.compile(
    r"(^|/)(tests?|spec|__tests__)/|(_test\.go|test_[^/]*\.py|_test\.py|"
    r"\.(test|spec)\.[jt]sx?|Tests?\.swift|Test\.php)$"
)
TEST_CASE = re.compile(
    r"^\s*(async\s+)?def test_|^func Test\w+\(|^\s*(it|test)\(|"
    r"^\s*func test\w+\(|^\s*public function test\w+\(|^\s*@Test\b",
    re.M,
)
REMOVAL = re.compile(r"\b(remove[sd]?|drop(s|ped)?|delete[sd]?|revert(s|ed)?|deprecate[sd]?)\b", re.I)


def git(target: Path, *args: str) -> str:
    """Run git in the target; empty output when git or the repo is missing."""
    try:
        done = subprocess.run(
            ["git", "-C", str(target), *args],
            capture_output=True, text=True, check=True,
        )
    except (OSError, subprocess.CalledProcessError):
        return ""
    return done.stdout


def list_files(target: Path) -> list[str]:
    """Tracked files in a repo, else every file outside the skipped folders."""
    tracked = git(target, "ls-files")
    if tracked:
        names = tracked.splitlines()
    else:
        names = [
            p.relative_to(target).as_posix()
            for p in target.rglob("*")
            if p.is_file() and not SKIP_DIRS.intersection(p.relative_to(target).parts)
        ]
    return sorted(
        n for n in names
        if not SKIP_DIRS.intersection(n.split("/")) and not SKIP_FILES.search(n)
    )


def read(path: Path) -> str:
    try:
        return path.read_text(errors="replace")
    except OSError:
        return ""


def section(title: str) -> None:
    print(f"\n== {title}")


def show_repo(target: Path) -> bool:
    section("repository")
    head = git(target, "rev-parse", "--short", "HEAD").strip()
    if not head:
        print("  not a git repository (history sections skipped)")
        return False
    branch = git(target, "rev-parse", "--abbrev-ref", "HEAD").strip()
    dates = git(target, "log", "--format=%ad", "--date=short").split()
    authors = {a for a in git(target, "log", "--format=%an").splitlines() if a}
    print(f"  {branch} @ {head} · {len(dates)} commits · {dates[-1]} to {dates[0]} · {len(authors)} author(s)")
    return True


def show_files(target: Path, files: list[str], top: int) -> dict[str, int]:
    section("files")
    lines: dict[str, int] = {}
    languages: Counter[str] = Counter()
    folders: Counter[str] = Counter()
    for name in files:
        folders["/".join(name.split("/")[:-1][:2]) or "."] += 1
        language = CODE_EXT.get(Path(name).suffix)
        if language:
            count = read(target / name).count("\n")
            lines[name] = count
            languages[language] += count
    print(f"  {len(files)} files")
    print("  lines by language: " + ", ".join(f"{k} {v}" for k, v in languages.most_common(8)))
    print("  files by folder:")
    for folder, count in folders.most_common(top):
        print(f"    {count:5}  {folder}")
    print("  largest code files:")
    for name, count in sorted(lines.items(), key=lambda kv: -kv[1])[:top]:
        print(f"    {count:5}  {name}")
    return lines


def show_stack(target: Path, files: list[str]) -> None:
    section("stack files (read these)")
    found = [f for f in files if Path(f).name in MANIFESTS or f.startswith(".github/workflows/")
             or Path(f).name in {".gitlab-ci.yml", ".env.example"}]
    for name in found:
        print(f"  {name}")
    if not any(f.startswith(".github/workflows/") or f.endswith(".gitlab-ci.yml") for f in files):
        print("  no CI workflow found")
    package = target / "package.json"
    if package.exists():
        try:
            data = json.loads(read(package))
        except json.JSONDecodeError:
            return
        for key in ("main", "bin"):
            if key in data:
                print(f"  package.json {key}: {data[key]}")
        for name, command in data.get("scripts", {}).items():
            print(f"  npm script {name}: {command}")


def show_entries(target: Path, files: list[str], code: dict[str, int], top: int) -> None:
    section("entry points (start traces here)")
    shown: Counter[str] = Counter()
    candidates = [f for f in files if f in code or Path(f).name in MANIFESTS]
    for name in candidates:
        if TEST_FILE.search(name):
            continue
        for number, line in enumerate(read(target / name).splitlines(), 1):
            for pattern, label in ENTRY:
                if pattern.search(line) and shown[label] < top:
                    shown[label] += 1
                    print(f"  {name}:{number}  {label}: {line.strip()[:90]}")
                    break


def show_docs(files: list[str]) -> None:
    section("docs and records (leads only: confirm every behavior in the code)")
    docs = [f for f in files if f.endswith((".md", ".rst", ".txt")) and DOC_HINT.search(f)
            and not TEST_FILE.search(f) and not RESULT_HINT.search(f)]
    for name in docs:
        print(f"  {name}")
    if not docs:
        print("  none")


def show_results(target: Path, files: list[str], top: int) -> None:
    section("saved results (measured numbers)")
    results = [f for f in files if RESULT_HINT.search(f)]
    for name in results[: top * 3]:
        date = git(target, "log", "-1", "--format=%ad", "--date=short", "--", name).strip()
        print(f"  {name}" + (f"  (committed {date})" if date else ""))
    if not results:
        print("  none: label every performance or quality number as not measured")


def show_tests(target: Path, files: list[str]) -> None:
    section("tests")
    tests = [f for f in files if TEST_FILE.search(f) and Path(f).suffix in CODE_EXT]
    cases = sum(len(TEST_CASE.findall(read(target / f))) for f in tests)
    print(f"  {len(tests)} test files, about {cases} test cases")


def show_history(target: Path, since: str, files: list[str], code: dict[str, int], top: int) -> None:
    current = set(files)
    log = git(target, "log", f"--since={since}", "--name-only", "--format=@@%an")
    commits: list[tuple[str, list[str]]] = []
    for block in log.split("@@")[1:]:
        author, *names = block.strip().splitlines()
        commits.append((author, [n for n in names if n in current]))
    changes: Counter[str] = Counter()
    owners: dict[str, set[str]] = {}
    pairs: Counter[tuple[str, str]] = Counter()
    for author, names in commits:
        changes.update(names)
        for name in names:
            owners.setdefault(name, set()).add(author)
        source = sorted(n for n in names if n in code)
        if 1 < len(source) <= 12:
            pairs.update(combinations(source, 2))

    section(f"hotspots (commits per file since {since})")
    for name, count in changes.most_common(top):
        print(f"  {count:4}  {name}")

    section("churn x size (likely pain: changes often and is large)")
    scored = sorted(((changes[n] * size, n) for n, size in code.items() if changes[n]), reverse=True)
    for score, name in scored[:top]:
        print(f"  {changes[name]:4} changes x {code[name]:5} lines  {name}")

    section("change coupling (files that change together across folders)")
    coupled = [(c, a, b) for (a, b), c in pairs.items()
               if c >= 3 and a.rsplit("/", 1)[0] != b.rsplit("/", 1)[0]]
    for count, a, b in sorted(coupled, reverse=True)[:top]:
        print(f"  {count:4}  {a}  <->  {b}")
    if not coupled:
        print("  none above 3 shared commits")

    section("ownership")
    authors = {a for a, _ in commits}
    if len(authors) <= 1:
        print("  one author in this period: every file has a single owner")
    else:
        solo = [n for n, _ in changes.most_common(top * 2) if len(owners[n]) == 1]
        for name in solo[:top]:
            print(f"  single owner: {name} ({next(iter(owners[name]))})")


def show_removals(target: Path, top: int) -> None:
    section("removal commits (a doc may still describe these features)")
    shown = 0
    for line in git(target, "log", "--format=%h %ad %s", "--date=short").splitlines():
        subject = line.split(" ", 2)[-1]
        if REMOVAL.search(subject):
            print(f"  {line}")
            shown += 1
            if shown == top * 2:
                break
    if not shown:
        print("  none")


def complexity(node: ast.AST) -> int:
    branches = (ast.If, ast.For, ast.While, ast.Try, ast.With, ast.BoolOp, ast.IfExp,
                ast.comprehension, ast.Match, ast.AsyncFor, ast.AsyncWith)
    return 1 + sum(isinstance(child, branches) for child in ast.walk(node))


def show_complex(target: Path, code: dict[str, int], top: int) -> None:
    section("complex functions (algorithm and risk candidates)")
    found: list[tuple[int, str]] = []
    for name in code:
        if TEST_FILE.search(name):
            continue
        text = read(target / name)
        if name.endswith(".py"):
            try:
                tree = ast.parse(text)
            except SyntaxError:
                continue
            for node in ast.walk(tree):
                if isinstance(node, (ast.FunctionDef, ast.AsyncFunctionDef)):
                    found.append((complexity(node), f"{name}:{node.lineno} {node.name}"))
        else:
            depth = max((len(l) - len(l.lstrip()) for l in text.splitlines() if l.strip()), default=0)
            if depth >= 20:
                found.append((depth // 4, f"{name} (indent depth {depth})"))
    for score, label in sorted(found, reverse=True)[:top]:
        print(f"  {score:4}  {label}")
    if not found:
        print("  none found")


def main() -> None:
    parser = argparse.ArgumentParser(description=__doc__.splitlines()[0])
    parser.add_argument("target", type=Path)
    parser.add_argument("--since", default="6 months")
    parser.add_argument("--top", type=int, default=12)
    args = parser.parse_args()
    target = args.target.resolve()
    if not target.is_dir():
        sys.exit(f"not a directory: {target}")

    is_repo = show_repo(target)
    files = list_files(target)
    code = show_files(target, files, args.top)
    show_stack(target, files)
    show_entries(target, files, code, args.top)
    show_docs(files)
    show_results(target, files, args.top)
    show_tests(target, files)
    if is_repo:
        show_history(target, args.since, files, code, args.top)
        show_removals(target, args.top)
    show_complex(target, code, args.top)


if __name__ == "__main__":
    main()
