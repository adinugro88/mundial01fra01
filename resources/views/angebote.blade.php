@extends('layout')

@section('title', '@yield("page_title") - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <div>
      <a href="{{ route('home') }}" class="back-copy w-inline-block">
        <img src="{{ asset('images/back.svg') }}" loading="lazy" alt="" class="image-26">
        <div class="text-block-7">retour</div>
      </a>
    </div>
    <h2 class="heading-12">@yield('page_title')</h2>
    <div class="w-richtext">
      @yield('angebote-content')
    </div>
  </div>
  <div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
    <div class="container-6 w-container">
      <a href="{{ route('home') }}" class="w-inline-block"><img src="{{ asset('images/logo1_v3.svg') }}" height="40" alt="" class="image"></a>
      <nav role="navigation" class="w-nav-menu">
        <a href="{{ route('offers') }}" class="nav-link-2 w-nav-link">Nos offres</a>
        <a href="{{ route('prices') }}" class="nav-link-2 w-nav-link">Abonnements &amp; Prix</a>
        <a href="{{ route('contact') }}" class="nav-link-2 w-nav-link">Contact</a>
        <div class="language-switcher">
          <a href="{{ route('language.switch', 'en') }}" class="nav-link-2 w-nav-link @if(session('language') == 'en') active @endif">EN</a>
          <a href="{{ route('language.switch', 'fr') }}" class="nav-link-2 w-nav-link @if(session('language') == 'fr' || !session('language')) active @endif">FR</a>
          <a href="{{ route('language.switch', 'de') }}" class="nav-link-2 w-nav-link @if(session('language') == 'de') active @endif">DE</a>
        </div>
      </nav>
      <a href="{{ route('task') }}" class="button-task-header w-button">Tâche</a>
      <div class="menu-button w-nav-button">
        <div class="icon w-icon-nav-menu"></div>
      </div>
    </div>
  </div>
</main>
@endsection
