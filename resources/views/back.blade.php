@extends('layout')

@php($block = \App\Models\PageContent::block('kembali'))

@section('title', 'Kembali ke Unipark - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    @if ($block?->title)
    <h1 class="heading-10">{{ $block->title }}</h1>
    @endif
    <p class="paragraph-9">{!! $block?->description !!}</p>
    <div class="div-block-7">
      <a href="{{ $block?->button_url ?: '#' }}" class="button w-button">{{ $block?->button_text ?? 'Kembali ke kuesioner' }}</a>
    </div>
  </div>
</main>
@endsection
