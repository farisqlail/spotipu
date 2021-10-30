<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend/index');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/ads', [AdsController::class, 'index']);
Route::get('/member', [MemberController::class, 'index']);

Route::get('/pembayaran/{id}', [MemberController::class, 'bayar'])->name('member.bayar');
Route::get('/pembayaran/invoice/{id}', [MemberController::class, 'invoice'])->name('member.pembayaran');
Route::get('/pembayaran/checkout/{id}', [MemberController::class, 'checkout'])->name('member.checkout');
Route::get('/pembayaran/konfirmasi/{id}', [MemberController::class, 'konfirmasi'])->name('member.konfirmasi');

Route::get('/artist', [ArtistController::class, 'index']);
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/album', [AlbumController::class, 'index']);


// Route Authentication

//Route Login
Route::get('/login', function () {
    return view('authentication/login');
});

//Route Register
Route::get('/register', function () {
    return view('authentication/register');
});