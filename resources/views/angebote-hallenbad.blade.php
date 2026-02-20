@extends('layout')

@section('title', 'Piscine - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <a href="{{ route('offers') }}" class="back w-inline-block">
      <img src="{{ asset('images/back.svg') }}" loading="lazy" alt="" class="image-26">
      <div class="text-block-7">{{ trans_db('offer.back_to_offers', null, 'À la liste des offres') }}</div>
    </a>
  </div>
  <div class="w-container">
    <div class="div-block-45"></div>
    <div class="w-richtext">
      <p>‍</p>
      <h2>{{ trans_db('offer.hallenbad.indoor_title', null, 'Piscine intérieure') }}</h2>
      <p>{!! trans_db('offer.hallenbad.indoor_desc', null, 'Notre piscine intérieure moderne offre un grand plaisir de baignade aux nageurs sportifs ainsi qu\'aux familles et aux amis. Le bain a une piscine de 50 mètres et promet un plaisir illimité pour petits et grands avec trois toboggans aquatiques. Que ce soit dans des chambres à air colorées, sur des pneus souples ou en chute libre, le plaisir de la glisse est garanti. Divisé en trois niveaux, votre favori parmi les toboggans aquatiques est sûr d\'être trouvé rapidement. Nous organisons aussi régulièrement des événements récréatifs, tels que des spectacles de plongée en hauteur ou des rencontres de sirènes. Non seulement pour les actifs, mais aussi pour les spectateurs un grand plaisir sportif. De plus, les diapositives sont un point fort pour nos jeunes visiteurs.') !!}</p>
      <p>‍</p>
      <p>‍</p>
    </div>
    <div class="div-block-45-copy"></div>
    <div class="w-richtext">
      <p>‍</p>
      <h2>{{ trans_db('offer.hallenbad.natural_title', null, 'Piscine naturelle') }}</h2>
      <p>{!! trans_db('offer.hallenbad.natural_desc', null, 'Notre piscine naturelle offre une eau de baignade qualitativement comparable à celle d\'un lac naturel ou d\'un étang profond. Profitez des plaisirs de la baignade naturelle dans une eau sans chlore ni produits chimiques.') !!}</p>
      <p>‍</p>
      <p>‍</p>
      <p>‍</p>
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
