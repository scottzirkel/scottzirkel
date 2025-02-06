@inject('storage', 'Illuminate\Support\Facades\Storage')
<x-app-layout>
    <header>
        <h2 class="font-title text-4xl">The Essence of Fairyland</h2>
        <h3 class="mb-4 font-subtitle text-2xl text-tone-800">sadlittles</h3>
    </header>
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <img alt="The Essence of Fairyland sketchcard" loading="lazy" width="460" height="429" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/essence-of-fairyland/essence-of-fairyland-01-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="The Essence of Fairyland sketchcard" loading="lazy" width="460" height="429" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/essence-of-fairyland/essence-of-fairyland-02-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="The Essence of Fairyland sketchcard" loading="lazy" width="766" height="429" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/essence-of-fairyland/essence-of-fairyland-03-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="The Essence of Fairyland sketchcard" loading="lazy" width="460" height="429" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/essence-of-fairyland/essence-of-fairyland-04-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="The Essence of Fairyland sketchcard" loading="lazy" width="460" height="429" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/essence-of-fairyland/essence-of-fairyland-05-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="The Essence of Fairyland sketchcard" loading="lazy" width="460" height="429" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/essence-of-fairyland/essence-of-fairyland-06-scott-zirkel.webp') }}" style="color: transparent;">
    </section>
</x-app-layout>
