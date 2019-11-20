<template>
  <Layout>
    <article>
    <header class="mb-12">
      <avatar class="my-12 mx-auto w-1/2 sm:hidden"></avatar>
      <logo class="mx-auto w-1/2 hidden sm:block"></logo>
    </header>
    <p class="mb-4">Hey gang, I'm Scott and this is my site (obviously). I'm an artist, a programmer, a writer, a designer, a father, a husband, a Jeeper, an overlander, and probably other things I've forgotten.</p>
    <p class="mb-4">I've got a few drawings, some writing, and other things scattered throughout the site and across various social media platforms. I do hope you find something you enjoy.</p>
    <p class="mb-4"><a class="text-red-500 hover:text-red-700 no-underline hover:underline" href="/uses">Here's a few</a> of the tools and equipment I use, if you're interested.</p>
    <p>Thanks, Scott</p>
    <template v-for="strip in $page.strips.edges">
      <g-link :to="strip.node.slug">{{ strip.node.title }}</g-link>
      {{ strip.node.date }}
    </template>
    </article>
  </Layout>
</template>

<page-query>
query  {
  strips: allStrips(limit:1, sortBy: "date", order: DESC) {
    edges {
      node {
        title
        article
        slug
        path
        date
      }
    }
  }
}
</page-query>

<script>
import Avatar from '../assets/svgs/Avatar.svg'
import Logo from '../assets/svgs/Logo.svg'
export default {
  components: {
    Avatar,
    Logo
  },
  metaInfo: {
    title: 'Scott Zirkel',
    description: 'The various works of Scott Zirkel, including, but not limited to, drawings, code, design, and writing.'
  },
  data () {
    return {
      loading: true
    }
  }
}
</script>
