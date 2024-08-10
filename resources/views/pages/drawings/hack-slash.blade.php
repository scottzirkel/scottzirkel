@inject('storage', 'Illuminate\Support\Facades\Storage')
<x-app-layout>
    <header>
        <h2 class="font-title text-4xl">Hack/Slash</h2>
        <h3 class="mb-4 font-subtitle text-2xl text-gray-800">5finity 2012</h3>
    </header>
    <div class="grid grid-cols-1 gap-4">
        <img alt="Hack/Slash sketchcard" loading="lazy" width="897" height="250" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/hack-slash/hack-slash-01-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Hack/Slash sketchcard" loading="lazy" width="897" height="250" decoding="async" data-nimg="1" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/hack-slash/hack-slash-02-scott-zirkel.webp') }}" style="color: transparent;">
    </div>
</x-app-layout>
