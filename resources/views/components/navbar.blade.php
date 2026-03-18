<div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
  <div class="container-6 w-container">
    <a href="{{ route('home') }}" aria-current="page" class="w-inline-block {{ request()->routeIs('home') ? 'w--current' : '' }}">
      <img src="{{ asset('images/logo1_v3.svg') }}" height="40" alt="" class="image">
    </a>
    <nav role="navigation" class="w-nav-menu">
      <a href="{{ route('offers') }}" class="nav-link-2 w-nav-link {{ request()->routeIs('offers', 'angebote*') ? 'w--current' : '' }}">
        {{ trans_db('nav.offers') }}
      </a>
      <a href="{{ route('prices') }}" class="nav-link-2 w-nav-link {{ request()->routeIs('prices') ? 'w--current' : '' }}">
        {{ trans_db('nav.prices') }}
      </a>
      <a href="{{ route('contact') }}" class="nav-link-2 w-nav-link {{ request()->routeIs('contact') ? 'w--current' : '' }}">
        {{ trans_db('nav.contact') }}
      </a>
      {{-- <div class="language-switcher">
        <a href="{{ route('language.switch', 'id') }}" class="nav-link-2 w-nav-link @if(session('language') == 'id' || !session('language')) active @endif">ID</a>
        <a href="{{ route('language.switch', 'en') }}" class="nav-link-2 w-nav-link @if(session('language') == 'en') active @endif">EN</a>
        <a href="{{ route('language.switch', 'fr') }}" class="nav-link-2 w-nav-link @if(session('language') == 'fr') active @endif">FR</a>
      </div> --}}
    </nav>
    <a href="{{ route('task') }}" class="button-task-header w-button">{{ trans_db('nav.task') }}</a>
    <div class="menu-button w-nav-button">
      <div class="icon w-icon-nav-menu"></div>
    </div>
  </div>
</div>
