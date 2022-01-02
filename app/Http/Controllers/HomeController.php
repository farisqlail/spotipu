<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artis;
use App\Models\Genre;
use App\Models\Music;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $artis = Artis::take(7)->get();
        $genre = Genre::take(6)->get();
        $music = Music::join('artis', 'artis.id', '=', 'music.id_artis')
                ->take(3)
                ->get();

        return view('frontend.index', ['artis' => $artis, 'genre' => $genre, 'music' => $music]);
    }

    public function admin(){

        return view('admin.index');
    }
}
