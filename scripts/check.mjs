import assert from "node:assert/strict";
import { readFileSync, readdirSync } from "node:fs";
import { parse } from "yaml";

const root = new URL("../", import.meta.url);
const read = (path) => readFileSync(new URL(path, root), "utf8");
const json = (path) => JSON.parse(read(path));
const pkg = json("package.json");
assert.equal(pkg.private, true, "The collection must remain private on npm");

const skills = readdirSync(new URL("skills/", root), { withFileTypes: true })
  .filter((entry) => entry.isDirectory());
assert.ok(skills.length, "At least one skill is required");
for (const { name } of skills) {
  const path = `skills/${name}/SKILL.md`;
  const content = read(path);
  const match = content.match(/^---\r?\n([\s\S]*?)\r?\n---\r?\n([\s\S]*)$/);
  assert.ok(match, `${path}: YAML frontmatter is required`);
  const metadata = parse(match[1]);
  assert.equal(metadata.name, name, `${path}: name must match its directory`);
  assert.match(name, /^[a-z0-9]+(?:-[a-z0-9]+)*$/);
  assert.ok(name.length <= 64, `${path}: name is too long`);
  assert.ok(typeof metadata.description === "string" && metadata.description.trim(), `${path}: description is required`);
  assert.ok(match[2].trim(), `${path}: instructions are required`);
  assert.ok(read("README.md").includes(`skills/${name}/SKILL.md`), `${path}: add the skill to README.md`);
}
console.log(`Validated ${skills.length} skill(s).`);
