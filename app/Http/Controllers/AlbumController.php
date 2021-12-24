<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Artis;
use App\Models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        return view('frontend.album.album');
    }

    public function admin($id){
        
        $artis = Artis::findOrFail($id);
        $album = Album::where('id_artis', $id)->get();

        return view('admin.album.index', ['album' => $album, 'artis' => $artis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $artis = Artis::findOrFail($id);

        return view('admin.album.create', ['artis' => $artis]);
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
            'name_album' => 'required',
            'description_album' => 'required',
            'cover' => 'required'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Berhasil', 'Album berhasil ditambahkan');

            $album = new Album();

            $album->id_artis = $request->get('id_artis');
            $album->name_album = $request->get('name_album');
            $album->description_album = $request->get('description_album');

            if($request->file('cover')){
                $file = $request->file('cover');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $album->cover = $filename;
                Storage::putFileAs("public/album/cover", $file, $filename);
            }
            // dd($music);
            $album->save();

            return redirect()->route('admin.album.index', $album->id_artis);
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
        $album = Album::findOrFail($id);

        return view('admin.album.edit', ['album' => $album]);
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
            'name_album' => 'required',
            'description_album' => 'required',
            'cover' => 'required'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Berhasil', 'Album berhasil diedit');

            $album = Album::findOrFail($id);

            $album->id_artis = $request->get('id_artis');
            $album->name_album = $request->get('name_album');
            $album->description_album = $request->get('description_album');

            if($request->file('cover')){
                $file = $request->file('cover');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $album->cover = $filename;
                Storage::putFileAs("public/album/cover", $file, $filename);
            }
            // dd($music);
            $album->save();

            return redirect()->route('admin.album.index', $album->id_artis);
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
        $album = Album::findOrFail($id);
        
        $album->delete();
        Storage::delete($album->image);

        return redirect()->back();
    }
}
