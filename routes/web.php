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
use App\Http\Controllers\PeringatanKeamananController;
use App\Http\Controllers\InfografisKeamananInformasiController;
use App\Http\Controllers\PeraturanKebijakanController;
use App\Http\Controllers\BeritaSiberController;
use App\Http\Controllers\StatistikHoneypotController;
use App\Http\Controllers\PanduanTeknisController;
use App\Http\Controllers\RFC2350Controller;
use App\Http\Controllers\Selengkapnya2Controller;
use App\Http\Controllers\Selengkapnya3Controller;
use App\Http\Controllers\Selengkapnya4Controller;
use App\Http\Controllers\Selengkapnya5Controller;
use App\Http\Controllers\GalleryController;

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
Route::get('/selengkapnya1', [Selengkapnya1Controller::class, 'index'])->name('selengkapnya1');
Route::get('/selengkapnya2', [Selengkapnya2Controller::class, 'index'])->name('selengkapnya2');
Route::get('/selengkapnya3', [Selengkapnya3Controller::class, 'index'])->name('selengkapnya3');
Route::get('/selengkapnya4', [Selengkapnya4Controller::class, 'index'])->name('selengkapnya4');
Route::get('/selengkapnya5', [Selengkapnya5Controller::class, 'index'])->name('selengkapnya5');
Route::get('/peringatan_keamanan',[PeringatanKeamananController::class, 'index'])->name('peringatan_keamanan');
Route::get('/infografis_keamanan_informasi',[InfografisKeamananInformasiController::class, 'index'])->name('infografis_keamanan_informasi');
Route::get('/peraturan_kebijakan',[PeraturanKebijakanController::class, 'index'])->name('peraturan_kebijakan');
Route::get('/berita_siber',[BeritaSiberController::class, 'index'])->name('berita_siber');
Route::get('/statistik_honeypot',[StatistikHoneypotController::class, 'index'])->name('statistik_honeypot');
Route::get('/panduan_teknis', [PanduanTeknisController::class, 'index'])->name('panduan_teknis');
Route::get('/rfc2350', [RFC2350Controller::class, 'index'])->name('rfc2350');
Route::post('/rfc2350',[RFC2350Controller::class, 'show'])->name('rfc2350');
Route::get('/gallery',[GalleryController::class, 'index'])->name('gallery');
