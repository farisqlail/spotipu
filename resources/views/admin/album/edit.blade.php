@extends('admin.layouts.app')

@section('content-admin')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Edit Data Album</h1>

            <form action="{{ route('admin.album.update', $album->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <input type="number" name="id_artis" value="{{ $album->id_artis }}" hidden>

                <div class="form-group">
                    <label for="">Nama Album</label>
                    <input type="text" name="name_album" class="form-control" value="{{ $album->name_album }}">
                </div>

                <div class="form-group">
                    <label for="">Description Album</label>
                    <textarea class="form-control" name="description_album" id="description_album" required rows="3">{{ $album->description_album }}</textarea>
                </div>

                <div class="form-group">
                    <label for="">Cover Album</label>
                    <input type="file" class="form-control" name="cover">
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
    CKEDITOR.replace( 'description_album');
</script>

@endsection