@php
    $books = json_decode(file_get_contents(base_path('app-modules/book/resources/data/books.json')), true);

    $siteUrl = config('app.url');
    $pageUrl = $siteUrl . '/writing';
    $person = [
        "@context" => "https://schema.org",
        "@type" => "Person",
        "@id" => $siteUrl,
        "name" => "Scott Zirkel",
        "alternateName" => "scottzirkel",
        "identifier" => "scottzirkel",
        "gender" => "male",
        "image" => "https://cdn.scottzirkel.com/scottzirkel/misc/avatar.jpg",
        "url" => "https://scottzirkel.com",
        "sameAs" => [
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
    ];

    $website = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => "Scott Zirkel's Writing",
        'url' => $siteUrl . '/'
    ];

    $webpage = [
        '@context' => 'https://schema.org',
        '@type' => 'WebPage',
        'name' => 'Written by Scott Zirkel',
        'url' => $pageUrl,
        'mainEntity' => [
            '@type' => 'Person',
            'name' => 'Scott Zirkel',
            'url' => $siteUrl . '/'
        ]
    ];

    // Helper to map credits to schema.org roles
    function mapCreditsForBook($credits, $siteUrl) {
        $roles = [];
        foreach ($credits ?? [] as $credit) {
            $role = strtolower($credit['role']);
            $person = [
                '@type' => 'Person',
                'name' => $credit['name']
            ];
            if ($role === 'author') {
                $person['url'] = $siteUrl . '/';
            }
            $roles[$role] = $person;
        }
        return $roles;
    }

    $jsonLdBooks = [];
    foreach ($books as $book) {
        $roles = mapCreditsForBook($book['credits'] ?? [], $siteUrl);

        $jsonLdBook = [
            '@context' => 'https://schema.org',
            '@type' => 'Book',
            '@id' => $book['url'],
            'url' => $book['url'],
            'name' => $book['title'],
            'description' => $book['description'],
            'datePublished' => $book['published_at'],
            'publisher' => [
                '@type' => 'Organization',
                'name' => $book['publisher']
            ],
            'bookFormat' => ($book['type'] === 'graphic novel')
                ? 'https://schema.org/GraphicNovel'
                : 'https://schema.org/ComicStory',
            'isFamilyFriendly' => 'true',
            'image' => asset($book['image_url']) ?? null,
            'isPartOf' => [
                '@type' => 'CreativeWorkSeries',
                'name' => preg_replace('/[:].*/', '', $book['title'])
            ]
        ];

        // Add roles (author, illustrator, inker, colorist, etc.)
        foreach (['author', 'illustrator', 'inker', 'colorist'] as $role) {
            if (isset($roles[$role])) {
                $jsonLdBook[$role] = $roles[$role];
            }
        }

        // workExample
        if (!empty($book['work_examples'])) {
            $jsonLdBook['workExample'] = $book['work_examples'];
        }

        // Remove nulls (like image if not set)
        $jsonLdBook = array_filter($jsonLdBook, fn($v) => $v !== null);

        $jsonLdBooks[] = $jsonLdBook;
    }

    $dataFeed = [
        '@context' => 'https://schema.org',
        '@type' => 'DataFeed',
        'dataFeedElement' => $jsonLdBooks,
        'dateModified' => now()->toDateString()
    ];

    $jsonLd = [$person, $website, $webpage, $dataFeed];
@endphp
<x-app-layout>
    <x-slot:title>Written by</x-slot:title>
    <x-slot:description>All of my writing endeavours, from current projects to bibliography of published works.</x-slot:description>
    <x-slot:ogImage>https://cdn.scottzirkel.com/scottzirkel/misc/written-by-sz-og.webp</x-slot:ogImage>
    <x-slot:alternate>
        <link rel="alternate" type="application/json" href="https://scottzirkel.com/writing.json" title="Scott Zirkel's Writing Feed">
    </x-slot:alternate>
    <x-slot:structured>
        <script type="application/ld+json" @cspNonce>
            {!! json_encode($jsonLd, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) !!}
        </script>
    </x-slot:structured>
    <header class="space-y-4">
        <h1 class="text-4xl font-title" aria-label="Writing">Writing</h1>
        <p>Over the last few decades I've been privileged enough to have written several comic books.</p>
        <p>Recently I've been branching out into writing novels/novellas. I'm just getting started, but if you'd like to follow me on that journey, I have setup a newsletter on
            <a href="https://scottzirkel.substack.com" class="font-semibold text-red-600 underline decoration-red-500 decoration-4" data-link="substack" target="_blank" rel="nofollow">substack</a> and hope you'll follow along.
        </p>
        <p>I am currently working on an untitled sci-fi/adventure series.</p>
        <p>I'll keep some progress updated here as much as possible.</p>
        <p>I am currently on the first draft of book one, which I've broken into five parts.</p>
        @php
        $brace = app('brace');
        @endphp
        <x-writing-status :title="$brace['title']" :status="$brace['status']" :parts="$brace['parts']" />
    </header>

    @php
        $sections = [
            'Self-Published Comics' => array_filter($books, fn($b) => $b['group'] === 'self-published'),
            'Published Comics' => array_filter($books, fn($b) => $b['group'] === 'published'),
            'Anthology Comics' => array_filter($books, fn($b) => $b['group'] === 'anthology'),
        ];
    @endphp

    @foreach($sections as $sectionTitle => $sectionBooks)
        @if(count($sectionBooks))
        <section>
            <h2 class="mb-4 text-2xl text-gray-800 font-subtitle" aria-label="{{ $sectionTitle }}">{{ $sectionTitle }}</h2>
            <dl class="grid gap-4 sm:grid-cols-2">
                @foreach($sectionBooks as $book)
                    <x-book
                        :title="$book['title']"
                        :published="$book['published_at']"
                        :publisher="$book['publisher']"
                        :link="$book['url']"
                        :image="isset($book['image_url']) ? $book['image_url'] : null"
                        :is-free="isset($book['is_free']) ? ($book['is_free'] === '1') : false"
                    >
                        <p>{{ $book['description'] }}</p>
                    </x-book>
                @endforeach
            </dl>
        </section>
        @endif
    @endforeach
</x-app-layout>
