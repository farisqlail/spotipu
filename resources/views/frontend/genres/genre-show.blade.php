@extends('layouts.app')

@section('title')
    Spotipu - Genre Music
@endsection

@section('content')

    <div class="card" style="background-color: #2D3E50; border: none; ">
        <div class="card-body">
            @if (!empty($music))
                <h4 class="text-white"><strong>Musik </strong></h4>
                @foreach ($music as $data)
                    <div class="row mt-5">
                        <div class="col-md-1 d-flex align-items-center">
                            <h4>{{ $loop->iteration }}</h4>
                        </div>
                        <div class="col-md-2 mr-auto">
                            <img src="{{ asset('storage/music/cover/' . $data->cover_music) }}" class="img-fluid"
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
                                <button class="btn btn-warning ml-auto hvr-grow" id="playPauseBtn" onClick="playPause()"
                                    align="center">
                                    <i class="fas fa-play"></i>
                                </button>
                                <button class="btn btn-danger ml-auto hvr-grow" onClick="stop()" align="center">
                                    <i class="fas fa-stop"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h4 class="text-white text-center"><strong>Data belum ada</strong></h4>
            @endif
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
