<template>
  <Layout>
    <g-link to="/"> &larr; Go Back</g-link>
    <article>
      {{ $page.comic.title }}
    </article>
  </Layout>
</template>

<page-query>
query Comics($id: String!) {
  comic: comics(id: $id) {
    id
    title
  }
}
</page-query>

