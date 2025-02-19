<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link rel="preconnect" href="https://cdn.scottzirkel.com" crossorigin />
    {{--    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>--}}
    {{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    {{--    <link--}}
    {{--        href="https://fonts.googleapis.com/css2?family=PT+Mono&family=PT+Sans+Caption:wght@400;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Press+Start+2P&display=swap"--}}
    {{--        rel="stylesheet"--}}
    {{--        media="print"--}}
    {{--        onload="this.onload=null;this.removeAttribute('media');"--}}
    {{--    />--}}
    {{--    <noscript>--}}
    {{--        <link--}}
    {{--            href="https://fonts.googleapis.com/css2?family=PT+Mono&family=PT+Sans+Caption:wght@400;700&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Press+Start+2P&display=swap"--}}
    {{--            rel="stylesheet"--}}
    {{--        >--}}
    {{--    </noscript>--}}
    <link rel="dns-prefetch" href="https://fonts.bunny.net" />
    <link
        rel="preload"
        href="https://fonts.bunny.net/css?family=family=press-start-2p:400|pt-mono:400|pt-sans:400,400i,700,700i|pt-sans-caption:400,700"
        as="style"
    />
    <link
        href="https://fonts.bunny.net/css?family=family=press-start-2p:400|pt-mono:400|pt-sans:400,400i,700,700i|pt-sans-caption:400,700"
        rel="stylesheet"
        media="print"
        onload="this.onload=null;this.media='all';"
        crossorigin
    />
    <meta name="description" content="Artist, author, developer, designer. Making stuff up since 1977">
    <meta name="canonical" content="{{ request()->fullUrl() }}" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <meta property="og:url" content="{{ request()->fullUrl() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Scott Zirkel" />
    <meta property="og:description" content="Artist, author, developer, designer. Making stuff up since 1977" />
    <meta
        property="og:image"
        content="https://imagedelivery.net/ss7-gAVfWWJP_LdCZpUXVQ/2c84e5f7-9561-4a3e-84a0-f5b2140c5f00/og"
    />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="scottzirkel.com" />
    <meta property="twitter:url" content="{{ request()->fullUrl() }}" />
    <meta name="twitter:title" content="Scott Zirkel" />
    <meta name="twitter:description" content="Artist, author, developer, designer. Making stuff up since 1977" />
    <meta
        name="twitter:image"
        content="https://imagedelivery.net/ss7-gAVfWWJP_LdCZpUXVQ/2c84e5f7-9561-4a3e-84a0-f5b2140c5f00/og"
    />
    {{--    @dd(Vite::asset('resources/css/app.css'))--}}
    <link href="{{ Vite::asset('resources/fonts/Free-Lunch/FreeLunch-Regular.woff2') }}" rel="prefetch" as="font" type="font/woff2" />
    <link href="{{ Vite::asset('resources/fonts/Wilco-Loft-Sans/WilcoLoftSans-Treble.woff2') }}" rel="prefetch" as="font" type="font/woff2" />
    @vite('resources/css/app.css')
</head>

<body class="flex min-h-screen flex-col items-stretch justify-center border-t-8 border-red-500 bg-gray-900 font-sans leading-normal text-gray-900">
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
