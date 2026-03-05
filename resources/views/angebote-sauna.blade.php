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
  @include('components.navbar')
</main>
@endsection
