@extends('layout')

@php($block = \App\Models\PageContent::block($pageKey ?? 'tugas_1_batal'))

@section('title', ($block?->title ?? 'Lewati tugas').' - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    <h1 class="heading-10">{{ $block?->title ?? 'Lewati tugas' }}</h1>
    <p class="paragraph-9">{!! $block?->description !!}</p>
    <div class="div-block-7">
      <div>
        <div class="w-layout-grid grid-2">
          <a href="{{ $block?->secondary_button_url ?: route('beranda') }}" class="button3 w-button">{{ $block?->secondary_button_text ?? 'Tidak, kembali' }}</a>
          <a href="{{ $block?->button_url ?: route('task.2') }}" class="button-red-abbrechen w-button">{{ $block?->button_text ?? 'Ya, lewati' }}</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
