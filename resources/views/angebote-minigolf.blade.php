@extends('layout')

@section('title', 'Minigolf - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <a href="{{ route('offers') }}" class="back w-inline-block">
      <img src="{{ asset('images/back.svg') }}" loading="lazy" alt="" class="image-26">
      <div class="text-block-7">{{ trans_db('offer.back_to_offers', null, 'À la liste des offres') }}</div>
    </a>
  </div>
  <div class="w-container">
    <div class="div-block-47"></div>
    <div class="w-richtext">
      <p>‍</p>
      <h2><strong>{{ trans_db('offer.minigolf.title', null, 'Minigolf') }}</strong></h2>
      <p>{!! trans_db('offer.minigolf.desc1', null, 'Profitez d\'une partie de mini-golf sur notre terrain de mini-golf. Notre mini-golf de 20 trous est situé au cœur de notre parc naturel. Nature et plaisir pour toute la famille ! La longueur supplémentaire de certains trous est un défi particulier et garantit le plaisir de jouer !') !!}</p>
      <p>{!! trans_db('offer.minigolf.desc2', null, 'Vous avez une occasion spéciale ? Pas de problème, car avec nous, vous pouvez aussi faire la fête ensemble. Des fêtes d\'anniversaire inoubliables pour les enfants ou un événement d\'entreprise sont possibles sur demande.') !!}</p>
      <p>‍</p>
    </div>
    <div class="div-block-209">
      <a href="#" class="primary-button w-button">{{ trans_db('offer.button_book', null, 'Réserver') }}</a>
    </div>
  </div>
  @include('components.navbar')
</main>
@endsection
