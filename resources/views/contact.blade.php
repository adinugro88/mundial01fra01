@extends('layout')

@section('title', 'Contact - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <div class="w-richtext">
      <h2><strong>{{ trans_db('page.contact.title', null, 'Contact') }}</strong></h2>
      <p>{!! trans_db('page.contact.intro', null, 'Saisissez votre prénom, votre nom, votre numéro de téléphone et votre adresse électronique dans le formulaire de contact ci-dessous. Et posez-nous vos questions dans le formulaire de contact. Nous serons heureux de vous répondre personnellement.<br><br>Nous organisons également des fêtes d\'anniversaire et des événements qui vous plaisent. La musique, la restauration et les boissons sont bien sûr incluses. Voulez-vous faire une telle fête ? Alors, écrivez-nous également dans le formulaire de contact. La carte ci-dessus vous indique le chemin pour nous rejoindre.') !!}</p>
    </div>
  </div>
  <div class="w-container">
    <h2>{{ trans_db('page.contact.form_title', null, 'Formulaire de contact') }}</h2>
    <div class="w-form">
      <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="POST" action="{{ route('contact.submit') }}" class="form-2">
        @csrf
        <div>
          <div id="formInstructions" class="small-text"><em>{{ trans_db('page.contact.form_instructions', null, '* Champs obligatoires') }}<br>‍</em></div>
        </div>
        <div><label for="First-Name-2" id="contact-first-name">{{ trans_db('page.contact.reason_label', null, 'La raison pour le contact *') }}</label>
          <select id="field" name="reason" required="" class="w-select">
            <option value="">{{ trans_db('page.contact.reason_placeholder', null, 'Veuillez choisir...') }}</option>
            <option value="Questions générales">{{ trans_db('page.contact.reason_general', null, 'Questions générales') }}</option>
            <option value="Questions sur les abonnements">{{ trans_db('page.contact.reason_subscription', null, 'Questions sur les abonnements') }}</option>
            <option value="Réservations">{{ trans_db('page.contact.reason_booking', null, 'Réservations') }}</option>
            <option value="Eloges et plaintes">{{ trans_db('page.contact.reason_feedback', null, 'Eloges et plaintes') }}</option>
            <option value="Autres">{{ trans_db('page.contact.reason_other', null, 'Autres') }}</option>
          </select>
        </div>
        <div class="contact-form-grid-2">
          <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95dd-f11246f9">
            <label for="First-Name" id="contact-first-name">{{ trans_db('page.contact.first_name', null, 'Prénom *') }}</label>
            <input type="text" class="w-input" maxlength="256" name="first_name" data-name="First Name" id="First-Name" required="">
          </div>
          <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95e1-f11246f9">
            <label for="Last-Name" id="contact-last-name">{{ trans_db('page.contact.last_name', null, 'Nom de famille *') }}</label>
            <input type="text" class="w-input" maxlength="256" name="last_name" data-name="Last Name" id="Last-Name" required="">
          </div>
          <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95e5-f11246f9">
            <label for="Email" id="contact-email">{{ trans_db('page.contact.email', null, 'E-mail *') }}</label>
            <input type="email" class="w-input" maxlength="256" name="email" data-name="Email" id="Email" required="">
          </div>
          <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95e9-f11246f9">
            <label for="Contact-Phone-Number" id="contact-phone">{{ trans_db('page.contact.phone', null, 'Numéro de téléphone') }}</label>
            <input type="text" class="w-input" maxlength="256" name="phone" data-name="Contact Phone Number" id="Contact-Phone-Number">
          </div>
          <div id="w-node-aa40560f-18b4-f673-4114-75a8ac1d95ed-f11246f9">
            <label for="Message" id="contact-message">{{ trans_db('page.contact.message', null, 'Message *') }}</label>
            <textarea data-name="Message" maxlength="5000" id="Message" name="message" required="" class="w-input"></textarea>
          </div>
        </div>
        <button type="submit" class="primary-button w-button">{{ trans_db('page.contact.submit_button', null, 'Soumettre le formulaire') }}</button>
      </form>
      <div class="w-form-done">
        <div>{{ trans_db('page.contact.form_success', null, 'Merci! Votre message a été reçu!') }}</div>
      </div>
      <div class="w-form-fail">
        <div>{{ trans_db('page.contact.form_error', null, 'Oops! Quelque chose s\'est mal passé lors de la soumission du formulaire.') }}</div>
      </div>
    </div>
  </div>
  <div class="container-21 w-container">
    <div class="w-row">
      <div class="column-3 w-col w-col-6">
        <h4>{{ trans_db('page.contact.hours_title', null, 'Horaires d\'ouvertures') }}</h4>
        <p>{!! trans_db('page.contact.hours_text', null, 'Lundi - Jeudi : 08h00 - 19h00<br>Vendredi : 08h00 - 21h00<br>Samedi : 09h00 - 17h00<br>Dimanche : 09h00 - 12h00') !!}</p>
      </div>
      <div class="column-4 w-col w-col-6">
        <h4>{{ trans_db('page.contact.info_title', null, 'Contact') }}</h4>
        <p>{!! trans_db('page.contact.info_address', null, 'Centre de loisirs Mundial<br>Frohstrasse 32<br>21362 Bringels<br>Télephone: 0041 870 23 57 48') !!}</p>
      </div>
    </div>
  </div>
  @include('components.navbar')
</main>
@endsection
