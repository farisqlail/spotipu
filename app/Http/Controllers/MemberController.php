<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('frontend.member.member');
    }

    public function bayar()
    {

        return view('frontend.member.pembayaran');
    }

    public function invoice()
    {

        return view('frontend.member.invoice');
    }

    public function checkout()
    {

        return view('frontend.member.checkout');
    }

    public function konfirmasi()
    {

        return view('frontend.member.konfirmasi');
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
    public function store(Request $data)
    {
        $harga = 5000;
        // $harga = $data -> input($hrgPaket);
        $lama = $data->input('lama');
        $tgl = $data->input('tglbeli');
        $pbayar = $data->input('metodebayar');

        $totalbayar = $harga * $lama + 1000;
        $dateNow = date('d');
        $lamaMember = $dateNow + $lama;
        $hasilMember = $lamaMember . '-' . date('M-Y');

        // dd($totalbayar);
        return view('frontend.member.invoice', compact('harga', 'lama', 'hasilMember', 'tgl', 'pbayar', 'totalbayar'));
        // return array(
        //     $harga,
        //     $hasilMember,
        //     $tgl,
        //     $pbayar,
        //     $totalbayar
        // );

        // $datapembelian = new Bayar(); //nama Models
        // $printharga = $datapembelian-> cetakHarga($harga);
        // $printlama = $datapembelian->cetakLama($lama);
        // $printtgl = $datapembelian-> cetakTglbeli($tgl);
        // $printpbayar = $datapembelian-> cetakPbayar($pbayar);

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
