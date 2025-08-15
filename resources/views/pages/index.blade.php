<x-app-layout>
    <x-slot:structured>
        <script type="application/ld+json" @cspNonce>
            {
              "@context": "https://schema.org",
              "@type": "Person",
              "@id": "https://scottzirkel.com",
              "name": "Scott Zirkel",
              "alternateName": "scottzirkel",
              "identifier": "scottzirkel",
              "gender": "male",
              "image": "https://cdn.scottzirkel.com/scottzirkel/misc/avatar.jpg",
              "url": "https://scottzirkel.com",
              "sameAs": [
                "https://t.me/scottzirkel",
                "https://www.facebook.com/writerandartistscottzirkel",
                "https://twitter.com/scottzirkel",
                "https://instagram.com/scottzirkel",
                "https://dribbble.com/scottzirkel",
                "https://github.com/scottzirkel",
                "https://scottzirkel.substack.com",
                "https://medium.com/@scottzirkel",
                "https://behance.net/scottzirkel",
                "https://scottzirkel.deviantart.com",
                "https://www.linkedin.com/in/scottzirkel"
              ]
            }
        </script>
    </x-slot:structured>
    <p>
        Hey gang,
        <mark class="inline-block px-1 bg-red-500 rotate-3 text-gray-50">
            <span class="inline-block -rotate-3">I'm Scott</span>
        </mark>
        and this is my site (obviously). I'm an artist, a programmer, a writer, a designer, a father of two, a husband of one, a Jeeper, an
        overlander, and probably a dozen other things I've forgotten.
    </p>
    <p>
        I've got a few drawings, some writing, and other things
        <mark class="inline-block px-1 bg-red-500 -rotate-1 text-gray-50">
            <span class="inline-block rotate-1">scattered throughout the site</span>
        </mark>
        and across various social media platforms. I do hope you find something you enjoy.
    </p>
    <p>
        Your pal,
        <br />
        <span class="text-2xl font-title ligatures">Scott</span>
    </p>
    @php($brace = app('brace'))
    {{-- <x-writing-status :title="$brace['title']" :status="$brace['status']" :parts="$brace['parts']" />
</x-app-layout>
