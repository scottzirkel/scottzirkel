@extends('layouts.public', [
  'title' => 'Code',
  'contentClass' => 'self-start py-8 w-3/5'
])

@section('content')
  <article class="">
    <h1 class="uppercase tracking-wide font-title font-black text-center mb-4">Code</h1>
    <p class="my-4">I primarily use PHP/Laravel for my backend code, with VueJS for the front end. For CSS I typically use Tailwind CSS and PostCSS.</p>
    <p class="my-4">99% of my code is private client work, but I try to save some of my non-client work on <a class="text-red hover:text-red-darker no-underline hover:underline" href="https://github.com/scottzirkel">GitHub</a>. You can also see me trying new things at <a class="text-red hover:text-red-darker no-underline hover:underline" href="https://codepen.io/scottzirkel">CodePen</a>.</p>
    <div class="my-4">
      <iframe id="cp_embed_dZdWyN" src="//codepen.io/scottzirkel/embed/dZdWyN?height=400&amp;theme-id=22310&amp;slug-hash=dZdWyN&amp;default-tab=result&amp;user=scottzirkel&amp;embed-version=2&amp;pen-title=Tailwind%20Form" scrolling="no" allowtransparency="true" allowfullscreen="true" name="CodePen Embed" title="Tailwind Form" class="cp_embed_iframe " style="width: 100%; overflow: hidden;" height="400" frameborder="0"></iframe>
    </div>
    <div class="my-4">
      <iframe id="cp_embed_weWwqb" src="//codepen.io/scottzirkel/embed/weWwqb?height=400&amp;theme-id=22310&amp;slug-hash=weWwqb&amp;default-tab=result&amp;user=scottzirkel&amp;embed-version=2&amp;pen-title=Screen%20Printing%20Off%20Registration%20Technique" scrolling="no" allowtransparency="true" allowfullscreen="true" name="CodePen Embed" title="Screen Printing Off Registration Technique" class="cp_embed_iframe " style="width: 100%; overflow: hidden;" height="400" frameborder="0"></iframe>
    </div>
  </article>
  <script async="" data-rocketsrc="https://production-assets.codepen.io/assets/embed/ei.js" type="text/rocketscript" data-rocketoptimized="true"></script>
@endsection
