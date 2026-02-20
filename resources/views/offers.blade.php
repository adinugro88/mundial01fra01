@extends('layout')

@section('title', 'Nos offres - Mundial')

@section('content')
<section id="cards-section" class="cards-section-6">
  <div class="centered-container w-container">
    <div>
      <a href="{{ route('home') }}" class="back-copy w-inline-block"><img src="{{ asset('images/back.svg') }}" loading="lazy" alt="" class="image-26">
        <div class="text-block-7">retour</div>
      </a>
    </div>
    <h2 class="heading-12">Nos offres</h2>
    <p class="paragraph-18">Nous avons de nombreuses activités de loisirs pour vous, vos amis et votre famille. Notre but est de rendre votre temps libre amusant. Nous organisons également des fêtes de Noël et des anniversaires d&#x27;enfants. Découvrez maintenant notre centre de loisirs sur Internet. Laissez-vous surprendre par notre grande offre.<br><br></p>
    <div class="cards-grid-container-3">
      <a href="{{ route('angebote-hallenbad') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture"><img src="{{ asset('images/logoicon_swim_green.svg') }}" loading="lazy" alt="" class="logoicon_01"></div>
        <h3 class="heading-8">Piscine</h3>
        <p class="paragraph-6">La natation est saine et renforce le corps et l&#x27;âme de nous, humains. Profitez de la baignade dans une atmosphère agréable dans notre piscine intérieure. Il y en a pour tous les goûts, des jeunes aux moins jeunes.</p>
        <div class="text-block-5">En savoir plus</div>
      </a>
      <a href="{{ route('angebote-sauna') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture-2"><img src="{{ asset('images/logoicon_sauna_green.svg') }}" loading="lazy" alt="" class="logoicon_02"></div>
        <h3 class="heading-8">Sauna</h3>
        <p class="paragraph-6">Que ce soit en hiver ou en été, le sauna est une forme particulière de traitement chaud-froid qui favorise la santé et la détente. Entre autres, le sauna stimule le métabolisme, stabilise le système cardiovasculaire et aide à entraîner le système vasculaire.</p>
        <div class="text-block-5">En savoir plus</div>
      </a>
      <a href="{{ route('angebote-minigolf') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture-3"><img src="{{ asset('images/logoicon_golf_green.svg') }}" loading="lazy" alt="" class="logoicon_03"></div>
        <h3 class="heading-8">Minigolf</h3>
        <p class="paragraph-6">Profitez d&#x27;une partie de mini-golf sur notre terrain de mini-golf. Notre mini-golf de 20 trous est situé au cœur de notre parc naturel. Nature et plaisir pour toute la famille.</p>
        <div class="text-block-5">En savoir plus</div>
      </a>
      <a href="{{ route('angebote-bowling') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture-4"><img src="{{ asset('images/logoicon_bowling_green.svg') }}" loading="lazy" alt="" class="logoicon_04"></div>
        <h3 class="heading-8">Bowling</h3>
        <p class="paragraph-6">Le bowling est un jeu qui s&#x27;apparente au jeu de quilles. Il combine le sport et le plaisir. Vous pouvez y jouer avec des amis ou en famille. C&#x27;est pourquoi les gens aiment jouer au bowling. Le centre de loisirs Mundial dispose d&#x27;une grande installation avec de nombreuses pistes de bowling.</p>
        <div class="text-block-5">En savoir plus</div>
      </a>
      <a href="{{ route('angebote-birthday') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture-5"><img src="{{ asset('images/logoicon_birthday_green.svg') }}" loading="lazy" alt="" class="logoicon_05"></div>
        <h3 class="heading-8">Fête d&#x27;anniversaire</h3>
        <p class="paragraph-6">Commencez la nouvelle année de votre vie sportive et active. Célébrez les fêtes d&#x27;anniversaire sur la piste de bowling. Venez vous amuser sur notre piste de bowling !</p>
        <div class="text-block-5">En savoir plus</div>
      </a>
      <a href="{{ route('angebote-restaurant') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture-6"><img src="{{ asset('images/logoicon_restaurant_green.svg') }}" loading="lazy" alt="" class="logoicon_06"></div>
        <h3 class="heading-8">Restaurant</h3>
        <p class="paragraph-6">Le mouvement donne faim et soif. C&#x27;est pourquoi il y a aussi un restaurant et un bar dans le centre de loisirs Mundial où vous pouvez bien manger et boire des boissons raffinées. Cela vous donnera une nouvelle énergie. Nous nous réjouissons de votre visite. Bon appétit et santé !</p>
        <div class="text-block-5">En savoir plus</div>
      </a>
    </div>
  </div>
  <div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
    <div class="container-6 w-container">
      <a href="{{ route('home') }}" class="w-inline-block"><img src="{{ asset('images/logo1_v3.svg') }}" height="40" alt="" class="image"></a>
      <nav role="navigation" class="w-nav-menu">
        <a href="{{ route('offers') }}" aria-current="page" class="nav-link-2 w-nav-link w--current">Nos offres</a>
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
</section>
@endsection
