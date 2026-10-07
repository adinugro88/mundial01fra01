@extends('layout')

@php($block = \App\Models\PageContent::block('kembali'))

@section('title', ($block?->title ?? 'Kembali').' - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    <h1 class="heading-10">{{ $block?->title ?? 'Kembali' }}</h1>
    <p class="paragraph-9">{!! $block?->description !!}</p>
    <div class="div-block-7">
      <a href="{{ $block?->button_url ?: route('home') }}" class="button w-button">{{ $block?->button_text ?? 'Kembali ke beranda' }}</a>
    </div>
  </div>
  @include('components.navbar')
</main>
@endsection
