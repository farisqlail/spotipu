<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\MusicController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// Route::get('/', function () {
//     return view('frontend/index');
// });


Route::get('/', [HomeController::class, 'index'])->name('frontend.index');

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [HomeController::class, 'admin'])->name('admin.index');
});

// Route::get('/', [HomeController::class, 'index']);
Route::prefix('/member')->group(function () {
    Route::get('/', [MemberController::class, 'index'])->name('member.index');
    Route::get('/admin/member', [MemberController::class, 'admin'])->name('admin.member.index');
    Route::get('/admin/tambah/', [MemberController::class, 'create'])->name('admin.member.create');
    Route::post('/admin/tambah', [MemberController::class, 'store'])->name('admin.member.store');
    Route::get('/admin/edit/{id}', [MemberController::class, 'edit'])->name('admin.member.edit');
    Route::patch('/admin/edit/{id}', [MemberController::class, 'update'])->name('admin.member.update');
    Route::get('/admin/delete/{id}', [MemberController::class, 'destroy'])->name('admin.member.delete');
});

// Route pembayaran
Route::prefix('/pembayaran')->group(function () {
    Route::get('/', [MemberController::class, 'bayar'])->name('member.pembayaran');
    Route::post('/pembayaran-store', [MemberController::class, 'store'])->name('member.store');
    Route::get('/pembayaran/invoice', [MemberController::class, 'invoice'])->name('member.invoice');
    Route::get('/pembayaran/checkout', [MemberController::class, 'checkout'])->name('member.checkout');
    Route::get('/pembayaran/konfirmasi', [MemberController::class, 'konfirmasi'])->name('member.konfirmasi');
});

// Route Artist
Route::prefix('/artist')->group(function () {
    Route::get('/', [ArtistController::class, 'index']);
    Route::get('/artist/{id}', [ArtistController::class, 'show'])->name('artist.show');
    
    Route::get('/admin/artist', [ArtistController::class, 'admin'])->name('admin.artist.index');
    Route::get('/admin/tambah/', [ArtistController::class, 'create'])->name('admin.artist.create');
    Route::post('/admin/tambah', [ArtistController::class, 'store'])->name('admin.artist.store');
    Route::get('/admin/edit/{id}', [ArtistController::class, 'edit'])->name('admin.artist.edit');
    Route::patch('/admin/edit/{id}', [ArtistController::class, 'update'])->name('admin.artist.update');
    Route::get('/admin/delete/{id}', [ArtistController::class, 'destroy'])->name('admin.artist.delete');

    Route::get('/admin/music/{id}', [MusicController::class, 'admin'])->name('admin.music.index');
    Route::get('/admin/music/tambah/{id}', [MusicController::class, 'create'])->name('admin.music.create');
    Route::post('/admin/music/tambah', [MusicController::class, 'store'])->name('admin.music.store');
    Route::get('/admin/music/edit/{id}', [MusicController::class, 'edit'])->name('admin.music.edit');
    Route::patch('/admin/music/edit/{id}', [MusicController::class, 'update'])->name('admin.music.update');
    Route::patch('/admin/music/album/{id}', [MusicController::class, 'tambahAlbum'])->name('admin.music.album');
    Route::get('/admin/music/delete/{id}', [MusicController::class, 'destroy'])->name('admin.music.delete');

    Route::get('/admin/album/{id}', [AlbumController::class, 'admin'])->name('admin.album.index');
    Route::get('/admin/album/tambah/{id}', [AlbumController::class, 'create'])->name('admin.album.create');
    Route::post('/admin/album/tambah', [AlbumController::class, 'store'])->name('admin.album.store');
    Route::get('/admin/album/edit/{id}', [AlbumController::class, 'edit'])->name('admin.album.edit');
    Route::patch('/admin/album/edit/{id}', [AlbumController::class, 'update'])->name('admin.album.update');
    Route::get('/admin/album/delete/{id}', [AlbumController::class, 'destroy'])->name('admin.album.delete');
});

// Route Genre
Route::prefix('/genre')->group(function () {
    Route::get('/', [GenreController::class, 'index']);
    Route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');

    Route::get('/admin/genre', [GenreController::class, 'admin'])->name('admin.genre.index');
    Route::get('/admin/tambah/', [GenreController::class, 'create'])->name('admin.genre.create');
    Route::post('/admin/tambah', [GenreController::class, 'store'])->name('admin.genre.store');
    Route::get('/admin/edit/{id}', [GenreController::class, 'edit'])->name('admin.genre.edit');
    Route::patch('/admin/edit/{id}', [GenreController::class, 'update'])->name('admin.genre.update');
    Route::get('/admin/delete/{id}', [GenreController::class, 'destroy'])->name('admin.genre.delete');
});


// Route album
Route::prefix('/album')->group(function () {
    Route::get('/', [AlbumController::class, 'index']);
    Route::get('/album/{id}', [AlbumController::class, 'show'])->name('album.show');
});


// Rpute Player
Route::prefix('/player')->group(function () {
    Route::get('/player/{id}', [PlayerController::class, 'index'])->name('player.index');
});


// Route Ads (iklan)
Route::prefix('/ads')->group(function () {
    Route::get('/', [AdsController::class, 'index']);
    // Route::post('/ads-store', [AdsController::class, 'store'])->name('ads.store');
    Route::post('/ads/create', [AdsController::class, 'create']) -> name('ads.create');

    Route::get('/admin/ads', [AdsController::class, 'admin'])->name('admin.ads.show');
    
});

//Route Music
Route::prefix('/music')->group(function () {
    Route::get('/', [MusicController::class, 'index']);
    Route::get('/music/search', [MusicController::class, 'search'])->name('music.search');
});


// Route Invoice
Route::get('/ads-store/transdone', function () {
    return view('frontend/ads/transiklandone', [
        "title" => 'Invoice Ads'
    ]);
});

// Route Pasang Iklans
// Route::get('/ads', [AdsController::class, 'index']);
// Route::post('/ads-store', [AdsController::class, 'store'])->name('ads.store');

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




// Route::get('/ads/invoiceIklan', [AddsController::class, 'invoiceIklan']);

// Route Untuk sementara 
// Route::get('/invoiceAds', function () {
//     return view('frontend/ads/invoidAds', [
//         "title" => 'Invoice Ads'
//     ]);
// });




// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
