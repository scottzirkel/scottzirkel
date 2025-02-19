@inject('storage', 'Illuminate\Support\Facades\Storage')
@php
    $lazy ??= true;
@endphp
<div class="col-span-1 rounded-lg bg-white p-4 shadow">
    @isset($image)
        <div class="mx-auto py-6 text-center sm:w-1/2">
            <img alt="{{ $title }}" src="{{ $storage::url($image) }}" loading="{{ $lazy ? 'lazy' : 'eager' }}" width="503" height="110" decoding="async" style="color: transparent;">
        </div>
    @endisset
    <p class="space-x-1 text-sm text-gray-800">
        <time datetime="{{ $published }}">{{ $published }}</time>
        <span>{{ $publisher }}</span>
    </p>
    <p class="text-lg font-bold text-gray-900">{{ $title }}</p>
    <div class="text-left">{{ $slot }}</div>
    <p>
        <a href="{{ $link }}" target="_blank" rel="noreferrer" class="text-base font-bold text-red-500 hover:underline">
            @if ($isFree)
                Read for Free
            @else
                Buy Online
            @endif
        </a>
    </p>
</div>
