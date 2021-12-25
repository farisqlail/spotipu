@extends('admin.layouts.app')

@section('content-admin')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Edit Data Genre</h1>

                <form action="{{ route('admin.genre.update', $genre->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <div class="form-group">
                        <label for="">Nama Genre</label>
                        <input type="text" name="name_genre" class="form-control" value="{{ $genre->name_genre }}">
                    </div>
                    
                    <div class="button-submit float-right">
                        <button type="submit" class="btn btn-lg btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection