import type { APIRoute } from 'astro';
import lastmodData from '../data/page-lastmod.json';

const SITE_URL = 'https://scottzirkel.com';
const pageModules = import.meta.glob('./**/*.astro', { eager: false });
const lastmodMap = lastmodData as Record<string, string>;

function pageToPath(key: string): string {
    let route = key.replace(/^\.\//, '').replace(/\.astro$/, '');
    if (route === 'index') return '/';
    if (route.endsWith('/index')) route = route.slice(0, -'/index'.length);
    return '/' + route;
}

export const GET: APIRoute = () => {
    const urls = Object.keys(pageModules)
        .map((key) => {
            const path = pageToPath(key);
            return {
                loc: SITE_URL + path,
                lastmod: lastmodMap[path] ?? new Date().toISOString(),
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
