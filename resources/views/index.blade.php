@extends('layout')

@section('title', 'mundial - Le Centre de Loisirs Mundial')

@section('content')
<div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
  <div class="container-6 w-container">
    <a href="{{ route('home') }}" aria-current="page" class="w-inline-block w--current"><img src="{{ asset('images/logo1_v3.svg') }}" height="40" alt="" class="image"></a>
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
<header id="hero-overlay" class="hero-overlay">
  <div class="container w-container"><img src="{{ asset('images/logo2_v3.svg') }}" loading="lazy" data-w-id="991c37f6-cf5d-1017-12c8-5ecdd607c6b1" alt="" class="image-6">
    <h1 class="heading"><strong class="bold-text">{{ trans_db('home.welcome_title') }}<br></strong></h1>
    <h1 class="heading"><strong class="text-field">{{ trans_db('home.tagline') }}</strong></h1>
  </div>
</header>
<header id="hero" class="hero">
  <div class="w-embed">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
  </div>
  <div class="w-container">
    <h1 class="heading-5">{{ trans_db('home.welcome_main') }}</h1>
    <p class="paragraph-3">{!! trans_db('home.intro_description') !!}</p>
    <div>
      <div class="div-block-30">
        <a href="{{ route('angebote-hallenbad') }}" class="w-inline-block"><img src="{{ asset('images/logoicon_swim_green.svg') }}" loading="lazy" alt="" class="image-23"></a>
        <a href="{{ route('angebote-minigolf') }}" class="w-inline-block"><img src="{{ asset('images/logoicon_golf_green.svg') }}" loading="lazy" alt="" class="image-23"></a>
        <a href="{{ route('angebote-bowling') }}" class="w-inline-block"><img src="{{ asset('images/logoicon_bowling_green.svg') }}" loading="lazy" alt="" class="image-23"></a>
        <a href="{{ route('angebote-sauna') }}" class="w-inline-block"><img src="{{ asset('images/logoicon_sauna_green.svg') }}" loading="lazy" alt="" class="image-23"></a>
        <a href="{{ route('angebote-birthday') }}" class="w-inline-block"><img src="{{ asset('images/logoicon_birthday_green.svg') }}" loading="lazy" alt="" class="image-23"></a>
        <a href="{{ route('angebote-restaurant') }}" class="w-inline-block"><img src="{{ asset('images/logoicon_restaurant_green.svg') }}" loading="lazy" alt="" class="image-23"></a>
      </div>
    </div>
  </div>
</header>
<section id="feature-section" class="feature-section">
  <div class="flex-container w-container">
    <div class="feature-image-mask"><img src="{{ asset('images/sauna3.jpeg') }}" sizes="(max-width: 479px) 92vw, 444px" srcset="{{ asset('images/sauna3-p-1080.jpeg') }} 1080w, {{ asset('images/sauna3-p-1600.jpeg') }} 1600w, {{ asset('images/sauna3-p-2000.jpeg') }} 2000w, {{ asset('images/sauna3.jpeg') }} 2250w" alt="" class="feature-image-2"></div>
    <div>
      <h2 class="heading-6">{{ trans_db('home.relax_title') }}</h2>
      <p class="paragraph-4">{!! trans_db('home.sauna_description') !!}</p>
    </div>
  </div>
</section>
<header id="hero" class="hero">
  <div class="flex-container w-container">
    <div>
      <h1 class="heading-4">{{ trans_db('home.swimming_title') }}</h1>
      <p class="paragraph-5"><br>{!! trans_db('home.pool_description') !!}</p>
    </div>
    <div class="hero-image-mask"><img src="{{ asset('images/naturpool2.jpeg') }}" sizes="(max-width: 479px) 92vw, 444px" srcset="{{ asset('images/naturpool2-p-500.jpeg') }} 500w, {{ asset('images/naturpool2-p-1080.jpeg') }} 1080w, {{ asset('images/naturpool2.jpeg') }} 1264w" alt="" class="hero-image-2"></div>
  </div>
</header>
<section id="cards-section" class="cards-section-test">
  <div class="centered-container w-container">
    <h2 class="heading-11">{{ trans_db('home.offers_title') }}</h2>
    <div class="cards-grid-container-test">
      <a id="w-node-_964a7dc5-b6a8-fc55-c680-15a323039ada-b460c696" href="{{ route('angebote-hallenbad') }}" class="angebot-block w-inline-block">
        <div class="div-block-19"><img src="{{ asset('images/logoicon_swim_green.svg') }}" loading="lazy" alt="" class="logoicon_01"></div>
        <h3 class="heading-8">{{ trans_db('offer.pool_title') }}</h3>
        <p class="paragraph-6">{!! trans_db('offer.pool_desc') !!}</p>
        <div class="text-block-5">{{ trans_db('offer.learn_more') }}</div>
      </a>
      <a href="{{ route('angebote-sauna') }}" class="angebot-block w-inline-block">
        <div class="div-block-29"><img src="{{ asset('images/logoicon_sauna_green.svg') }}" loading="lazy" alt="" class="logoicon_02"></div>
        <h3 class="heading-8">{{ trans_db('offer.sauna_title') }}</h3>
        <p class="paragraph-6">{!! trans_db('offer.sauna_desc') !!}</p>
        <div class="text-block-5">{{ trans_db('offer.learn_more') }}</div>
      </a>
      <a href="{{ route('angebote-birthday') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture-5"><img src="{{ asset('images/logoicon_birthday_green.svg') }}" loading="lazy" alt="" class="logoicon_05"></div>
        <h3 class="heading-8">Fête d&#x27;anniversaire</h3>
        <p class="paragraph-6">Commencez la nouvelle année de votre vie sportive et active. Célébrez les fêtes d&#x27;anniversaire sur la piste de bowling. Venez vous amuser sur notre piste de bowling !</p>
        <div class="text-block-5">En savoir plus</div>
      </a>
    </div>
    <div class="div-block-8">
      <a href="{{ route('offers') }}" class="primary-button w-button">Découvrez toutes nos offres</a>
    </div>
  </div>
</section>
<footer id="footer" class="footer">
  <div class="container-8 w-container">
    <a href="{{ route('home') }}" class="w-inline-block"><img src="{{ asset('images/logo1_v3.svg') }}" height="40" alt="" class="image-1"></a>
  </div>
  <div class="container-8 w-container">
    <div class="w-row">
      <div class="w-col w-col-6">
        <a href="{{ route('offers') }}" class="footer-link">Offres</a>
        <a href="{{ route('prices') }}" class="footer-link">Abonnements &amp; Prix</a>
      </div>
      <div class="w-col w-col-6">
        <a href="{{ route('contact') }}" class="footer-link">Contact</a>
      </div>
    </div>
  </div>
  <div class="w-container">
    <div class="text-block-4">Copyright © 2023 Mundial. </div>
  </div>
</footer>
@endsection
