@extends('layout')

@section('title', 'Sauna - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="container-4 w-container">
    <a href="{{ route('offers') }}" class="back w-inline-block">
      <img src="{{ asset('images/back.svg') }}" loading="lazy" alt="" class="image-26">
      <div class="text-block-7">{{ trans_db('offer.back_to_offers', null, 'À la liste des offres') }}</div>
    </a>
  </div>
  <div class="container-4 w-container">
    <div class="div-block-46"></div>
    <div class="w-richtext">
      <p>‍</p>
      <h2>{{ trans_db('offer.sauna.title', null, 'Sauna') }}</h2>
      <p>{!! trans_db('offer.sauna.intro', null, 'Si vous aimez la chaleur, vous êtes exactement au bon endroit dans le sauna du Centre de Loisirs Mundial.') !!}</p>
      <p>{!! trans_db('offer.sauna.desc1', null, 'Notre espace sauna s\'étend sur environ 1\'500 m². Vivez la fascination de la chaleur dans l\'un de nos cinq saunas aux températures différentes.') !!}</p>
      <p>{!! trans_db('offer.sauna.desc2', null, 'Que ce soit en hiver ou en été, le sauna est une forme particulière d\'application chaud-froid qui favorise la santé et sert à se détendre. Entre autres, le sauna stimule le métabolisme, stabilise le système cardiovasculaire et aide à entraîner le système vasculaire.') !!}</p>
      <p>{!! trans_db('offer.sauna.recommendation', null, 'Nous vous recommandons de bénéficier de trois intercirculations, car plus n\'apporte pas de bénéfices pour la santé et peuvent conduire à la fatigue des fonctions corporelles.') !!}</p>
      <p>‍<br></p>
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
