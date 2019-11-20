// Server API makes it possible to hook into various parts of Gridsome
// on server-side and add custom data to the GraphQL data layer.
// Learn more: https://gridsome.org/docs/server-api

// Changes here require a server restart.
// To restart press CTRL + C in terminal and run `gridsome develop`

const axios = require('axios')

module.exports = function (api) {
  api.loadSource(async store => {
    const { data } = await axios.get('http://webstrips.test/api/strips/1')

    const contentType = store.addContentType({
      typeName: 'Strips'
    })

    for (const item of data) {
      contentType.addNode({
        id: item.id,
        title: item.title,
        slug: item.slug,
        date: item.published_at,
        article: item.article,
        path: `/${item.published_at}`
      })
    }
  })

  api.createPages(({ createPage }) => {
    // Use the Pages API here: https://gridsome.org/docs/pages-api
  })
}
