<?php

use App\Http\Controllers\LanguageController;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Language switching
Route::get('/language/{language}', [LanguageController::class, 'switch'])->name('language.switch');

// Halaman depan = start.html (tabs penawaran + judul Tugas), Bahasa Indonesia
Route::get('/', function () {
    session(['current_task' => 1]);

    return view('start');
})->name('home');

// Halaman selamat datang (index.html referensi)
Route::get('/beranda', function () {
    return view('index');
})->name('beranda');

// Main pages
Route::get('/offres', function () {
    return view('offers');
})->name('offers');

Route::get('/prix', function () {
    return view('prices');
})->name('prices');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', function () {
    return view('contact');
})->name('contact.submit');

// Halaman pembuka tugas (start.html) - sekarang menjadi halaman depan
Route::get('/mulai', function () {
    return redirect()->route('home');
})->name('task.start');

// Alur tugas 1 / 2 (aufgabe.html, task-01, task-02) - tidak ada tugas 3
// Pernyataan tugas (aufgabe.html) - dibuka dari tombol hijau "Tugas"
// diikuti task saat ini (berpindah site seperti fra01->fra02 di referensi)
Route::get('/tugas', function () {
    $keys = [1 => 'tugas_1_pernyataan', 2 => 'tugas_2_pernyataan', 3 => 'tugas_3_pernyataan'];
    $pageKey = $keys[(int) session('current_task', 1)] ?? 'tugas_1_pernyataan';

    return view('task-statement', compact('pageKey'));
})->name('task.statement');

Route::get('/tache', function () {
    session(['current_task' => 1]);

    return view('task', ['pageKey' => 'tugas_1']);
})->name('task');

Route::get('/tache/cancel', function () {
    session(['current_task' => 1]);

    return view('task-cancel', ['pageKey' => 'tugas_1_batal']);
})->name('task.cancel');

Route::get('/tache/2', function () {
    session(['current_task' => 2]);

    return view('task', ['pageKey' => 'tugas_2']);
})->name('task.2');

Route::get('/tache/2/cancel', function () {
    session(['current_task' => 2]);

    return view('task-cancel', ['pageKey' => 'tugas_2_batal']);
})->name('task.2.cancel');

Route::get('/tache/2/selesai', function () {
    session(['current_task' => 2]);

    return view('task-end', ['pageKey' => 'tugas_2_selesai']);
})->name('task.2.end');

Route::get('/tache/3', function () {
    session(['current_task' => 3]);

    return view('task', ['pageKey' => 'tugas_3']);
})->name('task.3');

Route::get('/tache/3/cancel', function () {
    session(['current_task' => 3]);

    return view('task-cancel', ['pageKey' => 'tugas_3_batal']);
})->name('task.3.cancel');

Route::get('/tache/3/selesai', function () {
    session(['current_task' => 3]);

    return view('task-end', ['pageKey' => 'tugas_3_selesai']);
})->name('task.3.end');

Route::get('/tache/selesai', function () {
    session(['current_task' => 1]);

    return view('task-end', ['pageKey' => 'tugas_selesai']);
})->name('task.end');

// Kembali ke pengujian (back-to-unipark.html)
Route::get('/kembali', function () {
    return view('back');
})->name('task.back');

// Halaman placeholder aksi yang belum tersedia (no-way.html)
Route::get('/tidak-tersedia', function () {
    return view('no-way');
})->name('no.way');

// Reservasi (angebote-2/reservation-geburtstagsfeier.html)
Route::get('/reservasi', function () {
    return view('reservation');
})->name('reservation');

Route::post('/reservasi', function (Request $request) {
    $data = $request->validate([
        'people_count' => ['required', 'integer', 'min:2', 'max:8'],
        'reservation_date' => ['required', 'date', 'after_or_equal:today'],
        'reservation_time' => ['required', 'string', 'max:20'],
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'phone_code' => ['required', 'string', 'max:10'],
        'phone' => ['required', 'string', 'max:30'],
        'comment' => ['nullable', 'string', 'max:5000'],
    ]);

    Reservation::create($data);

    return redirect()->route('reservation', ['success' => 1]);
})->name('reservation.submit');

// Angebote (Offers) sub-pages
Route::get('/angebote/hallenbad', function () {
    return view('angebote-hallenbad');
})->name('angebote-hallenbad');

Route::get('/angebote/sauna', function () {
    return view('angebote-sauna');
})->name('angebote-sauna');

Route::get('/angebote/minigolf', function () {
    return view('angebote-minigolf');
})->name('angebote-minigolf');

Route::get('/angebote/bowling', function () {
    return view('angebote-bowling');
})->name('angebote-bowling');

Route::get('/angebote/geburtstag', function () {
    return view('angebote-birthday');
})->name('angebote-birthday');

Route::get('/angebote/restaurant', function () {
    return view('angebote-restaurant');
})->name('angebote-restaurant');
