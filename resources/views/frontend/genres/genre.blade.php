@extends('layouts.app')

@section('title')
    Spotipu - Platform Music Artist
@endsection

@section('content')

    <h2 class="text-white">Genres</h2>

    <div class="row mt-5" data-aos="fade-up">
        @foreach ($genre as $data)
            <div class="col-md-3 hvr-grow">
                <div class="card" style="background-color: #2D3E50; border: none;">
                    <img src="{{ asset('storage/genre/cover/'.$data->cover_genre) }}" class="card-img-top" style="height: 300px;" >
                    <div class="card-body">

                        <a href="" class="text-white">
                            <h5 align="center"><b>{{ $data->name_genre }}</b></h5>
                        </a>

                    </div>
                </div>
            </div>
        @endforeach

    </div>


@endsection
