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

// Member Batagor
Route::get('/member', [MemberController::class, 'index'])->name('member.index');
Route::get('/pembayaran', [MemberController::class, 'bayar'])->name('member.pembayaran');
Route::post('/pembayaran-store', [MemberController::class, 'store'])->name('member.store');
Route::get('/pembayaran/invoice', [MemberController::class, 'invoice'])->name('member.invoice');
Route::get('/pembayaran/checkout', [MemberController::class, 'checkout'])->name('member.checkout');
Route::get('/pembayaran/konfirmasi', [MemberController::class, 'konfirmasi'])->name('member.konfirmasi');

// Member Cireng
Route::get('/memberCireng', [MemberController::class, 'indexCireng'])->name('member.indexCireng');
Route::post('/memberCireng-storeCireng', [MemberController::class, 'storeCireng'])->name('member.storeCireng');
Route::get('/memberCireng/invoice', [MemberController::class, 'invoiceCireng'])->name('member.invoiceCireng');

// Member Tahu Bulat
Route::get('/memberTahubulat', [MemberController::class, 'indexTahubulat'])->name('member.indexTahubulat');
Route::post('/memberTahubulat-storeTahubulat', [MemberController::class, 'storeTahubulat'])->name('member.storeTahubulat');
Route::get('/memberTahubulat/invoice', [MemberController::class, 'invoiceTahubulat'])->name('member.invoiceTahubulat');


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


// Route Pasang Iklans
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
