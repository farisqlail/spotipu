@extends('admin.layouts.app')

@section('content-admin')

<div class="container">
    <div class="card">
        <div class="card-body rounded">
            <h1>Data Music</h1>

            <div class="float-right mb-3">
                <a href="{{ route('admin.music.create', $artis->id) }}" class="btn btn-success btn-lg">Tambah Data</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="tableCekIn" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Cover Music</th>
                            <th>Judul Music</th>
                            <th>Genre</th>
                            <th>Music</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($music as $data)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <img src="{{ asset('storage/music/cover/'.$data->cover) }}" class="img-fluid rounded" style="width: 100px; height: 100px;">
                                </td>
                                <td>{{ $data->name_music }}</td>
                                <td>{{ $data->name_genre }}</td>
                                <td>
                                    {{-- <a href="{{ asset('storage/music/'.$data->music) }}" download>Lagu</a> --}}
                                    <div class="button-play" align="center">
                                        <audio id="audio">
                                            <source
                                                src="{{ asset('storage/music/'.$data->music) }}"
                                                type="audio/mpeg">
                                        </audio>
                                        <button class="btn btn-sm btn-warning mt-3 hvr-grow" id="playPauseBtn" onClick="playPause()" align="center">
                                            <i class="fas fa-play"></i>
                                        </button>
                                        <button class="btn btn-sm btn-danger mt-3 ml-3 hvr-grow" onClick="stop()" align="center">
                                            <i class="fas fa-stop"></i>
                                        </button>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('admin.music.edit', $data->id) }}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="#" data-id="{{ $data->id }}" class="btn btn-danger delete">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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