<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = date('d');
        $b = $a + 1;
        $c = $b.'-'.date('M-Y');
        // date_sub($a, date_interval_create_from_date_string($b));

        dd($c);
        return view('frontend.ads.ads');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kategori = $request->input('kategori');
        $judul = $request->input('judul');
        $merk = $request->input('merk');
        $nama = $request->input('deskripsi');
        $harga = $request->input('harga');
        $link = $request->input('link');
        $anggaran = $request->input('anggaran');
        $durasi = $request->input('durasi');
        $metode = $request->input('metode');

        return array(
            $kategori,
            $judul,
            $merk,
            $nama,
            $harga,
            $link,
            $anggaran,
            $durasi,
            $metode
        );
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
