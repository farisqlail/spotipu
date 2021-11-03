@extends('layouts.app')

@section('title')
    Spotipu - Invoice
@endsection

@section('content')

    <div class="row">
        <div class="col-md-9">
            <h2 class="text-white"><b>Iklan Kamu</b></h2>
        </div>
    </div>

    <div class="card mt-3" data-aos="fade-up" style="background-color: #2D3E50; border: none;">
        <div class="card-body text-white">

            <div class="title-invoice" align="center">
                <h3>Segera selesaikan transaksimu iklan mu</h3>
                <small class="text-muted">Iklan produk</small>
            </div>

            <hr class="mt-3" style="background-color: #fff;">

            <div class="row mt-5">
                <div class="col-md-8">
                    <span><b>Kategori</b></span><br><br>
                    <span><b>Judul Iklan</b></span><br><br>
                    <span><b>Merk</b></span><br><br>
                    <span><b>Deskripsi</b></span><br><br>
                    <span><b>Nama Produk</b></span><br><br>
                    <span><b>Harga Produk</b></span><br><br>
                    <span><b>Link website</b></span><br><br>
                    {{-- <span><b>Anggaran</b></span><br><br> --}}
                    <span><b>Durasi</b></span><br><br>
                    <span><b>Metode Pembayaran</b></span><br><br>
                    <span><b>Biaya Iklan /hari</b></span><br><br>
                    <span><b>Biaya Admin</b></span><br><br>

                    {{-- <span><b>Total Pembayaran</b></span><br><br> --}}

                </div>
                <div class="col-md-4">
                    <span class="text-muted">{{ $kategori }}</span><br><br>
                    <span class="text-muted">{{ $judul }} </span><br><br>
                    <span class="text-muted">{{ $merk }}</span><br><br>
                    <span class="text-muted">{{ $deskripsi }}</span><br><br>
                    <span class="text-muted">{{ $namaProduk }}</span><br><br>
                    <span class="text-muted">Rp. {{ $hargaProduk }}</span><br><br>
                    <span class="text-muted">{{ $link }}</span><br><br>
                    {{-- <span class="text-muted">{{ $anggaran }}</span><br><br> --}}
                    <span class="text-muted">{{ $durasi }} Hari</span><br><br>
                    <span class="text-muted">{{ $metode }}</span><br><br>
                    <span class="text-muted">Rp. {{ $biayaIklan }}</span><br><br>
                    <span class="text-muted">Rp. {{ $admin }}</span><br><br>
                </div>
            </div>

            <hr class="mt-3" style="background-color: #fff;">

            <div class="row mt-5">
                <div class="col-md-8">
                    <h3>Total Bayar</h3>
                </div>
                <div class="col-md-4">
                    <h3>Rp {{ $total }}</h3>
                </div>
            </div>

            <div class="button-beli mt-5 mb-3" align="center">
                <a href="/ads-store/transdone" class="btn btn-lg btn-light hvr-shrink">Bayar</a>
            </div>
        </div>
    </div>

@endsection
