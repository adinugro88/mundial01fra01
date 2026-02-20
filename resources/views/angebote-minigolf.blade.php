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
