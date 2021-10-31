@extends('layouts.app')

@section('title')
    Spotipu - Player
@endsection

@section('content')

    <div class="img-player mt-5" align="center">
        <img src="{{ asset('assets/img/greenday-2.png') }}" class="img-fluid" alt="">

        <h3 class="text-white mt-5"><b>Still Breathing</b></h3>
        <span>Green Day</span>

        <div class="button-play mt-4" align="center">
            <audio id="audio">
                <source
                    src="{{ asset('assets/music/still-breathing.mp3') }}"
                    type="audio/mpeg">
            </audio>
            <button class="btn btn-primary" id="playPauseBtn" onClick="playPause()" align="center">
                <i class="fas fa-play"></i>
            </button>
            <button class="btn btn-danger ml-3" onClick="stop()" align="center">
                <i class="fas fa-stop"></i>
            </button>
        </div>
    </div>

@endsection

@push('addon-script')
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
@endpush
