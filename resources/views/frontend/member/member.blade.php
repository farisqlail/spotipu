@extends('layouts.app')

@section('title')
    Spotipu - Beli Member
@endsection

@section('content')
    <div class="judul" data-aos="zoom-out" align="center" style="color: #D4D4D4">
        <h2 class="text-white"><b>Dapatkan Akses Premium</b></h2>
        <h6>Dengarkan musik dengan kualitas tinggi</h6>
        <h6>dengan harga terjangkau di Spotipu. </h6>
    </div>

    <div class="card-member1">
        <div class="row mt-5 mb-5" data-aos="fade-up">
            @foreach ($member as $data)
                <div class="col-md-3 text-white">
                    <div class="card" style="background-color: #2D3E50; border: none; height: 550px;">
                        <div class="card-body d-flex flex-column">
                            <h4><b>{{ $data->name_member }}</b></h4>
                            <p>Mulai Rp {{ number_format($data->price) }}/{{ $data->duration }}</p>
                            <p>{{ $data->account }} Akun premium</p>
                            <p>
                                {!! $data->description_member !!}
                            </p>

                            <div class="btn-member hvr-shrink" align="center">
                                @if (Auth::check())
                                    <a href="{{ route('member.pembayaran', $data->id) }}"
                                        class="align-self-end btn btn-light">Pilih
                                        Paket</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="align-self-end btn btn-light">Pilih
                                        Paket</a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
