@extends('layout')

@php($block = \App\Models\PageContent::block($pageKey ?? 'tugas_1'))

@section('title', ($block?->title ?? 'Tugas').' - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    <h1 class="heading-10">{{ $block?->title ?? 'Tugas' }}</h1>
    <p class="paragraph-9">{!! $block?->description !!}</p>
    <div>
      <div class="w-layout-grid grid-2">
        <a href="{{ $block?->button_url ?: route('task.cancel') }}" class="button3 w-button">{{ $block?->button_text ?? 'Lewati tugas' }}</a>
        @if ($block?->secondary_button_url)
          <a href="{{ $block->secondary_button_url }}" class="button w-button">{{ $block->secondary_button_text ?? 'Lanjutkan' }}</a>
        @else
          <div class="w-embed w-script">
            <button class="button" onclick="goBack()">{{ $block?->secondary_button_text ?? 'Lanjutkan' }}</button>
            <script>
              function goBack() {
                window.history.back();
              }
            </script>
          </div>
        @endif
      </div>
    </div>
  </div>
  @include('components.navbar')
</main>
@endsection
