@extends('admin.layouts.app')

@section('content-admin')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Edit Data Artis</h1>

                <form action="" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="form-group">
                        <label for="">Nama Artis</label>
                        <input type="text" name="name_artis" class="form-control" value="{{ $artis->name_artis }}">
                    </div>

                    <div class="form-group">
                        <label for="">Description Artis</label>
                        <textarea class="form-control" name="description_artis" id="description_artis" required rows="3">{{ $artis->description_artis }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Image Artis</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    
                    <div class="button-submit float-right">
                        <button type="submit" class="btn btn-lg btn-success">Edit</button>
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