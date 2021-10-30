@extends('layouts.app')

@section('title')
Spotipu - Konfirmasi
@endsection

@section('content')
<h2 class="text-white"><b>Yeay</b></h2>

<div class="card mb-3" data-aos="fade-up" style="background-color: #2D3E50; border: none;">
    <div class="card-body" align="center">
    <iframe src="https://embed.lottiefiles.com/animation/64294" frameborder="0"></iframe>
        <h4><b>Terima kasih telah melakukan pembayaran
                Kini Spotipu Premium mu sudah aktif !</b></h4>
    </div>

    <div class="button-paket mt-5" align="center">
            <a href="{{ route('member.pembayaran') }}"
                class="align-self-end btn btn-light hvr-shrink">Terima Kasih</a>
        </div>
    
    @endsection
