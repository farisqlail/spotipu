<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index() {

        return view('frontend.genres.genre');
    }
}