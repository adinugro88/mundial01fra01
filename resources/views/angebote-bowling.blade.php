@extends('layout')

@section('title', 'Bowling - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <a href="{{ route('offers') }}" class="back w-inline-block">
      <img src="{{ asset('images/back.svg') }}" loading="lazy" alt="" class="image-26">
      <div class="text-block-7">{{ trans_db('offer.back_to_offers', null, 'À la liste des offres') }}</div>
    </a>
  </div>
  <div class="w-container">
    <div class="div-block-48"></div>
    <div>
      <h2><strong>{{ trans_db('offer.bowling.title', null, 'Bowling') }}</strong></h2>
      <p><strong class="bold-text-3">{{ trans_db('offer.bowling.subtitle1', null, 'Le jeu pour le sport et le plaisir entre amis ou en famille.') }}</strong></p>
      <p>{{ trans_db('offer.bowling.desc1', null, 'Le bowling est une manière classique de combiner sport et socialisation. Vous pouvez profiter d\'une soirée décontractée entre amis dans une atmosphère détendue dans notre grande installation avec restauration et coin salon confortable. Que ce soit une fête de famille ou de Noël, une fête d\'anniversaire pour les enfants, entre amis ou parents, notre piste de bowling offre un sport détendu et un confort convivial.') }}</p>
      <p><strong class="bold-text-4">{{ trans_db('offer.bowling.subtitle2', null, 'Le plaisir ultime de la fête pour petits et grands.') }}</strong></p>
    </div>
    <p class="paragraph-19">{{ trans_db('offer.bowling.desc2', null, 'Vivez la sensation spéciale du bowling avec de la musique entraînante, des boissons fraîches et un fantastique spectacle de lumières ! Pistes lumineuses, boules colorées et épingles rayonnantes ... L\'expérience du bowling en lumière noire !') }}</p>
    <a href="#" class="primary-button w-button">{{ trans_db('offer.button_book_track', null, 'Réserver une piste') }}</a>
    <p class="paragraph-20"><strong class="bold-text-5">{{ trans_db('offer.bowling.birthday_title', null, 'Combiner son anniversaire avec le bowling') }}</strong></p>
    <p>{{ trans_db('offer.bowling.birthday_desc', null, 'Pas d\'envie de préparer, cuisiner, faire de la pâtisserie et tout nettoyer après ? Le bowling chez Mundial offre de nombreuses variantes pour passer un anniversaire sociable et actif. Quel que soit le temps, avec musique et gastronomie en arrière-plan, votre fête d\'anniversaire au bowling est garantie d\'être très amusante. Le bowling fonctionne pour les petits et grands invités et ne nécessite aucune compétence particulière. Laissez-vous inspirer par nos idées pour votre anniversaire au bowling.') }}</p>
    <a href="#" class="primary-button w-button">{{ trans_db('offer.button_birthday_offers', null, 'Afficher les offres d\'anniversaire') }}</a>
  </div>
  @include('components.navbar')
</main>
@endsection
