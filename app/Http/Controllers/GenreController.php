<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use App\Models\Genre;
use App\Models\Member;
use App\Models\Music;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genre = Genre::all();
        $member = Member::all();

        return view('frontend.genres.genre', [
            'genre' => $genre,
            'member' => $member
        ]);
    }

    public function admin(){

        $genre = Genre::all();

        return view('admin.genre.index', ['genre' => $genre]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.genre.create');
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
            'name_genre' => 'required',
            'cover_genre' => 'required'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Berhasil', 'Berhasil menambahkan genre');

            $genre = new Genre();

            $genre->name_genre = $request->get('name_genre');
            if($request->file('cover_genre')){
                $file = $request->file('cover_genre');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $genre->cover_genre = $filename;
                Storage::putFileAs("public/genre/cover", $file, $filename);
            }
            // dd($genre);
            $genre->save();

            return redirect()->route('admin.genre.index');
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
        $music = Music::join('artis', 'artis.id', '=', 'music.id_artis')
                    ->join('genres', 'genres.id', '=', 'music.id_genre')
                    ->where('id_genre', $id)
                    ->get();
        // dd($music);

        return view('frontend.genres.genre-show', ['music' => $music]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $genre = Genre::findOrFail($id);

        return view('admin.genre.edit', ['genre' => $genre]);
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
        $validator = Validator::make(request()->all(), [
            'name_genre' => 'required',
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Berhasil', 'Berhasil mengubah genre');

            $genre = Genre::findOrFail($id);
            $genre->name_genre = $request->get('name_genre');
            if($request->file('cover_genre')){
                $file = $request->file('cover_genre');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $genre->cover_genre = $filename;
                Storage::putFileAs("public/genre/cover", $file, $filename);
            }

            $genre->save();

            return redirect()->route('admin.genre.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return redirect()->back();
    }
}
