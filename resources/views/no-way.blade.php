@extends('layout')

@php($block = \App\Models\PageContent::block('tidak_tersedia'))

@section('title', ($block?->title ?? 'Halaman tidak tersedia').' - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    <h1 class="heading-10">{{ $block?->title ?? 'Perhatian' }}</h1>
    <p class="paragraph-9">{!! $block?->description !!}</p>
    <div class="div-block-7">
      <div class="w-embed w-script">
        <button class="button" onclick="goBack()">{{ $block?->button_text ?? 'Lanjutkan tugas' }}</button>
        <script>
          function goBack() {
            window.history.back();
          }
        </script>
      </div>
    </div>
  </div>
  @include('components.navbar')
</main>
@endsection
