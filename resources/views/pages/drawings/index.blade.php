<x-app-layout>
    <header class="space-y-4">
        <h2 class="font-title text-4xl">Drawings</h2>
        <p>Here are some of my past drawing projects.</p>
        <p>I have an eye condition that prevents me from drawing as much as I used to, but I still tinker with the iPad. Zooming in helps.</p>
    </header>
    <section>
        <h3 class="mb-4 font-subtitle text-2xl text-gray-800">Sketchbook Collections</h3>
        <div class="grid sm:grid-cols-2 gap-4">
            <x-book
                title="Fairer"
                published="2011"
                publisher="Self-Published"
                link="https://gumroad.com/l/fairer"
                image="books/fairer-cover.webp"
                :is-free="false"
            >
                <p>22 pages of sketches of the fairer sex.</p>
            </x-book>
            <x-book
                title="2009 Sketchbook"
                published="2009"
                publisher="Self-Published"
                link="https://scottzirkel.gumroad.com/l/eqlX"
                image="books/2009-sketchbook-cover.webp"
                :is-free="true"
            >
                <p>A collection of sketches from 2008-2009</p>
            </x-book>
        </div>
    </section>
    <section><h3 class="mb-4 font-subtitle text-2xl text-gray-800">Sketchcard Projects</h3>
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
            <a href="/drawings/totally-radical-80s" class="col-span-1 block">
                <x-figure title="Totally Radical 80's" publisher="Artists Unite" />
            </a>
            <a href="/drawings/firefly-the-verse" class="col-span-1 block">
                <x-figure title="Firefly:The Verse" publisher="2015 Upper Deck" image="drawings/sketchcards/firefly-the-verse/preview.webp" />
            </a>
            <a href="/drawings/marvel-ant-man" class="col-span-1 block">
                <x-figure title="Marvel Ant-Man" publisher="2015 Upper Deck" image="drawings/sketchcards/marvel-ant-man/preview.webp" />
            </a>
            <a href="/drawings/marvel-avengers-age-of-ultron" class="col-span-1 block">
                <x-figure title="Marvel Avengers:Age of Ultron" publisher="2015 Upper Deck" image="drawings/sketchcards/marvel-avengers-age-of-ultron/preview.webp" />
            </a>
            <a href="/drawings/marvel-legendary-3d" class="col-span-1 block">
                <x-figure title="Marvel Legendary/3D" publisher="2014/2015 Upper Deck" image="drawings/sketchcards/marvel-legendary-3d/preview.webp" />
            </a>
            <a href="/drawings/hack-slash" class="col-span-1 block">
                <x-figure title="Hack/Slash" publisher="2012 5finity" image="drawings/sketchcards/hack-slash/preview.webp" />
            </a>
            <a href="/drawings/pups" class="col-span-1 block">
                <x-figure title="P'Ups" publisher="5finity" />
            </a>
            <a href="/drawings/warlord-of-mars" class="col-span-1 block">
                <x-figure title="Warlord of Mars" publisher="2012 Bregent/Dynamite" image="drawings/sketchcards/warlord-of-mars/preview.webp" />
            </a>
            <a href="/drawings/empire-strikes-back-3d" class="col-span-1 block">
                <x-figure title="Empire Strikes Back 3D" publisher="2010 Topps" image="drawings/sketchcards/empire-strikes-back-3d/preview.webp" />
            </a>
            <a href="/drawings/dead-at-17" class="col-span-1 block">
                <x-figure title="Dead@17" publisher="5finity" image="drawings/sketchcards/dead-at-17/preview.webp" />
            </a>
            <a href="/drawings/essence-of-fairyland" class="col-span-1 block">
                <x-figure title="Essence of Fairyland" publisher="sadlittles" image="drawings/sketchcards/essence-of-fairyland/preview.webp" />
            </a>
            <a href="/drawings/zombies-vs-cheerleaders" class="col-span-1 block">
                <x-figure title="Zombies vs Cheerleaders" publisher="5finity" image="drawings/sketchcards/zombies-vs-cheerleaders/preview.webp" />
            </a>
            <a href="/drawings/dean-yeagles-mandy" class="col-span-1 block">
                <x-figure title="Dean Yeagle's Mandy" publisher="2009 5finity" image="drawings/sketchcards/dean-yeagles-mandy/preview.webp" />
            </a>
            <a href="/drawings/star-wars-galaxy-iv" class="col-span-1 block">
                <x-figure title="Star Wars Galaxy IV" publisher="2008 Topps" image="drawings/sketchcards/star-wars-galaxy-iv/preview.webp" />
            </a>
            <a href="/drawings/indiana-jones-masterpieces" class="col-span-1 block">
                <x-figure title="Indiana Jones Masterpieces" publisher="2008 Topps" image="drawings/sketchcards/indiana-jones-masterpieces/preview.webp" />
            </a>
        </div>
    </section>
    <section>
        <h3 class="mb-4 font-subtitle text-2xl text-gray-800">Pinups</h3>
        <p>I have been fortunate enough over the years to be asked by my friends to provide pin-up art for their books.</p>
        <dl class="mt-4 space-y-2">
            <div>
                <dt class="font-semibold">Dead@17</dt>
                <dd class="text-lg text-gray-700">Image Comics</dd>
            </div>
            <div>
                <dt class="font-semibold">L'il Red Stitch</dt>
                <dd class="text-lg text-gray-700">Penny Farthing Press</dd>
            </div>
            <div>
                <dt class="font-semibold">Decoy</dt>
                <dd class="text-lg text-gray-700">Penny Farthing Press</dd>
            </div>
        </dl>
    </section>
</x-app-layout>
