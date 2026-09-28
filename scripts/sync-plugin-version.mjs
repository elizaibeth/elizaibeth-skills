import { readFileSync, writeFileSync } from "node:fs";

const root = new URL("../", import.meta.url);
const { version } = JSON.parse(readFileSync(new URL("package.json", root), "utf8"));
const pluginPath = new URL(".claude-plugin/plugin.json", root);
const plugin = JSON.parse(readFileSync(pluginPath, "utf8"));

if (plugin.version !== version) {
  if (process.argv.includes("--check")) {
    console.error(`Plugin version ${plugin.version} differs from package version ${version}. Run node scripts/sync-plugin-version.mjs.`);
    process.exit(1);
  }
  plugin.version = version;
  writeFileSync(pluginPath, `${JSON.stringify(plugin, null, 2)}\n`);
}
console.log(`Plugin version: ${version}`);
