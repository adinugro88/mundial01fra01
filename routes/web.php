<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

// Language switching
Route::get('/language/{language}', [LanguageController::class, 'switch'])->name('language.switch');

// Home page
Route::get('/', function () {
    return view('index');
})->name('home');

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

Route::get('/tache', function () {
    return view('task');
})->name('task');

Route::get('/tache/cancel', function () {
    return view('layout');
})->name('task.cancel');

// Angebote (Offers) sub-pages
Route::get('/angebote/hallenbad', function () {
    return view('angebote', [
        'page_title' => 'Piscine'
    ]);
})->name('angebote-hallenbad');

Route::get('/angebote/sauna', function () {
    return view('angebote', [
        'page_title' => 'Sauna'
    ]);
})->name('angebote-sauna');

Route::get('/angebote/minigolf', function () {
    return view('angebote', [
        'page_title' => 'Minigolf'
    ]);
})->name('angebote-minigolf');

Route::get('/angebote/bowling', function () {
    return view('angebote', [
        'page_title' => 'Bowling'
    ]);
})->name('angebote-bowling');

Route::get('/angebote/geburtstag', function () {
    return view('angebote', [
        'page_title' => 'Fête d\'anniversaire'
    ]);
})->name('angebote-birthday');

Route::get('/angebote/restaurant', function () {
    return view('angebote', [
        'page_title' => 'Restaurant'
    ]);
})->name('angebote-restaurant');


