@extends('layout')

@php($block = \App\Models\PageContent::block('reservasi'))

@section('title', 'Reservasi - Mundial')

@section('content')
<main id="main-content" class="main-content">
  <div class="w-container">
    <div>
      <a href="{{ route('angebote-birthday') }}" class="back-copy w-inline-block">
        <img src="{{ asset('images/back.svg') }}" loading="lazy" alt="" class="image-26">
        <div class="text-block-7">Kembali</div>
      </a>
    </div>
    <div class="w-richtext">
      <p> </p>
      <h2><strong>{{ $block?->subtitle ?? 'Penawaran Ulang Tahun untuk Orang Dewasa' }}</strong></h2>
      {!! $block?->description !!}
    </div>
    <div class="w-form">
      <form id="wf-form-Reservation-Form" name="wf-form-Reservation-Form" data-name="Reservation Form" method="POST" action="{{ route('reservation.submit') }}" class="form-geburtstagsfeier-reservation">
        @csrf
        <div>
          <h3>{{ $block?->title ?? 'Reservasi' }}</h3>
        </div>
        <p>Mohon isi data berikut untuk melakukan reservasi.</p>
        <div class="contact-form-grid">
          <div>
            <label for="people_count">Jumlah orang *</label>
            <select id="people_count" name="people_count" required data-name="Jumlah orang" class="select-field w-select">
              <option value="">Pilih jumlah orang...</option>
              @for ($i = 2; $i <= 8; $i++)
                <option value="{{ $i }}" @selected(old('people_count') == $i)>{{ $i }}</option>
              @endfor
            </select>
          </div>
          <div>
            <label for="reservation_date">Tanggal *</label>
            <input class="w-input" type="date" name="reservation_date" id="reservation_date" value="{{ old('reservation_date') }}" required style="background-color:#f3f3f3;">
          </div>
          <div>
            <label for="reservation_time">Waktu *</label>
            <input type="text" class="w-input" maxlength="20" name="reservation_time" id="reservation_time" value="{{ old('reservation_time') }}" placeholder="18:00" required>
          </div>
          <div>
            <label for="first_name">Nama depan *</label>
            <input type="text" class="w-input" maxlength="255" name="first_name" id="first_name" value="{{ old('first_name') }}" required>
          </div>
          <div>
            <label for="last_name">Nama belakang *</label>
            <input type="text" class="w-input" maxlength="255" name="last_name" id="last_name" value="{{ old('last_name') }}" required>
          </div>
          <div>
            <label for="email">Email *</label>
            <input type="email" class="w-input" maxlength="255" name="email" id="email" value="{{ old('email') }}" required>
          </div>
          <div>
            <label for="phone">Nomor telepon *</label>
            <div class="div-block-6">
              <select id="phone_code" name="phone_code" data-name="Kode negara" class="vorwahl w-select">
                @foreach (['+41', '+62', '+33', '+39', '+43', '+49'] as $code)
                  <option value="{{ $code }}" @selected(old('phone_code', '+41') == $code)>{{ $code }}</option>
                @endforeach
              </select>
              <input type="tel" class="text-field-3 w-input" maxlength="30" name="phone" id="phone" value="{{ old('phone') }}" required>
            </div>
          </div>
          <div>
            <label for="comment">Keterangan (opsional)</label>
            <textarea data-name="Keterangan" maxlength="5000" id="comment" name="comment" class="w-input">{{ old('comment') }}</textarea>
          </div>
          <div class="small-text"><em>* Wajib diisi</em></div>
        </div>
        <input type="submit" value="{{ $block?->button_text ?? 'Kirim reservasi' }}" data-wait="Mohon tunggu..." class="primary-button w-button">
      </form>
      <div class="w-form-done">
        <div>Terima kasih! Pengiriman Anda telah kami terima.</div>
      </div>
      @if ($errors->any())
        <div class="w-form-fail" style="display:block">
          <div>{{ $errors->first() }}</div>
        </div>
      @else
        <div class="w-form-fail">
          <div>Ups! Terjadi kesalahan saat mengirim formulir.</div>
        </div>
      @endif
    </div>
  </div>
  @include('components.navbar')
</main>
@endsection
