<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use SebastianBergmann\CodeCoverage\Report\Xml\Total;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.ads.ads');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function invoiceIklan()
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
        $biayaIklan = 10000;
        $admin      = 2000;

        $kategori = $request->input('kategori');
        $judul = $request->input('judul');
        $merk = $request->input('merk');
        $namaProduk = $request->input('namaProduk');
        $deskripsi = $request->input('deskripsi');
        $hargaProduk = $request->input('hargaProduk');
        $link = $request->input('link');
        // $anggaran = $request->input('anggaran');
        $durasi = $request->input('durasi');
        $metode = $request->input('metode');

        // $total = $biayaIklan * $durasi + $admin;

        $total = new ads();

        // $total -> total($biayaIklan, $durasi);

        $total = $total -> total($biayaIklan, $durasi) + $admin;

        // $totals = $total + $admin;

        return view('frontend.ads.invoidAds', compact('biayaIklan','admin',  'kategori', 'judul', 'merk','namaProduk', 'deskripsi', 'hargaProduk', 'link', 'durasi', 'metode', 'total'));

        // return array(
        //     $kategori,
        //     $judul,
        //     $merk,
        //     $nama,
        //     $harga,
        //     $link,
        //     $anggaran,
        //     $durasi,
        //     $metode
        // );
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
