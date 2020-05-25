<template>
  <Layout>
    <article>
      <h1 class="text-4xl font-black leading-tight text-center uppercase font-title">Writing</h1>
      <h2 class="mt-4 mb-2 text-2xl font-bold uppercase font-tagline">Articles</h2>
      <p>
        I often throw a few words up on
        <a
          class="text-red-500 no-underline hover:text-red-700 hover:underline"
          href="https://medium.com/@scottzirkel/"
        >Medium</a> when the occasion presents itself. Here's a few I like.
      </p>
      <ul class="py-2 list-reset">
        <li class="pb-2">
          <a
            class="block font-semibold text-red-500 no-underline hover:text-red-700 hover:underline"
            href="https://medium.com/alara-creative/a-year-with-tailwind-92f420b2f8b9"
          >A Year with Tailwind</a> My continuing adventures with
          <a
            class="text-red-500 no-underline hover:text-red-700 hover:underline"
            href="https://tailwindcss.com"
            target="_blank"
          >Tailwind CSS</a>, a utility-first CSS framework. Spoiler: I love it.
        </li>
        <li class="pb-2">
          <a
            class="block font-semibold text-red-500 no-underline hover:text-red-700 hover:underline"
            href="https://medium.com/@scottzirkel/authors-note-the-following-is-a-sample-chapter-from-the-book-i-am-currently-working-on-88e7ababb55c"
          >Random Chapter</a> or,
          <em>The One Where She Goes to the Bar</em>
        </li>
        <li class="pb-2">
          <a
            class="block font-semibold text-red-500 no-underline hover:text-red-700 hover:underline"
            href="https://medium.com/@scottzirkel/the-fulfilment-of-the-jedi-order-d89a6a8fdbf1"
          >The Fultilment of the Jedi Order</a> or,
          <em>Yet Another Idiot Comparing Star Wars to the Bible</em>
        </li>
      </ul>
      <h2 class="mt-8 mb-2 text-2xl font-bold uppercase font-tagline">Comic Books</h2>
      <ul class="flex items-center justify-center text-center list-reset">
        <li class="pb-2 mx-6">
          <a
            class="block font-semibold text-red-500 no-underline hover:text-red-700 hover:underline"
            href="https://gumroad.com/scottzirkel"
          >
            <g-image
              src="~/assets/images/logo-he-guy.png"
              width="300"
              alt="He-Guy and the Guys of the Universe"
            />
          </a>Self Published
        </li>
        <li class="pb-2 mx-6">
          <a
            class="block font-semibold text-red-500 no-underline hover:text-red-700 hover:underline"
            href="https://www.amazon.com/Wonderdog-Inc-Scott-Zirkel/dp/1897548877/"
          >
            <g-image src="~/assets/images/logo-wonderdog-inc.png" width="300" alt="Wonderdog Inc" />
          </a> published by
          <a
            class="no-underline text-red hover:text-red-darker hover:underline"
            href="http://arcanacomics.com"
          >Arcana Comics</a>
        </li>
        <li class="pb-2 mx-6">
          <a
            class="block font-semibold text-red-500 no-underline hover:text-red-700 hover:underline"
            href="https://www.amazon.com/Bit-Haywire-Scott-Zirkel/dp/0977788350/"
          >
            <g-image src="~/assets/images/logo-a-bit-haywire.png" width="300" alt="A Bit Haywire" />
          </a> published by
          <a
            class="no-underline text-red hover:text-red-darker hover:underline"
            href="http://vipercomics.com"
          >Viper Comics</a>
        </li>
      </ul>
      <h2
        class="mt-8 mb-2 text-2xl font-bold uppercase font-tagline"
      >Other comic books for which I’ve written or contributed</h2>
      <ul class="list-reset">
        <li class="pb-2">
          <a
            class="block font-semibold text-red-500 no-underline hover:text-red-700 hover:underline"
            href="http://loreinvestigations.com/"
          >Lore Investigations</a>One shot web comic
        </li>
        <li class="pb-2">
          <a
            class="block font-semibold text-red-500 no-underline hover:text-red-700 hover:underline"
            href="https://www.amazon.com/Sasquatch-Josh-Howard-ebook/dp/B008Y65UXO"
          >Josh Howard Presents Sasquatch</a> contributed a short story “The Sitter”
          <a
            class="text-red-500 no-underline hover:text-red-700 hover:underline"
            href="http://vipercomics.com"
          >Viper Comics</a>
        </li>
        <li class="pb-2">
          <a
            class="block font-semibold text-red-500 no-underline hover:text-red-700 hover:underline"
            href="https://www.amazon.com/Decoy-Menagerie-Courtney-Huddleston/dp/0971901236/"
          >Decoy: Menagerie Vol 1</a> contributed a short story “Big Top Decoy”
          <a
            class="text-red-500 no-underline hover:text-red-700 hover:underline"
            href="http://pfpress.com/"
          >Penny Farthing Press</a>
        </li>
      </ul>
    </article>
  </Layout>
</template>

<script>
export default {
  metaInfo: {
    title: "Writing",
    meta: [
      {
        key: "description",
        name: "description",
        content: "Words I've written, arranged in alphabetical order."
      },
      {
        key: "twitter:title",
        name: "twitter:title",
        content: "Writing - Scott Zirkel"
      },
      {
        key: "twitter:description",
        name: "twitter:description",
        content: "Words I've written, arranged in alphabetical order."
      }
    ]
  }
};
</script>
