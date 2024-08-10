@inject('storage', 'Illuminate\Support\Facades\Storage')
<x-app-layout>
    <header>
        <h2 class="font-title text-4xl">Warlord of Mars</h2>
        <h3 class="mb-4 font-subtitle text-2xl text-gray-800">Bregent/Dynamite 2012</h3>
    </header>
    <section class="grid grid-cols-1 gap-4">
        <img alt="Warlord of Mars sketchcard" loading="lazy" width="996" height="700" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/warlord-of-mars/warlord-of-mars-01-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Warlord of Mars sketchcard" loading="lazy" width="996" height="933" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/warlord-of-mars/warlord-of-mars-02-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Warlord of Mars sketchcard" loading="lazy" width="996" height="700" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/warlord-of-mars/warlord-of-mars-03-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Warlord of Mars sketchcard" loading="lazy" width="996" height="346" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/warlord-of-mars/warlord-of-mars-04-scott-zirkel.webp') }}" style="color: transparent;">
    </section>
</x-app-layout>
