@extends('layout')

@php
    $blocks = \App\Models\PageContent::blocks($pageKey ?? 'tugas_1');
    $block = $blocks->firstWhere('block_type', 'task') ?? $blocks->first();
    $tabs = $blocks->where('block_type', 'tab');
@endphp

@section('title', ($block?->title ?? 'Tugas').' - Mundial')

@section('content')
<main id="main-content" class="main-content">
  @if ($tabs->isNotEmpty())
  <div class="w-container">
    <div data-duration-in="300" data-duration-out="100" class="w-tabs">
      <div class="w-tab-content">
        @foreach ($tabs as $tab)
        <div data-w-tab="Tab {{ $loop->iteration }}" class="w-tab-pane">
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
  @endif

  <div class="container-9 w-container">
    <h1 class="heading-10">{{ $block?->title ?? 'Tugas' }}</h1>
    <p class="paragraph-9">{!! $block?->description !!}</p>
    @if ($block?->secondary_button_text)
    <div>
      <div class="w-layout-grid grid-2">
        <a href="{{ $block->button_url ?: route('task.cancel') }}" class="button3 w-button">{{ $block->button_text ?? 'Lewati tugas' }}</a>
        <a href="{{ $block->secondary_button_url ?: '#' }}" class="button w-button" @unless($block->secondary_button_url) onclick="event.preventDefault();window.history.back()" @endunless>{{ $block->secondary_button_text }}</a>
      </div>
    </div>
    @else
    <div class="div-block-7">
      <a href="{{ $block->button_url ?: route('task.cancel') }}" class="button w-button">{{ $block->button_text ?? 'Lanjutkan' }}</a>
    </div>
    @endif
  </div>
</main>
@endsection
