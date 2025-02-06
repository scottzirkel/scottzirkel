@inject('storage', 'Illuminate\Support\Facades\Storage')
<x-app-layout>
    <header>
        <h2 class="font-title text-4xl">Dead@17</h2>
        <h3 class="mb-4 font-subtitle text-2xl text-tone-800">5finity </h3>
    </header>
    <section class="grid grid-cols-1 gap-4">
        <img alt="Dead@17 sketchcard" loading="lazy" width="693" height="240" decoding="async" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/dead-at-17/dead-at-17-01-scott-zirkel.webp') }}" style="color: transparent;">
        <img alt="Dead@17 sketchcard" loading="lazy" width="693" height="240" decoding="async" class="col-span-1 max-w-full" src="{{ $storage::url('drawings/sketchcards/dead-at-17/dead-at-17-02-scott-zirkel.webp') }}" style="color: transparent;">
    </section>
</x-app-layout>
