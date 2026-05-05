#!/usr/bin/env node
import { execSync } from 'node:child_process';
import { existsSync, readdirSync, readFileSync, statSync, writeFileSync } from 'node:fs';
import { join, relative } from 'node:path';

const ROOT = process.cwd();
const PAGES_DIR = join(ROOT, 'src', 'pages');
const OUTPUT = join(ROOT, 'src', 'data', 'page-lastmod.json');

if (process.env.CF_PAGES) {
  console.log('generate-lastmod: skipping on Cloudflare Pages — using committed JSON as-is');
  process.exit(0);
}

if (!existsSync(join(ROOT, '.git'))) {
  console.log('generate-lastmod: no .git directory — using committed JSON as-is');
  process.exit(0);
}

const existing = existsSync(OUTPUT)
  ? JSON.parse(readFileSync(OUTPUT, 'utf8'))
  : {};

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

function lastModified(absPath, route) {
  try {
    const out = execSync(`git log -1 --format=%cI -- "${absPath}"`, {
      encoding: 'utf8',
      stdio: ['ignore', 'pipe', 'ignore'],
    }).trim();
    if (out) return out;
  } catch {
    // git unavailable — fall through
  }
  // No git result — prefer the existing JSON entry over a stale mtime,
  // since mtime in fresh clones reflects clone time, not content change.
  if (existing[route]) return existing[route];
  return statSync(absPath).mtime.toISOString();
}

const entries = walk(PAGES_DIR)
  .map((file) => [pageToPath(file), lastModified(file, pageToPath(file))])
  .sort(([a], [b]) => a.localeCompare(b));

writeFileSync(OUTPUT, JSON.stringify(Object.fromEntries(entries), null, 2) + '\n');
console.log(`generate-lastmod: wrote ${entries.length} entries to ${relative(ROOT, OUTPUT)}`);
