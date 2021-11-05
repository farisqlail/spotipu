<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend/index');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/member', [MemberController::class, 'index'])->name('member.index');

Route::get('/pembayaran', [MemberController::class, 'bayar'])->name('member.pembayaran');
Route::get('/pembayaran-tahu', [MemberController::class, 'bayarTahu'])->name('member.pembayaran.tahu');
Route::get('/pembayaran-klantink', [MemberController::class, 'bayarKlantink'])->name('member.pembayaran.klantink');
Route::get('/pembayaran-cireng', [MemberController::class, 'bayarCireng'])->name('member.pembayaran.cireng');


Route::post('/pembayaran-store', [MemberController::class, 'store'])->name('member.store');
Route::post('/pembayaran-tahu-store', [MemberController::class, 'storeTahu'])->name('member.store.tahu');
Route::post('/pembayaran-klantink-store', [MemberController::class, 'storeKlantink'])->name('member.store.klantink');
Route::post('/pembayaran-cireng-store', [MemberController::class, 'storeCireng'])->name('member.store.cireng');


Route::get('/pembayaran/invoice', [MemberController::class, 'invoice'])->name('member.invoice');
Route::get('/pembayaran/checkout', [MemberController::class, 'checkout'])->name('member.checkout');
Route::get('/pembayaran/konfirmasi', [MemberController::class, 'konfirmasi'])->name('member.konfirmasi');

Route::get('/artist', [ArtistController::class, 'index']);
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/album', [AlbumController::class, 'index']);
Route::get('/player/{id}', [PlayerController::class, 'index'])->name('player.index');

// Route Authentication

    // Route Login
Route::get('/login', function () {
    return view('authentication/login', [
        "title" => 'Login'
    ]);
});

    //Route Register
Route::get('/register', function () {
    return view('authentication/register', [
        "title" => 'Register'
    ]);
});


// Route Pasang Iklan
Route::get('/ads', [AdsController::class, 'index']);
Route::post('/ads-store', [AdsController::class, 'store'])->name('ads.store');

// Route::get('/ads/invoiceIklan', [AddsController::class, 'invoiceIklan']);

    // Route Untuk sementara 
// Route::get('/invoiceAds', function () {
//     return view('frontend/ads/invoidAds', [
//         "title" => 'Invoice Ads'
//     ]);
// });

Route::get('/ads-store/transdone', function () {
    return view('frontend/ads/transiklandone', [
        "title" => 'Invoice Ads'
    ]);
});