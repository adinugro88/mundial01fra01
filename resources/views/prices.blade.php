@extends('layout')

@section('title', 'Abonnements & Prix - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <h2 class="heading-13">Abonnements &amp; Prix</h2>
    <div>
      <div class="w-row">
        <div class="w-col w-col-6"><img src="{{ asset('images/mundial_card_v2.png') }}" loading="lazy" srcset="{{ asset('images/mundial_card_v2-p-500.png') }} 500w, {{ asset('images/mundial_card_v2.png') }} 616w" sizes="(max-width: 479px) 70vw, (max-width: 767px) 74vw, (max-width: 991px) 283.1875px, 368px" alt="" class="mundial-card"></div>
        <div class="w-col w-col-6">
          <h3 class="heading-9">Mundial Card - Abonnement annuel</h3>
          <p class="paragraph-7">Vous êtes souvent chez nous ? Avec la Carte Mundial, vous pouvez profiter de toutes les offres du Centre de Loisirs Mundial pendant toute une année. Cela comprend le mini golf, le bowling, le sauna et la piscine. Vous n&#x27;avez plus à vous soucier de l&#x27;entrée. Montrez votre carte à l&#x27;entrée et entrez. Commandez votre abonnement annuel personnel Mundial dès aujourd&#x27;hui. <br>‍<br>CHF <strong>1&#x27;420.-</strong><br> </p>
        </div>
      </div>
      <div class="div-block-203">
        <a href="#" class="primary-button-card-offer w-button">Acheter maintenant</a>
      </div>
    </div>

    <div class="html-embed w-embed">
      <h3>Entrée piscine</h3>
      <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
        <tr>
          <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Service</th>
          <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Dès 18 ans</th>
          <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">6-17 ans</th>
          <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Moins de 6 ans</th>
        </tr>
        <tr style="background-color: #F9F9F9;">
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Carte journalière</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">30.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">20.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">gratuit</td>
        </tr>
        <tr>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Entrée simple (3h)</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">20.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">15.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">gratuit</td>
        </tr>
        <tr style="background-color: #F9F9F9;">
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Entrée simple (1.5h)</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">15.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">10.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">gratuit</td>
        </tr>
        <tr>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Prix/Personne pour 30 minutes supplémentaires</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">5.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">5.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">gratuit</td>
        </tr>
        <tr style="background-color: #F9F9F9;">
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Carte de 10 (Admission de jour)</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">270.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">180.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">gratuit</td>
        </tr>
        <tr>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Carte de 10 (3h)</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">180.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">135.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">gratuit</td>
        </tr>
        <tr style="background-color: #F9F9F9;">
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Carte de 10 (1.5h)</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">135.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">90.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">gratuit</td>
        </tr>
      </table>
      <p><em>Les enfants de moins de 12 ans doivent être accompagnés par un adulte dans la piscine intérieure.</em></p>
    </div>

    <div class="w-container">
      <h3>Entrée sauna et douche à vapeur</h3>
      <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%; margin-top: 20px;">
        <tr>
          <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Service</th>
          <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Dès 18 ans</th>
          <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">6-17 ans</th>
          <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Moins de 6 ans</th>
        </tr>
        <tr style="background-color: #F9F9F9;">
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Entrée simple (3h)</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">25.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">15.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Entrée interdite</td>
        </tr>
        <tr>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Entrée simple (1.5h)</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">20.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">10.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Entrée interdite</td>
        </tr>
        <tr style="background-color: #F9F9F9;">
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Prix/personne pour 30 minutes supplémentaires</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">5.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">5.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Entrée interdite</td>
        </tr>
        <tr>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Carte de 10 (3h)</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">225.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">125.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Entrée interdite</td>
        </tr>
        <tr style="background-color: #F9F9F9;">
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Carte de 10 (1.5h)</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">180.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">90.-</td>
          <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Entrée interdite</td>
        </tr>
      </table>
      <p style="margin-top: 10px;"><em>Les enfants de moins de 16 ans doivent être accompagnés par un adulte dans le sauna et la douche à vapeur.</em></p>
    </div>

    <div data-collapse="tiny" data-animation="default" data-duration="400"   role="banner" class="navbar w-nav">
      <div class="container-6 w-container">
        <a href="{{ route('home') }}" class="w-inline-block"><img src="{{ asset('images/logo1_v3.svg') }}" height="40" alt="" class="image"></a>
        <nav role="navigation" class="w-nav-menu">
          <a href="{{ route('offers') }}" class="nav-link-2 w-nav-link">Nos offres</a>
          <a href="{{ route('prices') }}" aria-current="page" class="nav-link-2 w-nav-link w--current">Abonnements &amp; Prix</a>
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
  </div>

  <div>
    <div class="container-7 w-container">
      <div class="div-block-16">
        <h3 class="heading-9">Mode de paiement</h3>
        <p class="paragraph-7">Tous les prix sont en francs suisses. Les changements de prix sont possibles. Vous pouvez payer le tarif d&#x27;entrée en espèces (francs ou euros), ou par carte bancaire.<br></p>
        <div class="div-block-17">
          <img src="{{ asset('images/twint.svg') }}" loading="lazy" alt="" class="image-9">
          <img src="{{ asset('images/visa.svg') }}" loading="lazy" alt="" class="image-9">
          <img src="{{ asset('images/mastercard.svg') }}" loading="lazy" alt="" class="image-9">
          <img src="{{ asset('images/maestro.svg') }}" loading="lazy" alt="" class="image-9">
          <img src="{{ asset('images/postfinance.svg') }}" loading="lazy" alt="" class="image-9">
          <img src="{{ asset('images/reka.svg') }}" loading="lazy" alt="" class="image-9">
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
