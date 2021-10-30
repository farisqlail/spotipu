@extends('layouts.app')

@section('title')
    Spotipu - Checkout
@endsection

@section('content')

    <h2 class="text-white"><b>Pesanan Kamu</b></h2>

    <div class="card mb-3" data-aos="fade-up" style="background-color: #2D3E50; border: none;">
        <div class="card-body">

            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/img/jam.png') }}" class="img-fluid" width="130" alt="">
                    </div>
                    <div class="col-md-8 align-self-center" align="left">
                        <h4 class="text-white">
                            Yeay! Pesananmu sedang diproses
                            Spotipu premium akan aktif setelah kamu melakukan pembayaran
                        </h4>
                    </div>
                </div>
            </div>

            <hr class="mt-5" style="background-color: #fff;">

            <div class="row">
                <div class="col-md-4 align-self-center">
                    <span>Bayar ke nomor virtual</span>
                    <input type="text" class="form-control mt-3" name="" id="" value="SPTP19478524614" disabled>
                </div>
                <div class="col-md-4 align-self-center" align="center">
                    <span class="text-white">atau scan</span>
                </div>
                <div class="col-md-4" align="center">
                    <img src="{{ asset('assets/img/scan.png') }}" class="img-fluid" width="150" alt="">
                </div>
            </div>


            <span>Batas pembayaran dilakukan maksimal 30 menit setelah pesan</span>

            <div class="button-checkout mt-5 mb-3" align="center">
                <a href="{{ route('member.konfirmasi', $id=1) }}" class="btn btn-lg btn-light hvr-shrink">Konfirmasi</a>
            </div>
        </div>
    </div>

    <a href="" class="text-white" data-aos="fade-up"><u>Kembali ke menu pembayaran</u></a>

@endsection
