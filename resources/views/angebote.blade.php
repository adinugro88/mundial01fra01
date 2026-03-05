@extends('layout')

@section('title', '@yield("page_title") - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <div>
      <a href="{{ route('home') }}" class="back-copy w-inline-block">
        <img src="{{ asset('images/back.svg') }}" loading="lazy" alt="" class="image-26">
        <div class="text-block-7">{{ trans_db('offer.back_to_offers', null, 'À la liste des offres') }}</div>
      </a>
    </div>
    <h2 class="heading-12">@yield('page_title')</h2>
    <div class="w-richtext">
      @yield('angebote-content')
    </div>
  </div>
  @include('components.navbar')
</main>
@endsection
