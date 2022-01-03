<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Music;
use App\Models\Artis;
use App\Models\Genre;
use App\Models\Album;

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

    public function admin($id){

        $artis = Artis::findOrFail($id);
        $album = Album::where('id_artis', $id)->get();
        $music = Music::join('genres', 'genres.id', '=', 'music.id_genre')->where('id_artis', $id)->get();
// dd($music);
        return view('admin.music.index', ['music' => $music, 'artis' => $artis, 'album' => $album]);
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $music = Music::where('name_music', 'like', "%" . $search)
            ->paginate();

        return view('frontend.music.search', ['music' => $music]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $genre = Genre::all();
        $artis = Artis::findOrFail($id);

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
            'cover_music' => 'required',
            'menit' => 'required'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Berhasil', 'Music berhasil ditambahkan');

            $music = new Music();

            $music->id_artis = $request->get('id_artis');
            $music->id_genre = $request->get('id_genre');
            $music->name_music = $request->get('name_music');
            $music->description_music = $request->get('description_music');
            $music->menit = $request->get('menit');

            if($request->file('music')){
                $file = $request->file('music');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $music->music = $filename;
                Storage::putFileAs("public/music", $file, $filename);
            }

            if($request->file('cover_music')){
                $file = $request->file('cover_music');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $music->cover_music = $filename;
                Storage::putFileAs("public/music/cover", $file, $filename);
            }
            // dd($music);
            $music->save();

            return redirect()->route('admin.music.index', $music->id_artis);
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
        $genre = Genre::all();
        $music = Music::findOrFail($id);

        return view('admin.music.edit', ['genre' => $genre, 'music' => $music]);
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
            'name_music' => 'required',
            'description_music' => 'required',
            'music' => 'required',
            'cover' => 'required',
            'menit' => 'required'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Berhasil', 'Music berhasil ditambahkan');

            $music = Music::findOrfail($id);

            $music->id_artis = $request->get('id_artis');
            $music->id_genre = $request->get('id_genre');
            $music->name_music = $request->get('name_music');
            $music->description_music = $request->get('description_music');
            $music->menit = $request->get('menit');

            if($request->file('music')){
                $file = $request->file('music');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $music->music = $filename;
                Storage::putFileAs("public/music", $file, $filename);
            }

            if($request->file('cover_music')){
                $file = $request->file('cover_music');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $music->cover_music = $filename;
                Storage::putFileAs("public/music/cover", $file, $filename);
            }
            // dd($music);
            $music->save();

            return redirect()->route('admin.music.index', $music->id_artis);
        }
    }

    public function tambahAlbum(Request $request, $id){

        $validator = Validator::make(request()->all(), [
            'id_album' => 'required',
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Berhasil', 'Music berhasil ditambahkan ke album');

            $music = Music::findOrfail($id);

            $music->id_album = $request->get('id_album');

            // dd($music);
            $music->save();

            return redirect()->route('admin.music.index', $music->id_artis);
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
        $music = Music::findOrFail($id);
        
        $music->delete();
        Storage::delete($music->image);

        return redirect()->back();
    }
}
