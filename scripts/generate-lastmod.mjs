#!/usr/bin/env node
import { execSync } from 'node:child_process';
import { readdirSync, statSync, writeFileSync } from 'node:fs';
import { join, relative } from 'node:path';

const ROOT = process.cwd();
const PAGES_DIR = join(ROOT, 'src', 'pages');
const OUTPUT = join(ROOT, 'src', 'data', 'page-lastmod.json');

function walk(dir) {
  const out = [];
  for (const entry of readdirSync(dir, { withFileTypes: true })) {
    const p = join(dir, entry.name);
    if (entry.isDirectory()) out.push(...walk(p));
    else if (entry.name.endsWith('.astro')) out.push(p);
  }
  return out;
}

function pageToPath(absPath) {
  let rel = relative(PAGES_DIR, absPath).replace(/\.astro$/, '').replaceAll('\\', '/');
  if (rel === 'index') return '/';
  if (rel.endsWith('/index')) rel = rel.slice(0, -'/index'.length);
  return '/' + rel;
}

function lastModified(absPath) {
  try {
    const out = execSync(`git log -1 --format=%cI -- "${absPath}"`, {
      encoding: 'utf8',
      stdio: ['ignore', 'pipe', 'ignore'],
    }).trim();
    if (out) return out;
  } catch {
    // git unavailable — fall through
  }
  return statSync(absPath).mtime.toISOString();
}

const entries = walk(PAGES_DIR)
  .map((file) => [pageToPath(file), lastModified(file)])
  .sort(([a], [b]) => a.localeCompare(b));

writeFileSync(OUTPUT, JSON.stringify(Object.fromEntries(entries), null, 2) + '\n');
console.log(`generate-lastmod: wrote ${entries.length} entries to ${relative(ROOT, OUTPUT)}`);
