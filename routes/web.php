<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\KontakKamiController;
use App\Http\Controllers\LaporInsidenSiberController;
use App\Http\Controllers\IndexBeritaController;
use App\Http\Controllers\Selengkapnya1Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', [HomeController::class, 'index'])->name('welcome');
Route::get('profil', [ProfilController::class, 'index'])->name('profil');
Route::get('event',[EventController::class, 'index'])->name('event');
Route::get('publikasi',[PublikasiController::class, 'index'])->name('publikasi');
Route::get('lapor_insiden_siber', [LaporInsidenSiberController::class, 'index'])->name('lapor_insiden_siber');
Route::get('kontak_kami',[KontakKamiController::class, 'index'])->name('kontak_kami');
Route::get('/index_berita', [IndexBeritaController::class, 'index'])->name('index_berita');
Route::get('/selengkapnya', [Selengkapnya1Controller::class, 'index'])->name('selengkapnya');