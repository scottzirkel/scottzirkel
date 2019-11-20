<template>
  <Layout>
    <!-- <g-link to="/"> &larr; Go Back</g-link> -->
    <article>
      <header class="text-center mb-4">
        <h1 class="uppercase font-title font-black text-center text-4xl leading-tight">{{ $page.post.title }}</h1>
        <p class="post-date"> {{ $page.post.date}} | {{$page.post.timeToRead}} min read </p>
      </header>
      <div v-html="$page.post.content"></div>
    </article>
  </Layout>
</template>

<page-query>
query Post ($path: String) {
  post: post (path: $path) {
    title
    author
    date (format: "D MMMM YYYY")
    timeToRead
    content
  }
}
</page-query>

<style>
article p {
  @apply mb-2;
}

article img {
  @apply max-w-full mx-auto my-4 block
}

article a {
  @apply text-red-500 no-underline
}

article a:hover {
  @apply text-red-700 underline
}

article h2 {
  @apply font-tagline font-semibold
}

article blockquote {
  @apply border-l-4 border-gray-500 pl-4 py-1 bg-gray-200 italic mb-2
}

article blockquote p {
  @apply mb-0
}
</style>

