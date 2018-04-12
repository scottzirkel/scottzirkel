@extends('layouts.public', [
  'contentClass' => 'self-start py-8 w-1/2',
  'title' => 'Design',
  'description' => 'Most of my design work can be found in the portfolio of Alara Creative on Dribbble, or on Behance.'
])

@section('content')
  <article class="leading-normal">
    <h1 class="uppercase tracking-wide font-title font-black text-center mb-4">Design</h1>
    <p>Most of my design work can be found in the portfolio of <a class="text-red hover:text-red-dark no-underline hover:underline" href="https://alaracreative.com">Alara Creative</a>, on <a class="text-red hover:text-red-dark no-underline hover:underline" href="https://dribbble.com/scottzirkel">Dribbble</a>, or on <a class="text-red hover:text-red-dark no-underline hover:underline" href="https://behance.com/scottzirkel">Behance</a>.</p>
    <div class="flex mt-8">
      <a class="block w-1/3" href="https://dribbble.com/shots/3852144-Revolution-Tattoo">
        <img src="https://cdn.dribbble.com/users/244519/screenshots/3852144/revolution-1_1x.png" alt="Revolution Tattoo">
      </a>
      <a class="block w-1/3" href="https://dribbble.com/shots/3745234-Not-Racist-Just-Bald">
        <img src="https://cdn.dribbble.com/users/244519/screenshots/3745234/not-racist-just-bald.png" alt="Not Racist, Just Bald">
      </a>
      <a class="block w-1/3" href="https://dribbble.com/shots/3670563-Part-Time-Overland-Logos">
        <img src="https://cdn.dribbble.com/users/244519/screenshots/3670563/dribbble.png" alt="Part-Time Overland">
      </a>
    </div>
    <h2 class="font-tagline font-thin uppercase tracking-wide mt-8 mb-2 leading-loose"><a class="text-grey-darkest no-underline hover:underline" href="https://designproacademy.org/">Code of Professional Conduct</a></h2>
    <p class="mb-2">Whereas design professionals have certain fundamental obligations to society, to clients, to the profession, and to peers and colleagues, and…</p>
    <p class="mb-2">Whereas in order to meet these obligations, design professionals should conform their practice according to specific moral ideals and ethical practices,</p>
    <p class="mb-2">I hereby pledge my dedication to the highest standards of professionalism, integrity, and competence in design practice and promise to uphold the spirit and letter of the <a class="text-red hover:text-red-dark no-underline hover:underline" href="">Code of Professional Conduct</a> through consistent practice and habitual reflection on my actions.</p>
  </article>
@endsection
