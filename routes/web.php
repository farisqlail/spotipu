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

Route::get('/artist', [ArtistController::class, 'index']);
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/album', [AlbumController::class, 'index']);


// Route Authentication
Route::get('/login', 'App\Http\Controllers\AuthenticationLogin@tes')->name('AuthLogin');