<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Transaction;
use App\Models\Bayar;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $member = Member::findOrFail($id);
// dd($member);
        return view('frontend.member.pembayaran', ['member' => $member]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Alert::success('Berhasil', 'Music berhasil ditambahkan');
        $admin = 1000;

        $paket = $request->get('paket');
        // $harga = $request->get('harga');
        // dd($member);
        // if ($member == 'Batagor') {
        //    $diskon = 10;
        //    $totalDiskon = (($diskon * $harga) / 100);
        //    $totalBayars = $harga - $totalDiskon + $admin;

        // } elseif($member == 'Klantink'){
        //     $diskon = 20;
        //     $totalDiskon = (($diskon * $harga) / 100);
        //     $totalBayars = $harga - $totalDiskon + $admin;
        // } else {
        //     $diskon = 5;
        //     $totalDiskon = (($diskon * $harga) / 100);
        //     $totalBayars = $harga - $totalDiskon + $admin;
        // }

        $dateNow = date('d');
        $lamaMember = $dateNow + $paket;
        
        if ($lamaMember > 31) {
            $lamaMember  = $lamaMember - 31;
            $bulan = date('m') + 1;
            $hasilMember = date('Y'). '-' . '0' . $bulan . '-' . '0' .$lamaMember;
            
        } else {
            $hasilMember = date('Y-m'). '-' .'0' .$lamaMember;
            // dd($hasilMember);
        }
        
        // dd($hasilMember);
        
        $transaction = new Transaction();


        $user           = $transaction->id_user = $request->get('id_user');
        $member         = $transaction->id_member = $request->get('id_member');
        $metode         = $transaction->method = $request->get('method');
        $tanggal        = $transaction->active = date('Y-m-d');
        $hasilMember    = $transaction->duedate = $hasilMember;
        $total          = $transaction->total = $request->get('total');

        

        // $metode = $request -> input('method');
        // $ppn = 0;

        // if($member == '1') {

        //     $ppn = 0.10;
        //     $totalAkhir = $total + ($total * $ppn);

        // } else if ($member == '2') {

        //     $ppn = 0.20;
        //     $totalAkhir = $total + ($total * $ppn);

        // }


        // $total = new Bayar();

        // $admin = 0;
        
        // if ($metode == "ovo") {
        //     // $hitung = $total->total($biayaIklan, $durasi);
        //     // $totalBayar = $hitung + ($hitung * 0.05);

        //     // dd($totalBayar);
        // } elseif($metode == "gopay") {
        //     // $admin = 5000;
        //     // $hitung = $total->total($biayaIklan, $durasi);
        //     // $totalBayar = $hitung + $admin;

        // }
        // elseif ($metode == "sopi") {
        //     // $cashback = 5000;
        //     // $hitung = $total -> total($biayaIklan, $durasi);
        //     // $totalBayar= $hitung - $cashback;

        // }
        // elseif ($metode == "dana") {
        //     // $admin = 10000;
        //     // $hitung = $total -> total($biayaIklan, $durasi);
        //     // $totalBayar= $hitung + $admin;
        // }

        $transaction->id_user = $request->get('id_user');
        $transaction->id_member = $request->get('id_member');
        $transaction->method = $request->get('method');
        $transaction->active = date('Y-m-d');
        $transaction->harga = $request->get('price');
        $transaction->duedate = $hasilMember;
        $transaction->total = $request->get('harga');

        // dd($transaction);
        $transaction->save();

        return redirect()->route('member.konfirmasi');
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
