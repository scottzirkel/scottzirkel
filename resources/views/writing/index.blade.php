@extends('layouts.public', [
  'contentClass' => 'self-start py-8 w-2/5',
  'title' => 'Writing',
  'description' => 'My own bibliography of books, comics, and articles I\'ve written.'
])

@section('content')
<article class="leading-normal">
  <h1 class="uppercase font-title font-black text-center">Writing</h1>
  <h2 class="font-tagline font-bold uppercase mt-8 mb-2">Articles</h2>
  <p>I often throw a few words up on <a class="text-red hover:text-red-darker no-underline hover:underline" href="https://medium.com/@scottzirkel/">Medium</a> when the occasion presents itself.</p>
  <p><a href="https://medium.com/alara-creative/a-year-with-tailwind-92f420b2f8b9">A Year with Tailwind</a> - My continuing adventures with <a href="https://tailwindcss.com" target="_blank">TailwindCSS</a>, a utility-first CSS framework. Spoiler: I love it.</p>
  <p><a href="https://medium.com/@scottzirkel/authors-note-the-following-is-a-sample-chapter-from-the-book-i-am-currently-working-on-88e7ababb55c">Random Chapter</a> or, The One Where She Goes to the Bar</p>
  <p><a href="https://medium.com/@scottzirkel/the-fulfilment-of-the-jedi-order-d89a6a8fdbf1">The Fultilment of the Jedi Order</a> or, Yet Another Idiot Comparing Star Wars to the Bible</p>
  <h2 class="font-tagline font-bold uppercase mt-8 mb-2">Comic Books</h2>
  <ul class="list-reset">
    <li>
      <a class="text-red hover:text-red-darker no-underline hover:underline" href="https://gumroad.com/scottzirkel">He-Guy and the Guys of the Universe</a> - Self Published
    </li>
    <li>
      <a class="text-red hover:text-red-darker no-underline hover:underline" href="https://www.amazon.com/Wonderdog-Inc-Scott-Zirkel/dp/1897548877/">Wonderdog, Inc</a> published by <a class="text-red hover:text-red-darker no-underline hover:underline" href="http://arcanacomics.com">Arcana Comics</a>
    </li>
    <li>
      <a class="text-red hover:text-red-darker no-underline hover:underline" href="https://www.amazon.com/Bit-Haywire-Scott-Zirkel/dp/0977788350/">A Bit Haywire</a> published by <a class="text-red hover:text-red-darker no-underline hover:underline" href="http://vipercomics.com">Viper Comics</a>
    </li>
  </ul>
  <h2 class="font-tagline font-bold uppercase mt-8 mb-2">Other comic books for which I’ve written or contributed</h2>
  <ul class="list-reset">
    <li>
      <a class="text-red hover:text-red-darker no-underline hover:underline" href="http://loreinvestigations.com/">Lore Investigations</a> – One shot web comic
    </li>
    <li>
      <a class="text-red hover:text-red-darker no-underline hover:underline" href="https://www.amazon.com/Sasquatch-Josh-Howard-ebook/dp/B008Y65UXO">Josh Howard Presents Sasquatch</a> – contributed a short story “The Sitter” – <a class="text-red hover:text-red-darker no-underline hover:underline" href="http://vipercomics.com">Viper Comics</a>
    </li>
    <li>
      <a class="text-red hover:text-red-darker no-underline hover:underline" href="https://www.amazon.com/Decoy-Menagerie-Courtney-Huddleston/dp/0971901236/">Decoy: Menagerie Vol 1</a> – contributed a short story “Big Top Decoy” – <a class="text-red hover:text-red-darker no-underline hover:underline" href="http://pfpress.com/">Penny Farthing Press</a>
    </li>
  </ul>
</article>
@endsection
