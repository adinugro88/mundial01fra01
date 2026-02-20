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
  <div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
    <div class="container-6 w-container">
      <a href="{{ route('home') }}" class="w-inline-block"><img src="{{ asset('images/logo1_v3.svg') }}" height="40" alt="" class="image"></a>
      <nav role="navigation" class="w-nav-menu">
        <a href="{{ route('offers') }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.offers') }}</a>
        <a href="{{ route('prices') }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.prices') }}</a>
        <a href="{{ route('contact') }}" class="nav-link-2 w-nav-link">{{ trans_db('nav.contact') }}</a>
        <div class="language-switcher">
          <a href="{{ route('language.switch', 'en') }}" class="nav-link-2 w-nav-link @if(session('language') == 'en') active @endif">EN</a>
          <a href="{{ route('language.switch', 'fr') }}" class="nav-link-2 w-nav-link @if(session('language') == 'fr' || !session('language')) active @endif">FR</a>
          <a href="{{ route('language.switch', 'de') }}" class="nav-link-2 w-nav-link @if(session('language') == 'de') active @endif">DE</a>
        </div>
      </nav>
      <a href="{{ route('task') }}" class="button-task-header w-button">{{ trans_db('nav.task') }}</a>
      <div class="menu-button w-nav-button">
        <div class="icon w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
</main>
@endsection
