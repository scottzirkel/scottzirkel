<template>
  <Layout>
    <article class="container self-start py-8">
      <h1 class="uppercase font-title font-black text-center text-4xl">Drawings</h1>
      <h2 class="text-center font-tagline font-bold uppercase mt-8 mb-2">Latest Drawings</h2>
      <div class="w-2/3 mx-auto lg:flex items-center justify-between">
      <div class="lg:w-1/3 h-56">
        <g-image src="~/assets/images/dark.jpg" alt="Drawing of Ulrich from Netflix' Dark" class="h-full w-full object-cover" />
      </div>
      <div class="lg:w-1/3 h-56">
        <g-image src="~/assets/images/owl.jpg" alt="Drawing of an owl with attitude" class="h-full w-full object-cover" />
      </div>
      <div class="lg:w-1/3 h-56">
        <g-image src="~/assets/images/star-wars.jpg" alt="Drawing of Muftak from Star Wars" class="h-full w-full object-cover" />
      </div>
      </div>
      <p class="mt-4 text-center">For more drawings, please checkout my <a href="https://instagram.com/scottzirkel">Instagram</a>.</p>
      <div class="md:w-1/3 mx-auto">
        <h2 class="font-tagline font-bold uppercase mt-4 mb-2 text-2xl">Sketchbook Collections</h2>
        <ul class="list-reset">
          <li>
            <a class="text-red-500 hover:text-red-700 no-underline hover:underline" href="https://gumroad.com/l/oPdV">Fairer</a>
          </li>
          <li>
            <a class="text-red-500 hover:text-red-700 no-underline hover:underline" href="https://gumroad.com/l/eqlX">2009 Sketchbook</a>
          </li>
        </ul>
        <h2 class="font-tagline font-bold uppercase mt-4 mb-2 text-2xl">Projects I’ve worked on</h2>
        <ul class="list-reset">
          <li>Firefly: The Verse - Sketch Cards - Upper Deck</li>
          <li>Marvel Ant-Man - Sketch Cards - Upper Deck</li>
          <li>Marvel Avengers: Age of Ultron - Sketch Cards - Upper Deck</li>
          <li>Marvel Legendary/3D - Sketch Cards - Upper Deck</li>
          <li>Hack/Slash – Sketch Cards – 5finity</li>
          <li>P’Ups – Sketch Cards – 5finity</li>
          <li>Empire Strikes Back 3D – Sketch Cards – Topps</li>
          <li>Dead@17 – Pin Up – Image</li>
          <li>Dead@17 – Sketch Cards – 5finity</li>
          <li>The Essence of Fairyland – Sketch Cards – sadlittles.com</li>
          <li>Zombies vs Cheerleaders – Sketch Cards – 5finity</li>
          <li>Dean Yeagle’s Mandy – Sketch Cards – 5finity</li>
          <li>Star Wars Galaxy IV – Sketch Cards – Topps</li>
          <li>Indiana Jones Masterpieces – Sketch Cards – Topps</li>
          <li>Li’l Red Stitch – Pin Up – Summertime Books</li>
          <li>Decoy: Storm of the Century – Pin Up – Penny Farthing Press</li>
        </ul>
      </div>
    </article>
  </Layout>
</template>

<script>
export default {
  metaInfo: {
    title: 'Drawings',
    meta: [
      {
        key: 'description',
        name: 'description',
        content: 'Drawings, scribbles, and doodles. Now with 22% less sugar!'
      },
      {
        key: 'twitter:title',
        name: 'twitter:title',
        content: 'Drawings - Scott Zirkel'
      },
      {
        key: 'twitter:description',
        name: 'twitter:description',
        content: 'Drawings, scribbles, and doodles. Now with 22% less sugar!'
      }
    ]
  }
}
</script>
