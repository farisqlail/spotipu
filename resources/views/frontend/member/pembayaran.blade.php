@extends('layouts.app')

@section('title')
Spotipu - Bayar Member
@endsection

@section('content')
<div class="judul" align="center" style="color: #ffff;">
    <h2><b>Paket kamu</b></h2>
</div>
<form action="POST">
    <div class="card-form" data-aos="fade-up" align="center">

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

            <div class="row text-white mt-2">
                <div class="col-md-6">
                    <p>Lama</p>
                </div>
                <div class="col-md-6">
                    <select class="form-control" name="lama" placeholder="1 hari">
                        <option value="1">1 hari</option>
                        <option value="3">3 hari</option>
                        <option value="5">5 hari</option>
                        <option value="7">7 hari</option>
                    </select>
                </div>
            </div>

            <div class="row text-white mt-2">
                <div class="col-md-6">
                    <p>Tanggal Pembelian</p>
                </div>
                <div class="col-md-6">
                    <input type="date" class="form-control" name="tglbeli" id="">
                </div>
            </div>


        </div>
        <div class="metodebayar mt-5" align="center">
            <h4 style="color: #2D3E50"><b>Pilih Metode Pembayaran</b></h4>


            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <input type="radio" name="gopay">
                        <img src="{{ asset('assets/img/gopay.png') }}" class="img-fluid"
                            width="100">
                    </div>
                    <div class="col-md-6">
                        <input type="radio" name="ovo">
                        <img src="{{ asset('assets/img/ovo.png') }}" class="img-fluid"
                            width="100">
                    </div>
                </div>


                <div class="row mt-4">
                    <div class="col-md-6">
                        <input type="radio" name="dana">
                        <img src="{{ asset('assets/img/dana.png') }}" class="img-fluid"
                            width="100">
                    </div>
                    <div class="col-md-6">
                        <input type="radio" name="shopee">
                        <img src="{{ asset('assets/img/shopee.png') }}" class="img-fluid"
                            width="100">
                    </div>
                </div>

            </div>

        </div>

        <div class="button-paket mt-5" align="center">
            <a href="{{ route('member.invoice') }}"
                class="align-self-end btn btn-light hvr-shrink">Total Bayar</a>
        </div>
        <iframe src="https://embed.lottiefiles.com/animation/64294" frameborder="0"></iframe>
    </div>

</form>

@endsection
