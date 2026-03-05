@extends('layout')

@section('title', 'Restaurant - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <a href="{{ route('offers') }}" class="back w-inline-block">
      <img src="{{ asset('images/back.svg') }}" loading="lazy" alt="" class="image-26">
      <div class="text-block-7">{{ trans_db('offer.back_to_offers', null, 'À la liste des offres') }}</div>
    </a>
  </div>
  <div class="w-container">
    <div class="div-block-51"></div>
    <div class="w-richtext">
      <p>‍</p>
      <h2>{{ trans_db('offer.restaurant.title', null, 'Restaurant') }}</h2>
      <p>{!! trans_db('offer.restaurant.intro', null, 'Profitez de notre restaurant au Centro de Loisirs Mundial avec une cuisine délicieuse et une ambiance agréable.') !!}</p>
      <p>{!! trans_db('offer.restaurant.menu', null, 'Notre menu varie et propose des plats traditionnels ainsi que des spécialités régionales. Tous les plats sont préparés avec des ingrédients frais et de qualité.') !!}</p>
      <p>{!! trans_db('offer.restaurant.ambiance', null, 'Que ce soit pour un déjeuner rapide, un dîner en famille ou une célébration spéciale, notre restaurant offre le cadre idéal avec une vue magnifique sur nos installations de loisirs.') !!}</p>
      <p>‍</p>
    </div>
    <div class="div-block-209">
      <a href="#" class="primary-button w-button">{{ trans_db('offer.button_reservation', null, 'Faire une réservation') }}</a>
    </div>
  </div>
  @include('components.navbar')
</main>
@endsection
