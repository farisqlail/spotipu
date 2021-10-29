@extends('layouts.app')

@section('title')
Spotipu - Bayar Member
@endsection

@section('content')
<div class="judul" align="center" style="color: #ffff;">
    <h2><b>Paket kamu</b></h2>
</div>
<form action="POST">
<div class="card-form" align= "center">
    
       <div class="cardpaket" align="left"> 
        <div class="textcard text-white">
         <h4><b>Spotipu Premium Batagor</b></h4>
        <h6>1 Akun premium</h6>
        <hr style="background-color: #ffff;">
        </div>
        
        <div class="row text-white">
            <div class="col-md-6">
                <p>Harga</p>
            </div>
            <div class="col-md-6">
                <p>Rp 5000</p>
            </div>
        </div>

        <div class="row text-white">
            <div class="col-md-6">
                <p>Lama</p>
            </div>
            <div class="col-md-6">
                <input type="text" name="lama" placeholder="3 hari">
            </div>
        </div>

        <div class="row text-white">
            <div class="col-md-6">
                <p>Tanggal Pembelian</p>
            </div>
            <div class="col-md-6">
                <input type="date" name="tglbeli" id="">
            </div>
        </div>


    </div>
    <div class="metodebayar mt-5" align="center" >
        <h4 style="color: #2D3E50"><b>Pilih Metode Pembayaran</b></h4>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                    <div class="card-image">
                      {{-- <img src="{{ asset('assets/img/gopay.png') }}">   --}}
                    </div>
                </div>
                
            </div>
            <div class="col-md-6"></div>
        </div>

    </div> 

    </form>
    </div>
@endsection