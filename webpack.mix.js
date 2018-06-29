const { mix } = require('laravel-mix')
const precss = require('precss')
const tailwindcss = require('tailwindcss')
const atImport = require('postcss-import')
require('laravel-mix-purgecss')

mix.postCss('resources/assets/css/main.css', 'public/css', [
  atImport(),
  precss(),
  tailwindcss('./tailwind.js')
])

// mix.copy('resources/assets/images', 'public/images', false)

if (mix.inProduction()) {
  mix.purgeCss()
}

// mix.js('resources/assets/js/admin/admin.js', 'public/js')

// mix.js('resources/assets/js/app.js', 'public/js')
// .extract(['vue', 'axios', 'vue2-leaflet'])
