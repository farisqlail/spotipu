@extends('admin.layouts.app')

@section('content-admin')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Tambah Data Genre</h1>

                <form action="{{ route('admin.genre.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Genre</label>
                        <input type="text" name="name_genre" class="form-control" placeholder="Nama Genre ....">
                    </div>
                    
                    <div class="button-submit float-right">
                        <button type="submit" class="btn btn-lg btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection