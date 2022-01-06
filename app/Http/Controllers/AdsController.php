<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{

    public function __construct()
    {
        $ads = new Ads();
        // dd($ads);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = date('d');
        $b = $a + 1;
        $c = $b . '-' . date('M-Y');
        // date_sub($a, date_interval_create_from_date_string($b));

        // dd($c);
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
    
        $kategori = $request->input('kategori');
        $judul = $request->input('judul');
        $merk = $request->input('merk');
        $namaProduk = $request->input('namaProduk');
        $deskripsi = $request->input('deskripsi');
        $hargaProduk = $request->input('hargaProduk');
        $link = $request->input('link');
        $durasi = $request->input('durasi');
        $metode = $request->input('metode');



        $total = new ads();
<<<<<<< HEAD
        $admin = 0;
        
        if ($metode == "ovo") {
            $hitung = $total->total($biayaIklan, $durasi);
            $totalBayar = $hitung - ($hitung * 0.05);

            // dd($totalBayar);
        } elseif($metode == "gopay") {
            $admin = 5000;
            $hitung = $total->total($biayaIklan, $durasi);
            $totalBayar = $hitung + $admin;

        }
        elseif ($metode == "sopi") {
            $cashback = 5000;
            $hitung = $total -> total($biayaIklan, $durasi);
            $totalBayar= $hitung - $cashback;

        }
        elseif ($metode == "dana") {
            $admin = 10000;
            $hitung = $total -> total($biayaIklan, $durasi);
            $totalBayar= $hitung + $admin;

        }
        
      

        return view('frontend.ads.invoidAds', compact('biayaIklan', 'admin', 'kategori', 'judul', 'merk','namaProduk', 'deskripsi', 'hargaProduk', 'link', 'durasi', 'metode', 'totalBayar'));
=======
        $total = $total->total($biayaIklan, $durasi) + $admin;

        return view('frontend.ads.invoidAds', compact('biayaIklan', 'admin',  'kategori', 'judul', 'merk', 'namaProduk', 'deskripsi', 'hargaProduk', 'link', 'durasi', 'metode', 'total'));
    }

    public function create(Request $request)
    {
        DB::table('ads')->insert([

            // 'id'                    => $request -> id_iklan,
            'kategori_produk'       => $request -> kategori,
            'judul_iklan'           => $request -> judul,
            'merk'                  => $request -> merk,
            'nama_produk'           => $request -> namaProduk,
            'deskripsi_produk'      => $request -> deskripsi,
            'harga'                 => $request -> hargaProduk,
            'link_website'          => $request -> link,
            'gambar_produk'         => $request -> gambarProduk,
            'durasi'                => $request -> durasi,
            'metode_pembayaran'     => $request -> metode
>>>>>>> 906dc556a9eb88adc1d872dedcc9000472a50632


        ]);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $iklan = DB::table('ads')->get();

        return view('admin.iklan.index', ['iklan' => $iklan]);
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
