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
        <div class="col-md-3 text-white">
            <div class="card" style="background-color: #2D3E50; border: none; height: 550px;">
                <div class="card-body d-flex flex-column">
                    <h4><b>Batagor</b></h4>
                    <p>Mulai Rp 5000/hari</p>
                    <p>1 Akun premium</p>
                    <hr style="background-color: #ffff;">
                    <p><i class="fas fa-music"></i> &nbsp; Dengarkan musik bebas iklan</p>
                    <p><i class="fas fa-music"></i> &nbsp; Download 50 lagu di perangkat seluler</p>
                    <p><i class="fas fa-music"></i> &nbsp; Buat playlist sesukamu</p>



                    <div class="btn-member hvr-shrink" align="center">
                        <a href="{{ route('member.pembayaran') }}" class="align-self-end btn btn-light">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 text-white">
            <div class="card" style="background-color: #2D3E50; border: none; height: 550px;">
                <div class="card-body d-flex flex-column">
                    <h4><b>Cireng</b></h4>
                    <p>Mulai Rp 50.000/bulan</p>
                    <p>1 Akun premium</p>
                    <hr style="background-color: #ffff;">
                    <p><i class="fas fa-music"></i> &nbsp; Dengarkan musik bebas iklan</p>
                    <p><i class="fas fa-music"></i> &nbsp; Download 1k lagu di perangkat seluler</p>
                    <p><i class="fas fa-music"></i> &nbsp; Buat playlist sesukamu</p>
                    <p><i class="fas fa-music"></i> &nbsp; Group Session</p>
                    <!-- <br>
                    <br>
                    <br>
                    <br> -->
                    <div class="btn-member hvr-shrink" align="center">
                        <a href="/memberCireng" class="align-self-end btn btn-light">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 text-white">
            <div class="card" style="background-color: #2D3E50; border: none; height: 550px;">
                <div class="card-body d-flex flex-column">
                    <h4><b>Klantink</b></h4>
                    <p>Mulai Rp 75.000/bulan</p>
                    <p>2 Akun premium</p>
                    <hr style="background-color: #ffff;">
                    <p><i class="fas fa-music"></i> &nbsp; Dengarkan musik bebas iklan</p>
                    <p><i class="fas fa-music"></i> &nbsp; Download 5k lagu di perangkat seluler</p>
                    <p><i class="fas fa-music"></i> &nbsp; Buat playlist sesukamu</p>
                    <p><i class="fas fa-music"></i> &nbsp; Group Session</p>
                    <p><i class="fas fa-music"></i> &nbsp; Join 2 akun</p>
                    <!-- <br>
                    <br>
                    <br> -->
                    <div class="btn-member hvr-shrink" align="center">
                        <a href="{{url('/pembayaran')}}" class="align-self-end btn btn-light">Pilih Paket</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 text-white">
            <div class="card" style="background-color: #2D3E50; border: none; height: 550px;">
                <div class="card-body d-flex flex-column">
                    <h4><b>Tahu Bulat</b></h4>
                    <p>Mulai Rp 90.000/bulan</p>
                    <p>6 Akun premium</p>
                    <hr style="background-color: #ffff;">
                    <p><i class="fas fa-music"></i> &nbsp; Dengarkan musik bebas iklan</p>
                    <p><i class="fas fa-music"></i> &nbsp; Download 10k lagu di perangkat seluler</p>
                    <p><i class="fas fa-music"></i> &nbsp; Buat playlist sesukamu</p>
                    <p><i class="fas fa-music"></i> &nbsp; Group Session</p>
                    <p><i class="fas fa-music"></i> &nbsp; Join 6 akun</p>
                    <p><i class="fas fa-music"></i> &nbsp; Dengarkan lagu offline, atur equalizer</p>


                    <div class="btn-member hvr-shrink" align="center">
                        <a href="/memberTahubulat" class="align-self-end btn btn-light">Pilih Paket</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection