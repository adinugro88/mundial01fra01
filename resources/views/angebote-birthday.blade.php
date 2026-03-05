@extends('layout')

@section('title', 'Fête d\'Anniversaire - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <a href="{{ route('offers') }}" class="back w-inline-block">
      <img src="{{ asset('images/back.svg') }}" loading="lazy" alt="" class="image-26">
      <div class="text-block-7">{{ trans_db('offer.back_to_offers', null, 'À la liste des offres') }}</div>
    </a>
  </div>
  <div class="w-container">
    <div class="div-block-50"></div>
    <div class="w-richtext">
      <p>‍</p>
      <h2>{{ trans_db('offer.birthday.title', null, 'Fête d\'Anniversaire') }}</h2>
      <p>{!! trans_db('offer.birthday.intro', null, 'Célébrez votre anniversaire au Centro de Loisirs Mundial ! Nous proposons des forfaits d\'anniversaire personnalisés avec diverses activités.') !!}</p>
      <p>{!! trans_db('offer.birthday.packages', null, 'Choisissez parmi nos différents forfaits d\'anniversaire incluant piscine, bowling, sauna ou minigolf. Des packages personnalisés sont disponibles pour tous les âges et budgets.') !!}</p>
      <p>‍</p>
    </div>
    <div class="div-block-209">
      <a href="#" class="primary-button w-button">{{ trans_db('offer.button_book', null, 'Réserver') }}</a>
    </div>
  </div>
  @include('components.navbar')
</main>
@endsection
