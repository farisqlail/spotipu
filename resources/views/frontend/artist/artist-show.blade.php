@extends('layouts.app')

@section('title')
    Spotipu - {{ $music[0]->name_artis }}
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" align="center">
                <div class="card" style="background-color: #2D3E50; border: none; ">
                    <div class="card-body">
                        <h2 class="text-white"><strong>{{ $music[0]->name_artis }}</strong></h2>
                        <small>Artist</small><br>
                        <img src="{{ asset('storage/image/artis/' . $music[0]->image) }}" class="img-fluid rounded mt-3"
                            width="150" style="height: 170px;">

                        <p class="mt-3">
                            {!! $music[0]->description_artis !!}
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-9">
                <div class="card" style="background-color: #2D3E50; border: none; ">
                    <div class="card-body">
                        <h4 class="text-white"><strong>Musics</strong></h4>
                        @foreach ($music as $data)
                            <div class="row mt-5">
                                <div class="col-md-1 d-flex align-items-center">
                                    <h4>{{ $loop->iteration }}</h4>
                                </div>
                                <div class="col-md-2 mr-auto">
                                    <img src="{{ asset('storage/music/cover/' . $data->cover) }}" class="img-fluid"
                                        width="80" srcset="">
                                </div>
                                <div class="col-md-6 pl-4 hvr-grow">
                                    <h6 class="text-white">{{ $data->name_music }}</h6>
                                    <small>{{ $data->name_artis }}</small>
                                </div>
                                <div class="col-md-3 d-flex align-items-center">
                                    {{-- <button class="btn btn-warning ml-auto"><i class="fas fa-play"></i></button> --}}
                                    <div class="button-play" align="center">
                                        <audio id="audio">
                                            <source src="{{ asset('storage/music/' . $data->music) }}" type="audio/mpeg">
                                        </audio>
                                        <button class="btn btn-warning ml-auto hvr-grow" id="playPauseBtn"
                                            onClick="playPause()" align="center">
                                            <i class="fas fa-play"></i>
                                        </button>
                                        <button class="btn btn-danger ml-auto hvr-grow" onClick="stop()" align="center">
                                            <i class="fas fa-stop"></i>
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
