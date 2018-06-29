<!DOCTYPE html>
<html>
  <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144747-1"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-144747-1');
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ isset($title) ? "$title – Scott Zirkel" : "Scott Zirkel" }}</title>
    <meta name="author" content="Scott Zirkel">
    <meta name="description" content="{{ $description ?? 'The various works of Scott Zirkel, including, but not limited to, drawings, code, design, and writing.' }}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@scottzirkel">
    <meta name="twitter:title" content="The Art of Scott Zirkel">
    <meta name="twitter:description" content="The various works of Scott Zirkel, including, but not limited to, drawings, code, design, and writing.">
    <meta name="twitter:creator" content="@scottzirkel">

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/icon/favicon-16x16.png">
    <link rel="manifest" href="/images/icon/manifest.json">
    <link rel="mask-icon" href="/images/icon/safari-pinned-tab.svg" color="#b64243">
    <meta name="apple-mobile-web-app-title" content="Scott Zirkel">
    <meta name="application-name" content="Scott Zirkel">
    <meta name="theme-color" content="#ffffff">

    @yield('before-styles')
    <link rel="stylesheet" href="/css/main.css">
    @yield('after-styles')

  </head>
  <body class="font-sans border-t-8 border-b-8 border-red flex items-stretch flex-col min-h-screen bg-grey-light">
    <header class="bg-grey md:flex space-between px-6 leading-loose text-center md:text-left">
      <div class="flex-1 py-6 md:py-2 mx-auto md:mx-0">
        <a class="block sm:inline text-2xl sm:text-sm text-grey-darkest hover:text-red no-underline font-title uppercase tracking-wide pr-4" href="/">Scott Zirkel</a>
        <a class="text-grey-darkest hover:text-red no-underline font-tagline uppercase tracking-wide px-2 sm:px-4" href="/drawings">Drawings</a>
        <a class="text-grey-darkest hover:text-red no-underline font-tagline uppercase tracking-wide px-2 sm:px-4" href="/writing">Writing</a>
        <a class="text-grey-darkest hover:text-red no-underline font-tagline uppercase tracking-wide px-2 sm:px-4" href="/design">Design</a>
        <a class="text-grey-darkest hover:text-red no-underline font-tagline uppercase tracking-wide px-2 sm:px-4" href="/code">Code</a>
      </div>
      <div class="flex-1 pb-6 md:py-2 md:flex justify-end items-center">
        <a class="text-grey-darkest hover:text-red no-underline px-4 sm:pr-4" href="https://www.facebook.com/writerandartistscottzirkel">
          @include('svg.facebook-f', ['class' => 'fill-current w-6 h-6 align-middle'])
        </a>
        <a class="text-grey-darkest hover:text-red no-underline px-4" href="https://twitter.com/scottzirkel/">
          @include('svg.twitter', ['class' => 'fill-current w-6 h-6 align-middle'])
        </a>
        <a class="text-grey-darkest hover:text-red no-underline px-4" href="https://www.instagram.com/scottzirkel/">
          @include('svg.instagram', ['class' => 'fill-current w-6 h-6 align-middle'])
        </a>
        <a class="text-grey-darkest hover:text-red no-underline px-4" href="https://behance.net/scottzirkel">
          @include('svg.behance', ['class' => 'fill-current w-6 h-6 align-middle'])
        </a>
        <a class="text-grey-darkest hover:text-red no-underline px-4" href="https://dribbble.com/scottzirkel">
          @include('svg.dribbble', ['class' => 'fill-current w-6 h-6 align-middle'])
        </a>
        <a class="text-grey-darkest hover:text-red no-underline px-4" href="https://scottzirkel.deviantart.com/">
          @include('svg.deviantart', ['class' => 'fill-current w-6 h-6 align-middle'])
        </a>
        <a class="text-grey-darkest hover:text-red no-underline px-4" href="https://github.com/scottzirkel/">
          @include('svg.github-alt', ['class' => 'fill-current w-6 h-6 align-middle'])
        </a>
        <a class="text-grey-darkest hover:text-red no-underline px-4 sm:pl-4" href="https://medium.com/@scottzirkel/">
          @include('svg.medium-m', ['class' => 'fill-current w-6 h-6 align-middle'])
        </a>
      </div>
    </header>
    <main class="flex-1 flex justify-center items-center">
      <div class="container {{ $contentClass ?? null }}">
        @yield('content')
      </div>
    </main>
    <footer class="text-center text-sm pb-4 font-sans leading-loose container">
      <p>To contact me, please send me a <a class="text-red hover:text-red-dark no-underline hover:underline" href="https://twitter.com/home?status=@scottzirkel%20Hey!">Tweet</a> or contact me through any of the social networks listed at the top of the page.</p>
      <p>Copyright © 2003 – {{ date('Y') }} Scott Zirkel. All Rights Reserved.</p>
    </footer>
    @yield('scripts')
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Person",
        "name": "Scott Zirkel",
        "url": "https://scottzirkel.com",
        "sameAs": [
          "https://www.facebook.com/writerandartistscottzirkel",
          "https://twitter.com/scottzirkel",
          "https://www.instagram.com/scottzirkel/"
        ]
      }
    </script>
  </body>
</html>

