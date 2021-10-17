@extends('layouts')

@section('content')

    <div class="row">
        <div class="col-md-8">

            <div class="card" style="background-color: #2D3E50; border: none;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <h5 class="text-white">Artis Favorit</h5>
                        </div>
                        <div class="col-sm-4" align="right">
                            <a href="http://" style="color: #D4D4D4">lihat selengkapnya</a>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-sm-2">
                            <img src="{{ asset('assets/img/greenday.png') }}" alt="" srcset="">
                            <h6 class="mt-2 text-white">Green Day</h6>
                        </div>

                        <div class="col-sm-2">
                            <img src="{{ asset('assets/img/greenday.png') }}" alt="" srcset="">
                            <h6 class="mt-2 text-white">Green Day</h6>
                        </div>

                        <div class="col-sm-2">
                            <img src="{{ asset('assets/img/greenday.png') }}" alt="" srcset="">
                            <h6 class="mt-2 text-white">Green Day</h6>
                        </div>

                        <div class="col-sm-2">
                            <img src="{{ asset('assets/img/greenday.png') }}" alt="" srcset="">
                            <h6 class="mt-2 text-white">Green Day</h6>
                        </div>

                        <div class="col-sm-2">
                            <img src="{{ asset('assets/img/greenday.png') }}" alt="" srcset="">
                            <h6 class="mt-2 text-white">Green Day</h6>
                        </div>

                        <div class="col-sm-2">
                            <img src="{{ asset('assets/img/greenday.png') }}" alt="" srcset="">
                            <h6 class="mt-2 text-white">Green Day</h6>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row mt-4 mb-5">
                <div class="col-md-5">
                    <div class="card" style="background-color: #2D3E50; border: none; ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h5 class="text-white">Artis Favorit</h5>
                                </div>
                                <div class="col-sm-5" align="right">
                                    <a href="http://" style="color: #D4D4D4">Lengkap</a>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="card" style="background-color: #446FDD; border: none; height: 5rem;">
                                        <div class="card-body d-flex align-items-center" align="center">
                                            <h6 class="text-white mx-auto"><b>Hip Hop</b></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card" style="background-color: #CCD93B; border: none; height: 5rem;">
                                        <div class="card-body d-flex align-items-center" align="center">
                                            <h6 class="text-white mx-auto"><b>Rock</b></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="card" style="background-color: #D29A67; border: none; height: 5rem;">
                                        <div class="card-body d-flex align-items-center" align="center">
                                            <h6 class="text-white mx-auto"><b>Folk</b></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card" style="background-color: #E36AA4; border: none; height: 5rem;">
                                        <div class="card-body d-flex align-items-center" align="center">
                                            <h6 class="text-white mx-auto"><b>Metal</b></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-sm-6">
                                    <div class="card" style="background-color: #79C256; border: none; height: 5rem;">
                                        <div class="card-body d-flex align-items-center" align="center">
                                            <h6 class="text-white mx-auto"><b>Dance</b></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card" style="background-color: #B444D0; border: none; height: 5rem;">
                                        <div class="card-body d-flex align-items-center" align="center">
                                            <h6 class="text-white mx-auto"><b>Pop</b></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card" style="background-color: #2D3E50; border: none;">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card" style="background-color: #2D3E50; border: none; ">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

@endsection
