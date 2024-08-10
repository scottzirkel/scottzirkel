@inject('storage', 'Illuminate\Support\Facades\Storage')
<x-app-layout>
    <header>
        <h2 class="font-title text-4xl">Marvel Ant-Man</h2>
        <h3 class="mb-4 font-subtitle text-2xl text-gray-800">Upper Deck 2015</h3>
    </header>
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <img alt="Marvel Ant-Man sketchcard" loading="lazy" width="724" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-ant-man/marvel-ant-man-01-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Ant-Man sketchcard" loading="lazy" width="724" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-ant-man/marvel-ant-man-02-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Ant-Man sketchcard" loading="lazy" width="724" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-ant-man/marvel-ant-man-03-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Ant-Man sketchcard" loading="lazy" width="724" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-ant-man/marvel-ant-man-04-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Ant-Man sketchcard" loading="lazy" width="1318" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-ant-man/marvel-ant-man-05-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Ant-Man sketchcard" loading="lazy" width="990" height="715" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-ant-man/marvel-ant-man-06-scott-zirkel.webp') }}" style="color: transparent;">
    </section>
</x-app-layout>
