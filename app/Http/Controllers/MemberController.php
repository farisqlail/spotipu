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

    public function bayarTahu()
    {

        return view('frontend.member.pembayaran-tahu');
    }

    public function bayarKlantink()
    {

        return view('frontend.member.pembayaran-klantink');
    }

    public function bayarCireng()
    {

        return view('frontend.member.pembayaran-cireng');
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
    public function storeTahu(Request $request)
    {
        $harga = 90000;
        $admin = 1000;
        
        $lama = 30;
        $tgl = $request->input('tglbeli');
        $member = $request->input('member');
        $pbayar = $request->input('metodebayar');

        $totalBayar = new Bayar();

        if ($member == "Silver") {
            $diskon = 10;
            // $total = $totalBayar->totalBayar($harga, $lama);
            $totalDiskon = (($diskon * $harga) / 100);
            $totalBayars = $harga - $totalDiskon + $admin;

        } elseif ($member == "Platinum") {
            $diskon = 30;
            // $total = $totalBayar->totalBayar($harga, $lama);
            $totalDiskon = (($diskon * $harga) / 100);
            $totalBayars = $harga - $totalDiskon + $admin;

            // dd($totalBayars);
        }
        
        // dd($totalBayars);

        $dateNow = date('d');
        $lamaMember = $dateNow + $lama;
        $hasilMember = $lamaMember . '-' . date('M-Y');

        return view('frontend.member.invoice', compact('harga', 'admin','lama', 'hasilMember', 'tgl', 'pbayar', 'totalBayars'));

    }

    public function storeCireng(Request $request)
    {
        $harga = 50000;
        $admin = 1000;
        
        $lama = 30;
        $tgl = $request->input('tglbeli');
        $member = $request->input('member');
        $pbayar = $request->input('metodebayar');

        $totalBayar = new Bayar();

        if ($member == "Silver") {
            $diskon = 10;
            // $total = $totalBayar->totalBayar($harga, $lama);
            $totalDiskon = (($diskon * $harga) / 100);
            $totalBayars = $harga - $totalDiskon + $admin;

        } elseif ($member == "Platinum") {
            $diskon = 30;
            // $total = $totalBayar->totalBayar($harga, $lama);
            $totalDiskon = (($diskon * $harga) / 100) ;
            $totalBayars = $harga - $totalDiskon + $admin;

            // dd($totalBayars);
        }
        
        // dd($totalBayars);

        $dateNow = date('d');
        $lamaMember = $dateNow + $lama;
        $hasilMember = $lamaMember . '-' . date('M-Y');

        return view('frontend.member.invoice', compact('harga', 'admin','lama', 'hasilMember', 'tgl', 'pbayar', 'totalBayars'));

    }

    public function storeKlantink(Request $request)
    {
        $harga = 75000;
        $admin = 1000;
        
        $lama = 30;
        $tgl = $request->input('tglbeli');
        $member = $request->input('member');
        $pbayar = $request->input('metodebayar');

        $totalBayar = new Bayar();

        if ($member == "Silver") {
            $diskon = 10;
            // $total = $totalBayar->totalBayar($harga, $lama);
            $totalDiskon = (($diskon * $harga) / 100) ;
            $totalBayars = $harga - $totalDiskon+ $admin;

        } elseif ($member == "Platinum") {
            $diskon = 30;
            // $total = $totalBayar->totalBayar($harga, $lama);
            $totalDiskon = (($diskon * $harga) / 100);
            $totalBayars = $harga - $totalDiskon + $admin;

            // dd($totalBayars);
        } elseif($member == "Gold"){
            $diskon = 20;
            // $total = $totalBayar->totalBayar($harga, $lama);
            $totalDiskon = (($diskon * $harga) / 100);
            $totalBayars = $harga - $totalDiskon  + $admin;

        }
        
        // dd($totalBayars);

        $dateNow = date('d');
        $lamaMember = $dateNow + $lama;
        $hasilMember = $lamaMember . '-' . date('M-Y');

        return view('frontend.member.invoice', compact('harga', 'admin','lama', 'hasilMember', 'tgl', 'pbayar', 'totalBayars'));

    }

    public function store(Request $data)
    {
        $harga = 5000;
        $admin = 1000;
        
        $lama = $data->input('lama');
        $tgl = $data->input('tglbeli');
        $member = $data->input('member');
        $pbayar = $data->input('metodebayar');

        $totalBayar = new Bayar();

        if ($member == "Silver") {
            $diskon = 10;
            $total = $totalBayar->totalBayar($harga, $lama);
            $totalDiskon = (($diskon * $total) / 100);
            $totalBayars = $total - $totalDiskon + $admin;

        } elseif ($member == "Platinum") {  
            $diskon = 30;
            $total = $totalBayar->totalBayar($harga, $lama);
            $totalDiskon = (($diskon * $total) / 100) + $admin;
            $totalBayars = $total - $totalDiskon;

            // dd($totalBayars);
        }
        
        // dd($totalBayars);

        $dateNow = date('d');
        $lamaMember = $dateNow + $lama;
        $hasilMember = $lamaMember . '-' . date('M-Y');

        return view('frontend.member.invoice', compact('harga', 'admin','lama', 'hasilMember', 'tgl', 'pbayar', 'totalBayars'));

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
