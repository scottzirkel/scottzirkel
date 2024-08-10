@inject('storage', 'Illuminate\Support\Facades\Storage')
<x-app-layout>
    <header>
        <h2 class="font-title text-4xl">Marvel Legendary/3D</h2>
        <h3 class="mb-4 font-subtitle text-2xl text-gray-800">Upper Deck 2014/2015</h3>
    </header>
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-01-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-02-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-03-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-04-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-05-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-06-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-07-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-08-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-09-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-10-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-11-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="721" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-12-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Legendary/3D sketchcard" loading="lazy" width="1200" height="842" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-legendary-3d/marvel-legendary-13-scott-zirkel.webp') }}" style="color: transparent;">
    </section>
</x-app-layout>
