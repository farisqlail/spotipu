@extends('layouts.app')

@section('title')
    Spotipu - Platform Music
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8" data-aos="fade-up">

            <div class="card shadow-sm rounded" style="background-color: #2D3E50; border: none;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <h5 class="text-white">Artis Favorit</h5>
                        </div>
                        <div class="col-sm-4" align="right">
                            <a href="{{ url('/artist') }}" style="color: #D4D4D4">lihat selengkapnya</a>
                        </div>
                    </div>

                    <div class="row mt-3" align="center">
                        @foreach ($artis as $data)
                            <div class="col-sm-2 hvr-grow">
                                <img src="{{ asset('storage/image/artis/' . $data->image) }}" class="img-fluid rounded"
                                    style="width: 80px;" srcset="">
                                <h6 class="mt-2 text-white">{{ $data->name_artis }}</h6>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="row mt-4 m hvr-growb-5">
                <div class="col-md-5">
                    <div class="card" style="background-color: #2D3E50; border: none; ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h5 class="text-white">Genres</h5>
                                </div>
                                <div class="col-sm-5" align="right">
                                    <a href="{{ url('/genre') }}" style="color: #D4D4D4">Lengkap</a>
                                </div>
                            </div>

                            <div class="row mt-3">
                                @foreach ($genre as $data)
                                    <div class="col-sm-6 hvr-grow">
                                        <a href="" style="text-decoration-color: white;">
                                            <div class="card"
                                                style="background-image: linear-gradient(#FFC700, #11E58F); border: none; height: 5rem;">
                                                <div class="card-body d-flex align-items-center" align="center">
                                                    <h6 class="text-white mx-auto"><b>{{ $data->name_genre }}</b></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-7" data-aos="fade-up">
                    <div class="card shadow-sm rounded" style="background-color: #2D3E50; border: none;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-7">
                                    <h5 class="text-white">Top Artist</h5>
                                </div>
                                <div class="col-sm-5" align="right">
                                    <a href="{{ url('/artist') }}" style="color: #D4D4D4">Lihat Lengkap</a>
                                </div>
                            </div>

                            @foreach ($music as $data)
                                <div class="row mt-3">
                                    <div class="col-md-2 d-flex align-items-center">
                                        <h4>{{ $loop->iteration }}</h4>
                                    </div>
                                    <div class="col-md-1 mr-auto">
                                        <img src="{{ asset('storage/music/cover/' . $data->cover) }}" class="img-fluid"
                                         srcset="">
                                    </div>
                                    <div class="col-md-5 pl-4 hvr-grow">
                                        <h6 class="text-white">{{ $data->name_music }}</h6>
                                        <small>{{ $data->name_artis }}</small>
                                    </div>
                                    <div class="col-md-3 d-flex align-items-center hvr-grow">
                                        <div class="button-play" align="center">
                                            <audio id="audio">
                                                <source src="{{ asset('storage/music/' . $data->music) }}"
                                                    type="audio/mpeg">
                                            </audio>
                                            <button class="btn btn-warning ml-auto hvr-grow" id="playPauseBtn"
                                                onClick="playPause()" align="center">
                                                <i class="fas fa-play"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up">
            <div class="card card-player shadow-sm rounded" style="background-color: #2D3E50; border: none; ">
                <div class="card-body">

                    <h5 class="text-white">Top Artist</h5>

                    <div class="mt-3" align="center">
                        <img src="{{ asset('assets/img/greenday-2.png') }}" class="img-fluid" alt="">

                        <div class="title-player mt-3">
                            <h3 class="text-white">Still Breathing</h3>
                            <small>Green Day</small><br>
                            <small class="mt-5">3.44</small>
                        </div>

                        <div class="progress mt-3" style="height: 2px; width: 80%;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%; " aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <button class="btn btn-lg btn-warning mt-3 hvr-grow"><i class="fas fa-play"></i></button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    
    <script>
        var audio = document.getElementById('audio');
        var playPauseBtn = document.getElementById('playPauseBtn');
        var count = 0;

        function playPause() {
            if (count == 0) {
                count = 1;
                audio.play();
                playPauseBtn.innerHTML = "<i class='fas fa-pause'></i>";
            } else {
                count = 0;
                audio.pause();
                playPauseBtn.innerHTML = "<i class='fas fa-play'></i>";
            }
        }

        function stop() {
            playPause();
            audio.pause();
            audio.currentTime = 0;
        }
    </script>

@endsection
