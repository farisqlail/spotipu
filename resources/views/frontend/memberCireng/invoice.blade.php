@extends('layouts.app')

@section('title')
    Spotipu - Invoice
@endsection

@section('content')

    <div class="row">
        <div class="col-md-9">
            <h2 class="text-white"><b>Pesanan Kamu</b></h2>
        </div>
        <div class="col-md-3 align-self-end" align="right">
            <a href="{{ route('member.index') }}" class="text-white ml-auto"><u>Batalkan Pesanan</u></a>
        </div>
    </div>

    <div class="card mt-3" data-aos="fade-up" style="background-color: #2D3E50; border: none;">
        <div class="card-body text-white">

            <div class="title-invoice" align="center">
                <h3>Spotipu Premium Cireng</h3>
                <small class="text-muted">1 Akun Premium</small>
            </div>

            <hr class="mt-3" style="background-color: #fff;">

            <div class="row mt-5">
                <div class="col-md-8">
                    <span><b>Username</b></span><br><br>
                    <span><b>Tanggal pembelian</b></span><br><br>
                    <span><b>Masa Aktif</b></span><br><br>
                    <span><b>Tanggal Selesai</b></span><br><br>
                    <span><b>Harga</b></span><br><br>
                    <span><b>Metode Pembayaran</b></span><br><br>
                    <span><b>Biaya Admin</b></span><br><br>
                    <span><b>PPN</b></span><br><br>

                </div>
                <div class="col-md-4">
                    <span class="text-muted">@smunny23</span><br><br>
                    <span class="text-muted">{{ date('d-M-Y')}}</span><br><br>
                    <span class="text-muted">{{ $lama }} hari</span><br><br>
                    <span class="text-muted">{{ $hasilMember }}</span><br><br>
                    <span class="text-muted">Rp. {{ $harga }}</span><br><br>
                    <span class="text-muted">{{ $pbayar }}</span><br><br>
                    <span class="text-muted">Rp. {{ $admin }}</span><br><br>
                    <span class="text-muted">Rp. {{ $ppn }}</span><br><br>
                </div>
            </div>

            <hr class="mt-3" style="background-color: #fff;">

            <div class="row mt-5">
                <div class="col-md-8">
                    <h3>Total Bayar</h3>
                </div>
                <div class="col-md-4">
                    <h3>Rp. {{ $totalBayars }}</h3>
                </div>
            </div>

            <div class="button-beli mt-5 mb-3" align="center">
                <a href="{{ route('member.konfirmasi') }}" class="btn btn-lg btn-light hvr-shrink">Bayar</a>
            </div>
        </div>
    </div>

@endsection
