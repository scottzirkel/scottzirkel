@inject('storage', 'Illuminate\Support\Facades\Storage')
<x-app-layout>
    <header>
        <h2 class="font-title text-4xl">Dean Yeagle's Mandy</h2>
        <h3 class="mb-4 font-subtitle text-2xl text-tone-800">5finity 2009</h3>
    </header>
    <section class="grid grid-cols-1 gap-4">
        <img alt="Dean Yeagle's Mandy sketchcard" loading="lazy" width="500" height="347" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/dean-yeagles-mandy/mandy-scott-zirkel.webp') }}" style="color: transparent;">
    </section>
</x-app-layout>
