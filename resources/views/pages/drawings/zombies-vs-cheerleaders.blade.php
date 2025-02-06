@inject('storage', 'Illuminate\Support\Facades\Storage')
<x-app-layout>
    <header>
        <h2 class="font-title text-4xl">Zombies vs Cheerleaders</h2>
        <h3 class="mb-4 font-subtitle text-2xl text-tone-800">5finity</h3>
    </header>
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <img alt="Zombies vs Cheerleaders sketchcard" loading="lazy" width="500" height="1051" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/zombies-vs-cheerleaders/zombies-vs-cheerleaders-01-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Zombies vs Cheerleaders sketchcard" loading="lazy" width="500" height="1039" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/zombies-vs-cheerleaders/zombies-vs-cheerleaders-02-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Zombies vs Cheerleaders sketchcard" loading="lazy" width="500" height="1036" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/zombies-vs-cheerleaders/zombies-vs-cheerleaders-03-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Zombies vs Cheerleaders sketchcard" loading="lazy" width="500" height="359" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/zombies-vs-cheerleaders/zombies-vs-cheerleaders-04-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Zombies vs Cheerleaders sketchcard" loading="lazy" width="900" height="414" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/zombies-vs-cheerleaders/zombies-vs-cheerleaders-05-scott-zirkel.webp') }}" style="color: transparent;">
    </section>
</x-app-layout>
