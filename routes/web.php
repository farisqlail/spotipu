<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PlayerController;
use App\Models\Artis;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('frontend/index');
});


Route::get('/home', [HomeController::class, 'index'])->name('frontend.index');

Route::prefix('/admin')->group(function () {
    Route::get('/', [HomeController::class, 'admin'])->name('admin.index');
});

// Route::get('/', [HomeController::class, 'index']);
Route::prefix('/member')->group(function () {
    Route::get('/', [MemberController::class, 'index'])->name('member.index');
});

// Route pembayaran
Route::prefix('/pembayaran')->group(function () {
    Route::get('/', [MemberController::class, 'bayar'])->name('member.pembayaran');
    Route::post('/pembayaran-store', [MemberController::class, 'store'])->name('member.store');
    Route::get('/pembayaran/invoice', [MemberController::class, 'invoice'])->name('member.invoice');
    Route::get('/pembayaran/checkout', [MemberController::class, 'checkout'])->name('member.checkout');
    Route::get('/pembayaran/konfirmasi', [MemberController::class, 'konfirmasi'])->name('member.konfirmasi');
});

Route::prefix('/artist')->group(function () {
    Route::get('/', [ArtistController::class, 'index']);
    Route::get('/admin/artist', [ArtistController::class, 'admin'])->name('admin.artist.index');
    Route::get('/admin/tambah/', [ArtistController::class, 'create'])->name('admin.artist.create');
    Route::post('/admin/tambah', [ArtistController::class, 'store'])->name('admin.artist.store');
    Route::get('/admin/edit/{id}', [ArtistController::class, 'edit'])->name('admin.artist.edit');
    Route::patch('/admin/edit/{id}', [ArtistController::class, 'update'])->name('admin.artist.update');
    Route::get('/admin/delete/{id}', [ArtistController::class, 'destroy'])->name('admin.artist.delete');
});

Route::prefix('/genre')->group(function () {
    Route::get('/', [GenreController::class, 'index']);
});

Route::prefix('/album')->group(function () {
    Route::get('/', [AlbumController::class, 'index']);
});

Route::prefix('/player')->group(function () {
    Route::get('/player/{id}', [PlayerController::class, 'index'])->name('player.index');
});

Route::prefix('/ads')->group(function () {
    Route::get('/', [AdsController::class, 'index']);
    Route::post('/ads-store', [AdsController::class, 'store'])->name('ads.store');
});


// Route Login
// Route::get('/login', function () {
//     return view('authentication/login', [
//         "title" => 'Login'
//     ]);
// });

// //Route Register
// Route::get('/register', function () {
//     return view('authentication/register', [
//         "title" => 'Register'
//     ]);
// });


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


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
