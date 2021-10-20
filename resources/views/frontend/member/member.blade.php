@extends('layouts.app')

@section('title')
    Spotipu - Beli Member
@endsection

@section('content')
    <div class="judul" align="center" style="color: #D4D4D4">
        <h2><b>Dapatkan Akses Premium</b></h2>
        <h6>Dengarkan musik dengan kualitas tinggi</h6>
        <h6>dengan harga terjangkau di Spotipu. </h6>
    </div>

    <div class="card-member1">
        <div class="row mt-5 mb-5">
            <div class="col-md-3 text-white">

                <div class="card" style="background-color: #2D3E50; border: none;">
                    <div class="card-body">
                        <h4><b>Batagor</b></h4>
                        <p>Mulai Rp 5000/hari</p>
                        <hr style="background-color: #ffff;">
                        <p><i class="fas fa-music"></i> &nbsp; Dengarkan musik bebas iklan</p>
                        <p><i class="fas fa-music"></i> &nbsp; Download 30 lagu di perangkat seluler</p>
                        <p><i class="fas fa-music"></i> &nbsp; Buat playlist sesukamu</p>

                        <div class="btn-member mt-5" align="center">
                            <button class="btn btn-light">Pilih Paket</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
