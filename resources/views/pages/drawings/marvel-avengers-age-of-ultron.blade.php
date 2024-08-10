@inject('storage', 'Illuminate\Support\Facades\Storage')
<x-app-layout>
    <header>
        <h2 class="font-title text-4xl">Marvel Avengers: Age of Ultron</h2>
        <h3 class="mb-4 font-subtitle text-2xl text-gray-800">Upper Deck 2015</h3>
    </header>
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <img alt="Marvel Avengers: Age of Ultron sketchcard" loading="lazy" width="719" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-avengers-age-of-ultron/marvel-age-of-ultron-01-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Avengers: Age of Ultron sketchcard" loading="lazy" width="719" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-avengers-age-of-ultron/marvel-age-of-ultron-02-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Avengers: Age of Ultron sketchcard" loading="lazy" width="719" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-avengers-age-of-ultron/marvel-age-of-ultron-03-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Avengers: Age of Ultron sketchcard" loading="lazy" width="719" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-avengers-age-of-ultron/marvel-age-of-ultron-04-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Avengers: Age of Ultron sketchcard" loading="lazy" width="719" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-avengers-age-of-ultron/marvel-age-of-ultron-05-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Avengers: Age of Ultron sketchcard" loading="lazy" width="719" height="1000" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-avengers-age-of-ultron/marvel-age-of-ultron-06-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Avengers: Age of Ultron sketchcard" loading="lazy" width="1000" height="715" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-avengers-age-of-ultron/marvel-age-of-ultron-07-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Avengers: Age of Ultron sketchcard" loading="lazy" width="1000" height="715" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-avengers-age-of-ultron/marvel-age-of-ultron-08-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Marvel Avengers: Age of Ultron sketchcard" loading="lazy" width="1000" height="715" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/marvel-avengers-age-of-ultron/marvel-age-of-ultron-09-scott-zirkel.webp') }}" style="color: transparent;">
    </section>
</x-app-layout>
