@extends('layouts.app')

@section('title')
Spotipu - Konfirmasi
@endsection

@section('content')


<!-- <div class="card mb-3" data-aos="fade-up" style="background-color: #2D3E50; border: none;"> -->
    <div class="sukses text-white" align="center">
        <h2 align="center"><b>Yeay</b></h2>  
    
        <iframe src="https://embed.lottiefiles.com/animation/64294" frameborder="0">
        </iframe>
        
        <h4><b>Terima kasih telah melakukan pembayaran <br>
                Kini Spotipu Premium mu sudah aktif !</b></h4>
    </div>

    <div class="button-paket mt-5 mb-5" align="center">
        <a href="{{ url('/') }}"
            class="align-self-end btn btn-light hvr-shrink">Terima Kasih</a>
    </div>
<!-- </div> -->

@endsection
