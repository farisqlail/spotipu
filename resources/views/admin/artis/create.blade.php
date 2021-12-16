@extends('admin.layouts.app')

@section('content-admin')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Tambah Data Artis</h1>

                <form action="{{ route('admin.artist.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Artis</label>
                        <input type="text" name="name_artis" class="form-control" placeholder="Nama Artis ....">
                    </div>

                    <div class="form-group">
                        <label for="">Description Artis</label>
                        <textarea class="form-control" name="description_artis" id="description_artis" required rows="3"></textarea>
                    </div>
                    
                    <div class="button-submit float-right">
                        <button type="submit" class="btn btn-lg btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description_artis');
    </script>
@endsection