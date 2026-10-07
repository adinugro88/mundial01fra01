@extends('layout')

@php($block = \App\Models\PageContent::block('tugas_selesai'))

@section('title', ($block?->title ?? 'Tugas selesai').' - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    <h1 class="heading-10">{{ $block?->title ?? 'Tugas selesai' }}</h1>
    <p class="paragraph-9">{!! $block?->description !!}</p>
    <div class="div-block-7">
      <a href="{{ $block?->button_url ?: route('task.2') }}" class="button w-button">{{ $block?->button_text ?? 'Tugas berikutnya' }}</a>
    </div>
  </div>
  @include('components.navbar')
</main>
@endsection
