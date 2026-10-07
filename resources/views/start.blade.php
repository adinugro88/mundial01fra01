@extends('layout')

@php
    $instruction = \App\Models\PageContent::blocks('mulai')->firstWhere('block_type', 'instruction');
@endphp

@section('title', 'Mulai Tugas - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="container-9 w-container">
    <h1 class="heading-10">{{ $instruction?->title ?? 'Tugas' }}</h1>
    <p class="paragraph-9">{!! $instruction?->description !!}</p>
    <div class="div-block-7">
      <a href="{{ $instruction?->button_url ?: route('task') }}" class="button w-button">{{ $instruction?->button_text ?? 'Mulai tugas' }}</a>
    </div>
  </div>
</main>
@endsection
