import type { APIRoute } from 'astro';
import books from '../data/books.json';

export const GET: APIRoute = () => {
  const lastUpdated = '2025-06-23T17:02:00Z';

  const data = {
    version: '1.0',
    lastUpdated,
    author: 'Scott Zirkel',
    works: books.map((book: any) => ({
      title: book.title,
      type: book.type.charAt(0).toUpperCase() + book.type.slice(1),
      datePublished: book.published_at,
      url: book.url,
      description: book.description,
      publisher: book.publisher,
      collaborators: (book.credits ?? [])
        .filter((credit: any) => credit.role.toLowerCase() !== 'author')
        .map((credit: any) => ({
          '@type': 'Person',
          name: credit.name,
          role: credit.role.charAt(0).toUpperCase() + credit.role.slice(1),
        })),
      lastModified: lastUpdated,
    })),
  };

  return new Response(JSON.stringify(data), {
    headers: {
      'Content-Type': 'application/json',
      'Cache-Control': 'public, max-age=3600',
    },
  });
};
