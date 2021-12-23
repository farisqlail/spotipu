<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Music;
use App\Models\Artis;
use App\Models\Genre;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $music = Music::all();

        // return view('admin.music.index', ['music' => $music]);
    }

    public function admin(){

        $music = Music::all();

        return view('admin.music.index', ['music' => $music]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::all();
        $artis = Artis::all();

        return view('admin.music.create', ['genre' => $genre, 'artis' => $artis]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'name_music' => 'required',
            'description_music' => 'required',
            'music' => 'required',
            'menit' => 'required'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Berhasil', 'Artis berhasil ditambahkan');

            $music = new Artis();

            $music->id_artis = $request->get('id_artis');
            $music->id_genre = $request->get('id_genre');
            $music->name_music = $request->get('name_music');
            $music->description_music = $request->get('description_music');
            $music->menit = $request->get('menit');

            if($request->file('musc')){
                $file = $request->file('musc');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $music->musc = $filename;
                Storage::putFileAs("public/music", $file, $filename);
            }
            
            $music->save();

            return redirect()->route('admin.artist.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
