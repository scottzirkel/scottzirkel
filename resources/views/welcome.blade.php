@extends('layouts.public')

@section('content')
  <div class="text-center">
    @include('svg.logo', ['class' => 'w-1/3'])
  </div>
  {{-- <h1 class="text-center uppercase text-red font-title font-bold text-5xl leading-none -mb-2">Scott Zirkel</h1>
  <h2 class="text-center text-grey-darkest uppercase italic font-light font-tagline text-2xl md:text-5xl leading-none -mt-2">Making stuff up since 1977</h2> --}}
@endsection
