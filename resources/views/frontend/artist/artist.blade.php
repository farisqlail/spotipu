@extends('layouts.app')

@section('title')
    Spotipu - Platform Music Artist
@endsection

@section('content')

    <h2 class="text-white">Artist</h2>

    <div class="row mt-5" data-aos="fade-up">
        @foreach ($artis as $data)
            <div class="col-md-3 hvr-grow">
                <a href="{{ route('artist.show', $data->id) }}">
                    <div class="card" style="background-color: #2D3E50; border: none;">
                        <div class="card-body">
                            <div class="card-image" align="center">
                                <img src="{{ asset('storage/image/artis/' . $data->image) }}"
                                    class="img-fluid rounded-circle" width="150" style="height: 160px;">
                            </div>

                            <div class="card-caption text-start mt-3">
                                <a href="{{ route('artist.show', $data->id) }}" style="text-decoration-color: white">
                                    <h5 class="text-white"><b>{{ $data->name_artis }}</b></h5>
                                </a>
                                <small class="text-muted">Artist</small>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
        
    </div>

@endsection
