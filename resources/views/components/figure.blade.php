@inject('storage', 'Illuminate\Support\Facades\Storage')
<figure class="col-span-1 flex cursor-pointer flex-col items-center justify-between overflow-hidden rounded-lg bg-white shadow hover:shadow-md">
    @isset($image)
        <img src="{{ $storage::url($image) }}" alt="{{ $title }}" class="aspect-[8/11] object-cover" decoding="async" loading="lazy" width="895" height="250" style="color:transparent;" />
    @else
        <div class="flex aspect-[8/11] w-full flex-col items-center justify-center bg-gray-600 text-6xl font-bold">?</div>
    @endisset
    <figcaption class="p-2 text-center">
        @isset ($caption)
            <p class="text-sm">{{ $caption }}</p>
        @endisset
        @isset($title)
            <p class="text-lg font-bold">{{ $title }}</p>
        @endisset
        @isset($publisher)
            <p class="text-base">{{ $publisher }}</p>
        @endisset
    </figcaption>
</figure>
