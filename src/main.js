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
    name: 'description',
    content: 'The various works of Scott Zirkel, including, but not limited to, drawings, code, design, and writing.'
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

  head.meta.push({
    name: 'twitter:image',
    content: '/social/twitter-card.png'
  })

  head.meta.push({
    name: 'og:title',
    content: 'The Art of Scott Zirkel'
  })

  head.meta.push({
    name: 'og:description',
    content: 'The various works of Scott Zirkel, including, but not limited to, drawings, code, design, and writing.'
  })

  head.meta.push({
    name: 'og:type',
    content: 'website'
  })

  head.meta.push({
    name: 'og:image',
    content: 'https://scottzirkel.com/social/twitter-card.png'
  })

  head.meta.push({
    name: 'msapplication-TileColor',
    content: '#b64243'
  })

  head.meta.push({
    name: 'msapplication-config',
    content: 'https://scottzirkel.com/icons/browserconfig.xml'
  })

  head.meta.push({
    name: 'theme-color',
    content: '#fbfbfa'
  })

  head.link.push({
    rel: 'apple-touch-icon',
    sizes: '180x180',
    href: 'https://scottzirkel.com/icons/apple-touch-icon.png'
  })

  head.link.push({
    rel: 'icon',
    type: 'image/png',
    sizes: '32x32',
    href: 'https://scottzirkel.com/icons/favicon-32x32.png'
  })

  head.link.push({
    rel: 'icon',
    type: 'image/png',
    sizes: '16x16',
    href: 'https://scottzirkel.com/icons/favicon-16x16.png'
  })

  head.link.push({
    rel: 'manifest',
    href: 'https://scottzirkel.com/icons/site.webmanifest'
  })

  head.link.push({
    rel: 'mask-icon',
    href: 'https://scottzirkel.com/icons/safari-pinned-tab.svg',
    color: '#62615a'
  })

  head.link.push({
    rel: 'shortcut-icon',
    href: 'https://scottzirkel.com/icons/favicon.ico'
  })
}
