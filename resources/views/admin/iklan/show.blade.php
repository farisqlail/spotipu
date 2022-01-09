@extends('admin.layouts.app')

@section('content-admin')

    <div class="card">
        <div class="card-body">
            <h1><strong>Iklan {{ $ads->judul_iklan }}</strong></h1>
            <br>
            <p>
                Kategori : {{ $ads->kategori_produk }} <br>
                Merk : {{ $ads->merk }} <br>
                Deskripsi Produk : {{ $ads->deskripsi_produk }} <br>
                Nama Produk : {{ $ads->nama_produk }} <br>
                Harga : Rp {{ number_format($ads->harga) }} <br>
                Link Website : {{ $ads->link_website }} <br>
                Durasi : @if ($ads->durasi == 30)
                    Satu Bulan <br>
                @elseif($ads->durasi == 7)
                    Satu Minggu <br>
                @elseif($ads->durasi == 21)
                    Tiga Minggu <br>
                @endif
                Metode Pembayaran : {{ $ads->metode_pembayaran }}
            </p>
        </div>
    </div>

@endsection
