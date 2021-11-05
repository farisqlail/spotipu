<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use App\Models\PaketCireng;
use App\Models\PaketTahubulat;
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

    public function indexCireng()
    {

        return view('frontend.memberCireng.pembayaran');
    }

    public function indexTahubulat()
    {

        return view('frontend.memberTahubulat.pembayaran');
    }

    public function bayar()
    {

        return view('frontend.member.pembayaran');
    }

    public function invoice()
    {

        return view('frontend.member.invoice');
    }

    public function invoiceCireng()
    {

        return view('frontend.memberCireng.invoice');
    }

    public function invoiceTahubulat()
    {

        return view('frontend.memberTahubulat.invoice');
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
        $admin = 1000;

        $lama = $data->input('lama');
        $tgl = $data->input('tglbeli');
        $pbayar = $data->input('metodebayar');

        $totalBayar = new Bayar();
        $totalBayars = $totalBayar->totalBayar($harga, $lama) + $admin;

        $dateNow = date('d');
        $lamaMember = $dateNow + $lama;
        $hasilMember = $lamaMember . '-' . date('M-Y');

        return view('frontend.member.invoice', compact('harga', 'admin', 'lama', 'hasilMember', 'tgl', 'pbayar', 'totalBayars'));
    }

    public function storeCireng(Request $data)
    {
        $harga = 5000;
        $admin = 1000;

        $ppn = '0%';
        $lama = $data->input('lama');
        $tgl = $data->input('tglbeli');
        $pbayar = $data->input('metodebayar');

        $totalBayar = new PaketCireng();


        if ($lama == '30') {
            $totalBayars = $totalBayar->totalBayar($harga, $lama) + $admin;
            $ppn = '10%';

            // $totalBayars = $totalBayars -> ppnsepuluh($totalBayars);

            $totalBayars = $totalBayars + ($totalBayars * 0.10);
        } elseif ($lama == '365') {
            $totalBayars = $totalBayar->totalBayar($harga, $lama) + $admin;

            // $totalBayars = $totalBayars -> ppnlima($totalBayars);
            $totalBayars = $totalBayars + ($totalBayars * 0.05);

            $ppn = '5%';
        } else {

            $totalBayars = $totalBayar->totalBayar($harga, $lama) + $admin;
        }



        $dateNow = date('d');
        $lamaMember = $dateNow + $lama;
        $hasilMember = $lamaMember . '-' . date('M-Y');

        return view('frontend.memberCireng.invoice', compact('ppn', 'harga', 'admin', 'lama', 'hasilMember', 'tgl', 'pbayar', 'totalBayars'));
    }


    public function storeTahuBulat(Request $data)
    {
        $harga = 5000;
        $admin = 1000;


        $lama = $data->input('lama');
        $tgl = $data->input('tglbeli');
        $pbayar = $data->input('metodebayar');

        $totalBayar = new PaketTahubulat();

        // PPN 
        if ($lama == '30') {

            $ppn = '20%';
            $totalBayars = $totalBayar->totalBayar($harga, $lama) + $admin;

            $totalBayars = $totalBayars->ppnduapuluh($totalBayars);
        } elseif ($lama == '365') {

            $ppn = '10%';
            $totalBayars = $totalBayar->totalBayar($harga, $lama) + $admin;

            $totalBayars = $totalBayars->ppnsepuluh($totalBayars);
        } else {
            $ppn = '0%';
            $totalBayars = $totalBayar->totalBayar($harga, $lama) + $admin;
        }

        $dateNow = date('d');
        $lamaMember = $dateNow + $lama;
        $hasilMember = $lamaMember . '-' . date('M-Y');

        return view('frontend.memberTahubulat.invoice', compact('ppn', 'harga', 'admin', 'lama', 'hasilMember', 'tgl', 'pbayar', 'totalBayars'));
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
