@extends('layouts.app')

@section('title')
    Spotipu - Platform Music Album
@endsection

@section('content')

    <h2 class="text-white">Album</h2>

    <div class="row mt-5" data-aos="fade-up">
        @foreach ($album as $data)
            <div class="col-md-3 hvr-grow">
                <a href="{{ route('album.show', $data->id) }}">
                    <div class="card" style="background-color: #2D3E50; border: none;">
                        <div class="card-body">
                            <div class="card-image">
                                <img src="{{ asset('storage/album/cover/' . $data->cover) }}" class="card-img-top"
                                    style="height: 300px;">
                            </div>

                            <div class="card-caption mt-3">
                                <a href="" class="text-white">
                                    <h5><b>{{ $data->name_album }}</b></h5>
                                </a>
                                <small class="text-muted">{{ $data->name_artis }}</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
@endsection
