import { defineConfig } from 'astro/config';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
  site: 'https://scottzirkel.com',
  vite: {
    plugins: [tailwindcss()],
  },
  build: {
    format: 'file',
  },
});
