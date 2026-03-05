@extends('layout')

@section('title', 'Nos offres - Mundial')

@section('content')
<section id="cards-section" class="cards-section-6">
  <div class="centered-container w-container">
    <div>
      <a href="{{ route('home') }}" class="back-copy w-inline-block"><img src="{{ asset('images/back.svg') }}" loading="lazy" alt="" class="image-26">
        <div class="text-block-7">{{ trans_db('offer.back_to_offers', null, 'À la liste des offres') }}</div>
      </a>
    </div>
    <h2 class="heading-12">{{ trans_db('page.offers.title', null, 'Nos offres') }}</h2>
    <p class="paragraph-18">{!! trans_db('page.offers.intro', null, 'Nous avons de nombreuses activités de loisirs pour vous, vos amis et votre famille. Notre but est de rendre votre temps libre amusant. Nous organisons également des fêtes de Noël et des anniversaires d\'enfants. Découvrez maintenant notre centre de loisirs sur Internet. Laissez-vous surprendre par notre grande offre.<br><br>') !!}</p>
    <div class="cards-grid-container-3">
      <a href="{{ route('angebote-hallenbad') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture"><img src="{{ asset('images/logoicon_swim_green.svg') }}" loading="lazy" alt="" class="logoicon_01"></div>
        <h3 class="heading-8">{{ trans_db('card.hallenbad.title', null, 'Piscine') }}</h3>
        <p class="paragraph-6">{!! trans_db('card.hallenbad.desc', null, "La natation est saine et renforce le corps et l'âme de nous, humains. Profitez de la baignade dans une atmosphère agréable dans notre piscine intérieure. Il y en a pour tous les goûts, des jeunes aux moins jeunes.") !!}</p>
        <div class="text-block-5">{{ trans_db('card.more_link', null, 'En savoir plus') }}</div>
      </a>
      <a href="{{ route('angebote-sauna') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture-2"><img src="{{ asset('images/logoicon_sauna_green.svg') }}" loading="lazy" alt="" class="logoicon_02"></div>
        <h3 class="heading-8">{{ trans_db('card.sauna.title', null, 'Sauna') }}</h3>
        <p class="paragraph-6">{!! trans_db('card.sauna.desc', null, "Que ce soit en hiver ou en été, le sauna est une forme particulière de traitement chaud-froid qui favorise la santé et la détente. Entre autres, le sauna stimule le métabolisme, stabilise le système cardiovasculaire et aide à entraîner le système vasculaire.") !!}</p>
        <div class="text-block-5">{{ trans_db('card.more_link', null, 'En savoir plus') }}</div>
      </a>
      <a href="{{ route('angebote-minigolf') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture-3"><img src="{{ asset('images/logoicon_golf_green.svg') }}" loading="lazy" alt="" class="logoicon_03"></div>
        <h3 class="heading-8">{{ trans_db('card.minigolf.title', null, 'Minigolf') }}</h3>
        <p class="paragraph-6">{!! trans_db('card.minigolf.desc', null, "Profitez d'une partie de mini-golf sur notre terrain de mini-golf. Notre mini-golf de 20 trous est situé au cœur de notre parc naturel. Nature et plaisir pour toute la famille.") !!}</p>
        <div class="text-block-5">{{ trans_db('card.more_link', null, 'En savoir plus') }}</div>
      </a>
      <a href="{{ route('angebote-bowling') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture-4"><img src="{{ asset('images/logoicon_bowling_green.svg') }}" loading="lazy" alt="" class="logoicon_04"></div>
        <h3 class="heading-8">{{ trans_db('card.bowling.title', null, 'Bowling') }}</h3>
        <p class="paragraph-6">{!! trans_db('card.bowling.desc', null, "Le bowling est un jeu qui s'apparente au jeu de quilles. Il combine le sport et le plaisir. Vous pouvez y jouer avec des amis ou en famille. C'est pourquoi les gens aiment jouer au bowling. Le centre de loisirs Mundial dispose d'une grande installation avec de nombreuses pistes de bowling.") !!}</p>
        <div class="text-block-5">{{ trans_db('card.more_link', null, 'En savoir plus') }}</div>
      </a>
      <a href="{{ route('angebote-birthday') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture-5"><img src="{{ asset('images/logoicon_birthday_green.svg') }}" loading="lazy" alt="" class="logoicon_05"></div>
        <h3 class="heading-8">{{ trans_db('card.birthday.title', null, "Fête d'Anniversaire") }}</h3>
        <p class="paragraph-6">{!! trans_db('card.birthday.desc', null, "Commencez la nouvelle année de votre vie sportive et active. Célébrez les fêtes d'anniversaire sur la piste de bowling. Venez vous amuser sur notre piste de bowling!") !!}</p>
        <div class="text-block-5">{{ trans_db('card.more_link', null, 'En savoir plus') }}</div>
      </a>
      <a href="{{ route('angebote-restaurant') }}" class="angebot-block w-inline-block">
        <div class="div-angebot-picture-6"><img src="{{ asset('images/logoicon_restaurant_green.svg') }}" loading="lazy" alt="" class="logoicon_06"></div>
        <h3 class="heading-8">{{ trans_db('card.restaurant.title', null, 'Restaurant') }}</h3>
        <p class="paragraph-6">{!! trans_db('card.restaurant.desc', null, "Le mouvement donne faim et soif. C'est pourquoi il y a aussi un restaurant et un bar dans le centre de loisirs Mundial où vous pouvez bien manger et boire des boissons raffinées. Cela vous donnera une nouvelle énergie. Nous nous réjouissons de votre visite. Bon appétit et santé!") !!}</p>
        <div class="text-block-5">{{ trans_db('card.more_link', null, 'En savoir plus') }}</div>
      </a>
    </div>
  </div>
  @include('components.navbar')
</section>
@endsection
