<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AdsController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('frontend/index');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/ads', [AdsController::class, 'index']);
Route::get('/member', [MemberController::class, 'index']);

// Route Authentication
Route::get('/login', 'App\Http\Controllers\AuthenticationLogin@tes')->name('AuthLogin');