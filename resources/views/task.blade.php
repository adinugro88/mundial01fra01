@extends('layout')

@section('title', 'Tâche - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <div data-duration-in="300" data-duration-out="100" class="w-tabs">
      <div class="w-tab-content">
        <div data-w-tab="Tab 2" class="w-tab-pane"></div>
        <div data-w-tab="Tab 3" class="w-tab-pane"></div>
        <div data-w-tab="Tab 4" class="w-tab-pane"></div>
      </div>
    </div>
  </div>
  <div class="w-container">
    <div data-duration-in="300" data-duration-out="100" class="w-tabs">
      <div class="w-tab-content">
        <div data-w-tab="Tab 2" class="w-tab-pane"></div>
        <div data-w-tab="Tab 3" class="w-tab-pane"></div>
        <div data-w-tab="Tab 4" class="w-tab-pane"></div>
      </div>
    </div>
  </div>
  <div class="container-9 w-container">
    <h1 class="heading-10">{{ trans_db('task.heading', null, 'Tâche 1') }}</h1>
    <p class="paragraph-9">{{ trans_db('task.description', null, 'Un ami vous a dit à quel point le sauna aromatique du centre de loisirs Mundial est bénéfique. Vous aimeriez le voir par vous-même la semaine prochaine. <br>Utilisez le site web de Mundial pour savoir si le sauna aromatique est ouvert en hiver.') }}</p>
    <div>
      <div class="w-layout-grid grid-2">
        <a href="{{ route('task.cancel') }}" class="button3 w-button">{{ trans_db('task.skip_button', null, 'Sauter la tâche') }}</a>
        <div class="w-embed w-script">
          <button class="button" onclick="goBack()">{{ trans_db('task.continue_button', null, 'Continuer') }}</button>
          <script>
            function goBack() {
              window.history.back();
            }
          </script>
        </div>
      </div>
    </div>
  </div>
  @include('components.navbar')
