const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')
require('laravel-mix-purgecss')
require('laravel-mix-criticalcss')

mix.postCss('resources/assets/css/base.css', 'public/css/main.css', [
  tailwindcss('tailwind.js')
])
.criticalCss({
  enabled: mix.inProduction(),
  paths: {
      base: 'http://scottzirkel.test',
      templates: 'public/css/critical/'
  },
  urls: [
      {
          url: '/',
          template: 'home'
      }
  ]
})

if (mix.inProduction()) {
  mix
  .purgeCss({
      enabled: true,
      globs: [
          path.join(__dirname, 'layouts/*.html'),
          path.join(__dirname, 'templates/**/*.html'),
          path.join(__dirname, 'partials/**/*.html'),
          path.join(__dirname, 'js/**.js'),
          path.join(__dirname, 'img/**.svg'),
      ],
      extensions: ['html', 'js', 'php', 'vue', 'svg'],
  })
  .sourceMaps()
}
