import type { APIRoute } from 'astro';

const siteUrl = 'https://scottzirkel.com';

const pages = [
  '',
  'writing',
  'design',
  'code',
  'drawings',
  'drawings/totally-radical-80s',
  'drawings/firefly-the-verse',
  'drawings/marvel-ant-man',
  'drawings/marvel-avengers-age-of-ultron',
  'drawings/marvel-legendary-3d',
  'drawings/hack-slash',
  'drawings/pups',
  'drawings/warlord-of-mars',
  'drawings/empire-strikes-back-3d',
  'drawings/dead-at-17',
  'drawings/essence-of-fairyland',
  'drawings/zombies-vs-cheerleaders',
  'drawings/dean-yeagles-mandy',
  'drawings/star-wars-galaxy-iv',
  'drawings/indiana-jones-masterpieces',
  'uses',
  'been-there-done-that',
  'articles/a-week-with-tailwind',
  'articles/a-year-with-tailwind',
  'articles/life-with-tailwind',
];

export const GET: APIRoute = () => {
  const xml = `<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
${pages.map((page) => `    <url>
        <loc>${siteUrl}/${page}</loc>
    </url>`).join('\n')}
</urlset>`;

  return new Response(xml, {
    headers: {
      'Content-Type': 'application/xml',
    },
  });
};
