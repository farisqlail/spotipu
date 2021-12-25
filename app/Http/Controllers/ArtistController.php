<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artis;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('frontend.artist.artist');
    }

    public function admin(){

        $artis = Artis::all();

        // dd($artis);

        return view('admin.artis.index', ['artis' => $artis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artis.create');
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
            'name_artis' => 'required',
            'description_artis' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {

            Alert::success('Berhasil', 'Artis berhasil ditambahkan');

            $artis = new Artis();
            $artis->name_artis = $request->get('name_artis');
            $artis->description_artis = $request->get('description_artis');
            if($request->file('image')){
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $artis->image = $filename;
                Storage::putFileAs("public/image/artis", $file, $filename);
            }
// dd($artis);
            $artis->save();

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
        $artis = Artis::findOrFail($id);

        return view('admin.artis.edit', ['artis' => $artis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Artis $artis)
    {
        if ($artis->image) {
            Storage::delete($artis->image);
        }
        
        $validator = Validator::make(request()->all(), [
            'name_artis' => 'required',
            'description_artis' => 'required',
            'image' => 'required'
        ]);

        if ($validator->fails()) {
            dd($validator->errors());
            return back()->withErrors($validator->errors());
        } else {
          
            Alert::success('Berhasil', 'Artis berhasil diubah');

            $artis = Artis::findOrFail($id);

            $artis->name_artis = $request->get('name_artis');
            $artis->description_artis = $request->get('description_artis');
            if($request->file('image')){
                $file = $request->file('image');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $artis->image = $filename;
                Storage::putFileAs("public/image/artis", $file, $filename);
            }

            $artis->save();

            return redirect()->route('admin.artist.index');
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
        $artis = Artis::findOrFail($id);
        $artis->delete();
        Storage::delete($artis->image);

        return redirect()->back();
        
    }
}
