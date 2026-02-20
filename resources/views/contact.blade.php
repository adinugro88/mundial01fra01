@extends('layout')

@section('title', 'Contact - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <div class="w-richtext">
      <h2><strong>Contact</strong></h2>
      <p>Saisissez votre prénom, votre nom, votre numéro de téléphone et votre adresse électronique dans le formulaire de contact ci-dessous. Et posez-nous vos questions dans le formulaire de contact. Nous serons heureux de vous répondre personnellement.<br><br>Nous organisons également des fêtes d&#x27;anniversaire et des événements qui vous plaisent. La musique, la restauration et les boissons sont bien sûr incluses. Voulez-vous faire une telle fête ? Alors, écrivez-nous également dans le formulaire de contact. La carte ci-dessus vous indique le chemin pour nous rejoindre.</p>
    </div>
  </div>
  <div class="w-container">
    <h2>Formulaire de contact</h2>
    <div class="w-form">
      <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="POST" action="{{ route('contact.submit') }}" class="form-2">
        @csrf
        <div>
          <div id="formInstructions" class="small-text"><em>* Champs obligatoires<br>‍</em></div>
        </div>
        <div><label for="First-Name-2" id="contact-first-name">La raison pour le contact *</label>
          <select id="field" name="reason" required="" class="w-select">
            <option value="">Veuillez choisir...</option>
            <option value="Questions générales">Questions générales</option>
            <option value="Questions sur les abonnements">Questions sur les abonnements</option>
            <option value="Réservations">Réservations</option>
            <option value="Eloges et plaintes">Eloges et plaintes</option>
            <option value="Autres">Autres</option>
          </select>
        </div>
        <div class="contact-form-grid-2">
          <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95dd-f11246f9">
            <label for="First-Name" id="contact-first-name">Prénom *</label>
            <input type="text" class="w-input" maxlength="256" name="first_name" data-name="First Name" id="First-Name" required="">
          </div>
          <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95e1-f11246f9">
            <label for="Last-Name" id="contact-last-name">Nom de famille*</label>
            <input type="text" class="w-input" maxlength="256" name="last_name" data-name="Last Name" id="Last-Name" required="">
          </div>
          <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95e5-f11246f9">
            <label for="Email" id="contact-email">E-mail *</label>
            <input type="email" class="w-input" maxlength="256" name="email" data-name="Email" id="Email" required="">
          </div>
          <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95e9-f11246f9">
            <label for="Contact-Phone-Number" id="contact-phone">Numéro de téléphone</label>
            <input type="text" class="w-input" maxlength="256" name="phone" data-name="Contact Phone Number" id="Contact-Phone-Number">
          </div>
          <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95ed-f11246f9">
            <label for="Message" id="contact-message">Message *</label>
            <textarea data-name="Message" maxlength="5000" id="Message" name="message" required="" class="w-input"></textarea>
          </div>
        </div>
        <button type="submit" class="primary-button w-button">Soumettre le formulaire</button>
      </form>
      <div class="w-form-done">
        <div>Merci! Votre message a été reçu!</div>
      </div>
      <div class="w-form-fail">
        <div>Oops! Quelque chose s&#x27;est mal passé lors de la soumission du formulaire.</div>
      </div>
    </div>
  </div>
  <div class="container-21 w-container">
    <div class="w-row">
      <div class="column-3 w-col w-col-6">
        <h4>Horaires d&#x27;ouvertures</h4>
        <p>Lundi - Jeudi : 08h00 - 19h00<br>Vendredi : 08h00 - 21h00<br>Samedi : 09h00 - 17h00<br>Dimanche : 09h00 - 12h00</p>
      </div>
      <div class="column-4 w-col w-col-6">
        <h4>Contact</h4>
        <p>Centre de loisirs Mundial<br>Frohstrasse 32<br>21362 Bringels<br>Télephone: 0041 870 23 57 48</p>
      </div>
    </div>
  </div>
  <div data-collapse="tiny" data-animation="default" data-duration="400" role="banner" class="navbar w-nav">
    <div class="container-6 w-container">
      <a href="{{ route('home') }}" class="w-inline-block"><img src="{{ asset('images/logo1_v3.svg') }}" height="40" alt="" class="image"></a>
      <nav role="navigation" class="w-nav-menu">
        <a href="{{ route('offers') }}" class="nav-link-2 w-nav-link">Nos offres</a>
        <a href="{{ route('prices') }}" class="nav-link-2 w-nav-link">Abonnements &amp; Prix</a>
        <a href="{{ route('contact') }}" aria-current="page" class="nav-link-2 w-nav-link w--current">Contact</a>
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
