@php
    $images = [
        asset('drawings/sketchcards/dead-at-17/dead-at-17-01-scott-zirkel.webp'),
        asset('drawings/sketchcards/dead-at-17/dead-at-17-02-scott-zirkel.webp')
    ];

$structuredData = collect();
foreach ($images as $image) {
    $structuredData->add([
        '@context' => 'https://schema.org/',
        '@type' => 'ImageObject',
        'contentUrl' => $image,
        'creditText' => 'Art by Scott Zirkel. Dead@17 created by Josh Howard.',
        'creator' => [
            '@type' => 'Person',
            'name' => 'Scott Zirkel',
            'sameAs' => 'https://scottzirkel.com/'
        ],
        'copyrightNotice' => 'Scott Zirkel'
    ]);
    }
@endphp

<x-app-layout>
    <x-slot:title>Dead@17 Sketchcards by</x-slot:title>
    <x-slot:structured>
        <script type="application/ld+json">
            @json($structuredData->toArray())
        </script>
    </x-slot:structured>
    <header>
        <h2 class="font-title text-4xl">Dead@17</h2>
        <h3 class="mb-4 font-subtitle text-2xl text-gray-800">5finity</h3>
    </header>
    <section class="grid grid-cols-1 gap-4">
        @foreach ($images as $image)
            <img alt="Dead@17 sketchcard {{ $loop->iteration }}" loading="lazy" width="693" height="240" decoding="async" class="col-span-1 max-w-full" src="{{ $image }}" />
        @endforeach
    </section>
</x-app-layout>
