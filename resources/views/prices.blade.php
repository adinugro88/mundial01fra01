@extends('layout')

@section('title', 'Prices')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <h2 class="heading-13">{{ trans_db('page.prices.title', null, 'Abonnements & Prix') }}</h2>
    <div>
      <div class="w-row">
        <div class="w-col w-col-6"><img src="{{ asset('images/mundial_card_v2.png') }}" loading="lazy" srcset="{{ asset('images/mundial_card_v2-p-500.png') }} 500w, {{ asset('images/mundial_card_v2.png') }} 616w" sizes="(max-width: 479px) 70vw, (max-width: 767px) 74vw, (max-width: 991px) 283.1875px, 368px" alt="" class="mundial-card"></div>
        <div class="w-col w-col-6">
          <h3 class="heading-9">{{ trans_db('page.prices.card_title', null, 'Mundial Card - Abonnement annuel') }}</h3>
          <p class="paragraph-7">{!! trans_db('page.prices.card_desc', null, 'Vous \u00eates souvent chez nous ? Avec la Carte Mundial, vous pouvez profiter de toutes les offres du Centre de Loisirs Mundial pendant toute une ann\u00e9e. Cela comprend le mini golf, le bowling, le sauna et la piscine. Vous n\'avez plus \u00e0 vous soucier de l\'entr\u00e9e. Montrez votre carte \u00e0 l\'entr\u00e9e et entrez. Commandez votre abonnement annuel personnel Mundial d\u00e8s aujourd\'hui. <br>\u200b<br>CHF <strong>1\'420.-</strong><br> ') !!}</p>
        </div>
      </div>
      <div class="div-block-203">
        <a href="#" class="primary-button-card-offer w-button">{{ trans_db('page.prices.buy_now', null, 'Acheter maintenant') }}</a>
      </div>
    </div>

    <div class="html-embed w-embed">
      <h3>{{ trans_db('page.prices.pool_admission', null, 'Entrée piscine') }}</h3>
      {!! \App\Models\PriceContent::getBySection('pool_admission') ?? '<p>Konten tidak ditemukan. Silakan tambahkan di admin panel.</p>' !!}
    </div>

    <div class="w-container">
      <h3>{{ trans_db('page.prices.sauna_admission', null, 'Entrée sauna et douche à vapeur') }}</h3>
      {!! \App\Models\PriceContent::getBySection('sauna_admission') ?? '<p>Konten tidak ditemukan. Silakan tambahkan di admin panel.</p>' !!}
      <p style="margin-top: 10px;"><em>{{ trans_db('page.prices.sauna_note', null, 'Les enfants de moins de 16 ans doivent être accompagnés par un adulte dans le sauna et la douche à vapeur.') }}</em></p>
    </div>

    @include('components.navbar')
  </div>

  <div>
    <div class="container-7 w-container">
      <div class="div-block-16">
        <h3 class="heading-9">{{ trans_db('page.prices.payment_title', null, 'Mode de paiement') }}</h3>
        <p class="paragraph-7">{!! trans_db('page.prices.payment_description', null, 'Tous les prix sont en francs suisses. Les changements de prix sont possibles. Vous pouvez payer le tarif d\'entrée en espèces (francs ou euros), ou par carte bancaire.') !!}<br></p>
        <div class="div-block-17">
          {{-- <img src="{{ asset('images/twint.svg') }}" loading="lazy" alt="" class="image-9"> --}}
          <img src="{{ asset('images/visa.svg') }}" loading="lazy" alt="" class="image-9">
          <img src="{{ asset('images/mastercard.svg') }}" loading="lazy" alt="" class="image-9">
          <img src="{{ asset('images/qrismastr.webp') }}" style="height: 60px;" loading="lazy" alt="" class="image-9">
          <img src="{{ asset('images/gopay.png') }}" alt="" loading="lazy" alt="" class="image-9">
          {{-- <img src="{{ asset('images/maestro.svg') }}" loading="lazy" alt="" class="image-9">
          <img src="{{ asset('images/postfinance.svg') }}" loading="lazy" alt="" class="image-9">
          <img src="{{ asset('images/reka.svg') }}" loading="lazy" alt="" class="image-9"> --}}
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
