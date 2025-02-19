<x-app-layout>
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
