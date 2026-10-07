@extends('layout')

@php
    $blocks = \App\Models\PageContent::blocks('mulai');
    $tabs = $blocks->where('block_type', 'tab');
    $instruction = $blocks->firstWhere('block_type', 'instruction');
@endphp

@section('title', 'Mulai Tugas - Mundial')

@section('extra-head')
<style>
  .w-tab-pane { display: none; }
  .w-tab-pane.is-active { display: block; }
</style>
@endsection

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <div data-duration-in="300" data-duration-out="100" class="w-tabs">
      <div class="w-tab-menu">
        @foreach ($tabs as $tab)
          <a class="w-tab-link {{ $loop->first ? 'w--current' : '' }}" data-my-tab="tab-{{ $loop->iteration }}" id="tablink-mulai-{{ $loop->iteration }}" href="#tabpane-mulai-{{ $loop->iteration }}">{{ $tab->title }}</a>
        @endforeach
      </div>
      <div class="w-tab-content">
        @foreach ($tabs as $tab)
          <div class="w-tab-pane {{ $loop->first ? 'is-active' : '' }}" id="tabpane-mulai-{{ $loop->iteration }}">
            <h4>{{ $tab->title }}</h4>
            {!! $tab->description !!}
            @if ($tab->button_text)
              <a href="{{ $tab->button_url ?: route('reservation') }}" class="button2 w-button">{{ $tab->button_text }}</a>
            @endif
          </div>
        @endforeach
      </div>
    </div>
  </div>
  <div class="container-9 w-container">
    <h1 class="heading-10">{{ $instruction?->title ?? 'Tugas' }}</h1>
    <p class="paragraph-9">{!! $instruction?->description !!}</p>
    <div class="div-block-7">
      <a href="{{ $instruction?->button_url ?: route('task') }}" class="button w-button">{{ $instruction?->button_text ?? 'Mulai tugas' }}</a>
    </div>
  </div>
  @include('components.navbar')
</main>

<script>
  document.querySelectorAll('.w-tab-link').forEach(function (link) {
    link.addEventListener('click', function (event) {
      event.preventDefault();
      var target = link.getAttribute('data-my-tab');
      var wrap = link.closest('.w-tabs');

      wrap.querySelectorAll('.w-tab-link').forEach(function (item) {
        item.classList.toggle('w--current', item === link);
      });

      wrap.querySelectorAll('.w-tab-pane').forEach(function (pane, index) {
        pane.classList.toggle('is-active', 'tab-' + (index + 1) === target);
      });
    });
  });
</script>
@endsection
