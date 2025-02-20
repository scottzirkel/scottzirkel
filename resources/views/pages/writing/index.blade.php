<x-app-layout>
    <x-slot:title>Written by</x-slot:title>
    <x-slot:description>All of my writing endeavours, from current projects to bibliography of published works.</x-slot:description>
    <x-slot:structured>
        <script type="application/ld+json" nonce="{{ csp_nonce() }}">
            {
              "@context": "https://schema.org",
              "@type": "DataFeed",
              "dataFeedElement": [
                {
                    "@context": "https://schema.org",
                    "@type": "Book",
                    "@id": "https://guysoftheuniverse.com",
                    "url": "https://guysoftheuniverse.com",
                    "name": "Guys of the Universe",
                    "author": {
                        "@type": "Person",
                        "name": "Scott Zirkel"
                    },
                    "illustrator": {
                        "@type": "Person",
                        "name": "Scott Zirkel"
                    },
                    "contributor": {
                        "@type": "Person",
                        "name": "Tracy Bailey"
                    }
                },
                {
                    "@context": "https://schema.org",
                    "@type": "Book",
                    "@id": "https://abithaywire.com",
                    "url": "https://abithaywire.com",
                    "name": "A Bit Haywire",
                    "isFamilyFriendly": "true",
                    "author": {
                        "@type": "Person",
                        "name": "Scott Zirkel"
                    },
                    "illustrator": {
                        "@type": "Person",
                        "name": "Courtney Huddleston"
                    },
                     "publisher": {
                        "@type": "Organization",
                        "name": "Viper Comics"
                    },
                    "workExample": [
                    {
                        "@type": "Book",
                        "@id": "https://www.amazon.com/Bit-Haywire-Scott-Zirkel/dp/0977788350/ref=tmm_pap_swatch_0?_encoding=UTF8&dib_tag=se&dib=eyJ2IjoiMSJ9.uxrCWGbUkqG0QtmGWBnz7ErKey3RvQ8WyQbowQUwfAIR9PnBW5c4m4Ek9iR1hH_elfx5d_4YfH_kNzIcOsgD6W19F-eVbHVize3Uix4iGOQdMIxE_3RripnZFx8FmBetA30IYeB4FS5Y7vzTjKoHUg.mmINSkMi6DBVAVMJzpwCNsAIJSTdT6niOWpwtbUQ3SE&qid=1740088078&sr=8-1",
                        "isbn": "9780977788354",
                        "bookEdition": "Graphic Novel",
                        "bookFormat": "https://schema.org/GraphicNovel",
                        "inLanguage": "en",
                        "numberOfPages": "112"
                    },
                    {
                        "@type": "Book",
                        "@id": "https://www.amazon.com/Bit-Haywire-Scott-Zirkel/dp/1435216059/ref=tmm_hrd_swatch_0?_encoding=UTF8&dib_tag=se&dib=eyJ2IjoiMSJ9.uxrCWGbUkqG0QtmGWBnz7ErKey3RvQ8WyQbowQUwfAIR9PnBW5c4m4Ek9iR1hH_elfx5d_4YfH_kNzIcOsgD6W19F-eVbHVize3Uix4iGOQdMIxE_3RripnZFx8FmBetA30IYeB4FS5Y7vzTjKoHUg.mmINSkMi6DBVAVMJzpwCNsAIJSTdT6niOWpwtbUQ3SE&qid=1740088078&sr=8-1",
                        "isbn": "9781435216051",
                        "bookEdition": "Library Binding",
                        "bookFormat": "https://schema.org/Hardcover",
                        "inLanguage": "en",
                        "numberOfPages": "112"
                    }
                  ]
                },
                {
                    "@context": "https://schema.org",
                    "@type": "Book",
                    "@id": "https://wonderdoginc.com",
                    "url": "https://wonderdoginc.com",
                    "name": "Wonderdog, Inc",
                    "isFamilyFriendly": "true",
                    "author": {
                        "@type": "Person",
                        "name": "Scott Zirkel"
                    },
                    "illustrator": {
                        "@type": "Person",
                        "name": "Matt Hebb"
                    },
                    "contributor": {
                        "@type": "Person",
                        "name": "Tracy Bailey"
                    },
                     "publisher": {
                        "@type": "Organization",
                        "name": "Arcana Comics"
                    },
                    "workExample": [
                    {
                        "@type": "Book",
                        "@id": "https://www.amazon.com/Wonderdog-Inc-Scott-Zirkel/dp/1897548877/ref=tmm_pap_swatch_0?_encoding=UTF8&dib_tag=se&dib=eyJ2IjoiMSJ9.v8bDwMMM75DzMUWWGZMBbLjPjdwc_DM7ONrz17MUkjj1ld_HZIKXtLgxM56WK8dwYkUc6v3cRyntHXAsisqb054ikNIa0py7NEvijMa2kEdrsihI0RcmJ-_T5DRqcxAKPOH1Guty3dI08VJcQg7VOmdmc3ZSIy6dmV5unxRjCS4uBeSf16Qh9gVorb0Zmd2ZurYQ2KLya9SVg-6Y-Brx2rUSnvW6O_w8OaJKURHfd4I.cCyQ0WQxCQxE5oMAPb_m2a7bEJS-in1cOQotCz88fLI&qid=1740088618&sr=8-1",
                        "isbn": "9781897548875",
                        "bookEdition": "Graphic Novel",
                        "bookFormat": "https://schema.org/GraphicNovel",
                        "inLanguage": "en",
                        "pageCount": "124",
                        "datePublished": "2010-11-16"
                    },
                    {
                        "@type": "Book",
                        "@id": "https://www.amazon.com/Wonderdog-Inc-Scott-Zirkel-ebook/dp/B0897ZG2VM/ref=tmm_kin_swatch_0?_encoding=UTF8&dib_tag=se&dib=eyJ2IjoiMSJ9.v8bDwMMM75DzMUWWGZMBbLjPjdwc_DM7ONrz17MUkjj1ld_HZIKXtLgxM56WK8dwYkUc6v3cRyntHXAsisqb054ikNIa0py7NEvijMa2kEdrsihI0RcmJ-_T5DRqcxAKPOH1Guty3dI08VJcQg7VOmdmc3ZSIy6dmV5unxRjCS4uBeSf16Qh9gVorb0Zmd2ZurYQ2KLya9SVg-6Y-Brx2rUSnvW6O_w8OaJKURHfd4I.cCyQ0WQxCQxE5oMAPb_m2a7bEJS-in1cOQotCz88fLI&qid=1740088618&sr=8-1",
                        "bookEdition": "Kindle Edition",
                        "bookFormat": "https://schema.org/Ebook",
                        "inLanguage": "en",
                        "pageCount": "124",
                        "datePublished": "2010-11-10"
                    }
                  ]
                }
              ],
              "dateModified": "2025-02-20"
            }
        </script>
    </x-slot:structured>
    <header class="space-y-4">
        <h2 class="font-title text-4xl">Writing</h2>
        <p>Over the last few decades I've been privileged enough to have written several comic books.</p>
        <p>Recently I've been branching out into writing novels/novellas. I'm just getting started, but if you'd like to follow me on that journey, I have setup a newsletter on
            <a href="https://scottzirkel.substack.com" class="font-semibold text-red-600 underline decoration-red-500 decoration-4" data-link="substack" target="_blank" rel="nofollow">substack</a> and hope you'll follow along.
        </p>
        <p>I am currently working on an untitled sci-fi/adventure series.</p>
        <p>I'll keep some progress updated here as much as possible.</p>
        <p>I am currently on the first draft of book one, which I've broken into five parts.</p>
        @php($brace = app('brace'))
        <x-writing-status :title="$brace['title']" :status="$brace['status']" :parts="$brace['parts']" />
    </header>
    <section><h3 class="mb-4 font-subtitle text-2xl text-gray-800">Self-Published Comics</h3>
        <div class="grid sm:grid-cols-2 gap-4">
            <x-book
                title="Guys of the Universe"
                published="2010"
                publisher="Self-Published"
                link="https://guysoftheuniverse.com"
                image="books/he-guy.webp"
                :is-free="true"
            >
                <p>Join He-Guy and his friends Guy-At-Arms, She-La &amp; the rest of the Guys of the Universe as they defend Castle Guyskull from the evil forces of Skull-Guy!</p>
            </x-book>
            <x-book
                title="Lore Investigations"
                published="2009"
                publisher="Self-Published"
                link="https://loreinvestigations.com"
                image="books/lore-investigations.webp"
                :is-free="true"
            >
                <p>Lore Investigations follows the paranormal investigative team of Nathan and TJ. Their first case is The Creepy Barn, in which they go up against what is possibly a possessed teenage girl. Of course, it's hard to tell a regular teenage girl from one possessed by a ghost.</p>
            </x-book>
        </div>
    </section>
    <section>
        <h3 class="mb-4 font-subtitle text-2xl text-gray-800">Published Comics</h3>
        <div class="grid sm:grid-cols-2 gap-4">
            <x-book
                title="Wonderdog, Inc"
                published="2010"
                publisher="Arcana Comics"
                link="https://wonderdoginc.com"
                image="books/wonderdog-inc.webp"
                :is-free="false"
            >
                <p>Ryan Robertson's summer plans are put on hold when he discovers he'll be staying at his grandfather's farm while his parents travel to Europe. Just as he grows accustomed to life without Internet, he and his grandfather are traveling to Brazil in search of the Fountain of Youth. On the way he learns the truth about his family, friends and the secrets of Wonderdog, Inc.</p>
            </x-book>
            <x-book
                title="A Bit Haywire"
                published="2006"
                publisher="Viper Comics"
                link="https://abithaywire.com"
                image="books/a-bit-haywire.webp"
                :is-free="false"
            >
                <p>Owen Bryce is a normal good-natured 10 year-old boy who likes robots and thinks all girls have cooties. One day, however, Owen will soon find out just how abnormal he really is. He'll find out when everything goes a bit haywire.</p>
            </x-book>
        </div>
    </section>
    <section>
        <h3 class="mb-4 font-subtitle text-2xl text-gray-800">Anthology Comics</h3>
        <div class="grid sm:grid-cols-2 gap-4">
            <x-book
                title="Josh Howard Presents Sasquatch"
                published="2007"
                publisher="Viper Comics"
                link="https://www.amazon.com/Josh-Howard-Presents-Sasquatch/dp/0977788385"
                :is-free="false"
            >
                <p>Contributed a short story "The Sitter"</p>
            </x-book>
            <x-book
                title="Decoy:Menagerie Vol 1"
                published="2005"
                publisher="Penny Farthing Press"
                link="https://www.amazon.com/Decoy-Menagerie-Part-Courtney-Huddleston/dp/0971901236/ref=sr_1_1?crid=B4TL3M66YSQE&amp;keywords=decoy+menagerie&amp;qid=1674536863&amp;s=books&amp;sprefix=decoy+menageri%2Cstripbooks%2C237&amp;sr=1-1"
                :is-free="false"
            >
                <p>Contributed a short story "Big Top Decoy"</p>
            </x-book>
        </div>
    </section>
</x-app-layout>
