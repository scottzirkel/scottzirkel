import type { APIRoute } from 'astro';
import { execSync } from 'node:child_process';
import { statSync } from 'node:fs';
import { join } from 'node:path';

const SITE_URL = 'https://scottzirkel.com';
const PAGES_DIR = join(process.cwd(), 'src', 'pages');

const pageModules = import.meta.glob('./**/*.astro', { eager: false });

function pageToPath(key: string): string {
    let route = key.replace(/^\.\//, '').replace(/\.astro$/, '');
    if (route === 'index') return '/';
    if (route.endsWith('/index')) route = route.slice(0, -'/index'.length);
    return '/' + route;
}

function lastModified(relPath: string): string {
    const file = join(PAGES_DIR, relPath);
    try {
        const out = execSync(`git log -1 --format=%cI -- "${file}"`, {
            encoding: 'utf8',
            stdio: ['ignore', 'pipe', 'ignore'],
        }).trim();
        if (out) return out;
    } catch {
        // git unavailable or file untracked — fall through
    }
    try {
        return statSync(file).mtime.toISOString();
    } catch {
        return new Date().toISOString();
    }
}

export const GET: APIRoute = () => {
    const urls = Object.keys(pageModules)
        .map((key) => {
            const rel = key.replace(/^\.\//, '');
            return {
                loc: SITE_URL + pageToPath(key),
                lastmod: lastModified(rel),
            };
        })
        .sort((a, b) => a.loc.localeCompare(b.loc));

    const xml = `<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
${urls.map((u) => `    <url>
        <loc>${u.loc}</loc>
        <lastmod>${u.lastmod}</lastmod>
    </url>`).join('\n')}
</urlset>
`;

    return new Response(xml, {
        headers: { 'Content-Type': 'application/xml' },
    });
};
