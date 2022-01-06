@extends('layouts.app')

@section('title')
    Spotipu - Bayar Member
@endsection

@section('content')
    <div class="judul" align="center" style="color: #ffff;">
        <h2><b>Paket kamu</b></h2>
    </div>
    <br>

    <div class="container">
        <form action="{{ route('member.store') }}" method="post">
            {{ csrf_field() }}
            <div class="card" style="background-color: #2D3E50; border:none;" data-aos="fade-up" align="center">

                <input type="number" name="id_member" value="{{ $member->id }}" hidden>

                <div class="card-body" align="left">
                    <div class="textcard text-white">
                        <h4><b>Spotipu Premium {{ $member->name_member }}</b></h4>
                        <h6>{{ $member->account }} Akun premium</h6>
                        <hr style="background-color: #ffff;">
                    </div>

                    <div class="row text-white">
                        <div class="col-md-6">
                            <p>Harga</p>
                        </div>
                        <div class="col-md-6">
                            <h5><strong>Rp {{ number_format($member->price) }}</strong></h5>
                        </div>
                    </div>

                    <div class="row text-white">
                        <div class="col-md-6">
                            <p>Nama Pembeli</p>
                        </div>
                        <div class="col-md-6">
                            <h5><strong>{{ Auth::user()->name }}</strong></h5>
                            <input type="number" name="id_user" value="{{ Auth::user()->id }}" hidden>
                        </div>
                    </div>

                    <div class="row text-white mt-2">
                        <div class="col-md-6">
                            <p>Lama</p>
                        </div>
                        <div class="col-md-6">
                            <h5><strong>1 {{ $member->duration }}</strong></h5>
                            @if ($member->name_member == 'Batagor')
                                <input type="number" name="paket" value="1" hidden>
                            @else
                                <input type="number" name="paket" value="30" hidden>
                            @endif

                        </div>
                    </div>

                    <div class="row text-white mt-2">
                        <div class="col-md-6">
                            <p>Tanggal Pembelian</p>
                        </div>
                        <div class="col-md-6">
                            <h5>
                                <strong>
                                    {{ date('d-m-Y') }}
                                </strong>
                            </h5>
                        </div>
                    </div>

                    <div class="row text-white mt-2">
                        <div class="col-md-6">
                            <p>Biaya Admin</p>
                        </div>
                        <div class="col-md-6">
                            <h5><strong>Rp 1,000</strong></h5>
                        </div>
                    </div>

                    <hr mt-7 style="background-color: #ffff;">

                    <div class="row text-white mt-2">
                        <div class="col-md-6">
                            <h4><strong>Total Bayar</strong></h4>
                        </div>
                        <div class="col-md-6">
                            @php
                                $total = $member->price + 1000;
                            @endphp
                            <h4><strong>Rp {{ number_format($total) }}</strong></h4>
                            <input type="number" name="total" value="{{ $total }}" hidden>
                        </div>
                    </div>

                    <hr mt-7 style="background-color: #ffff;">
                    <div class="row mt-3">
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

                    <div class="mt-5" align="center">
                        <h4 class="text-white"><b>Pilih Metode Pembayaran</b></h4>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="radio" name="method" value="gopay">
                                <img src="{{ asset('assets/img/gopay.png') }}" class="img-fluid" width="100">
                            </div>
                            <div class="col-md-6">
                                <input type="radio" name="method" value="ovo">
                                <img src="{{ asset('assets/img/ovo.png') }}" class="img-fluid" width="100">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <input type="radio" name="method" value="dana">
                                <img src="{{ asset('assets/img/dana.png') }}" class="img-fluid" width="100">
                            </div>
                            <div class="col-md-6">
                                <input type="radio" name="method" value="shopee">
                                <img src="{{ asset('assets/img/shopee.png') }}" class="img-fluid" width="100">
                            </div>
                        </div>

                    </div>
                    <div class="button-paket mt-5" align="center">
                        {{-- <a href="{{ route('member.invoice') }}"
                            class="btn btn-block btn-lg btn-success hvr-shrink">Total Bayar</a> --}}
                        <button type="submit" class="btn btn-block btn-lg btn-success hvr-shrink">Total Bayar</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
