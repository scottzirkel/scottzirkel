// This is the main.js file. Import global CSS and scripts here.
// The Client API can be used here. Learn more: gridsome.org/docs/client-api
import DefaultLayout from '~/layouts/Default.vue'

export default function (Vue, { router, head, isClient }) {
  Vue.component('Layout', DefaultLayout)

  head.link.push({
    rel: 'stylesheet',
    href: 'https://use.typekit.net/rfw3ori.css'
  })

  head.meta.push({
    name: 'author',
    content: 'Scott Zirkel'
  })

  head.meta.push({
    name: 'twitter:card',
    content: 'summary'
  })

  head.meta.push({
    name: 'twitter:site',
    content: '@scottzirkel'
  })

  head.meta.push({
    name: 'twitter:title',
    content: 'The Art of Scott Zirkel'
  })

  head.meta.push({
    name: 'twitter:description',
    content: 'The various works of Scott Zirkel, including, but not limited to, drawings, code, design, and writing.'
  })

  head.meta.push({
    name: 'twitter:creator',
    content: '@scottzirkel'
  })
}
