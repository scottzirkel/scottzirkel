@php
    $title ??= null;
    if ($title && isset($divider)) {
        $title .= ' — ';
    }
    if ($title && !isset($divider)) {
        $title .= ' ';
    }
    $title .= config('app.name');
$description ??= 'Artist, author, developer, designer. Making stuff up since 1977';
$ogImage ??= 'https://cdn.scottzirkel.com/scottzirkel/misc/sz-og.webp';
@endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="preconnect" href="https://cdn.scottzirkel.com" crossorigin />
    <link rel="preconnect" href="https://static.cloudflareinsights.com" crossorigin />
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin />
    <link
        href="https://fonts.bunny.net/css?family=family=pt-mono:400|pt-sans:400,400i,700,700i&display=swap"
        rel="stylesheet"
        media="all"
        data-swap-media="true"
        crossorigin
    />

    <meta name="description" content="{{ $description }}">
    <meta name="canonical" content="{{ request()->fullUrl() }}" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:logo" content="https://cdn.scottzirkel.com/scottzirkel/misc/avatar-logo.png" />
    <meta
        property="og:image"
        content="{{ $ogImage }}"
    />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="scottzirkel.com" />
    <meta property="twitter:url" content="{{ request()->fullUrl() }}" />
    <meta name="twitter:title" content="{{ $title }}" />
    <meta name="twitter:description" content="{{ $description }}" />
    <meta
        name="twitter:image"
        content="{{ $ogImage }}"
    />
    {{ $structured ?? null }}
    {{--    <link href="{{ Vite::asset('resources/fonts/Free-Lunch/FreeLunch-Regular.woff2') }}" rel="prefetch" as="font" type="font/woff2" />--}}
    {{--    <link href="{{ Vite::asset('resources/fonts/Wilco-Loft-Sans/WilcoLoftSans-Treble.woff2') }}" rel="prefetch" as="font" type="font/woff2" />--}}
    @vite('resources/css/app.css')
</head>

<body class="flex min-h-screen flex-col items-stretch justify-center bg-gray-900 font-sans leading-normal text-gray-900">
<x-header />
<main class="h-full flex-1 bg-gray-50">
    <div class="mx-auto lg:max-w-5xl">
        <article class="sp:px-6 space-y-8 px-4 py-10 text-xl text-gray-800 sm:py-12 lg:px-8 lg:py-16">
            {{ $slot }}
        </article>
        <div class="absolute inset-0 hidden size-48 opacity-100 md:block">
            <x-logo />
        </div>
    </div>
</main>
<x-footer />
@stack('scripts')
</body>
</html>
