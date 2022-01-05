@extends('admin.layouts.app')

@section('content-admin')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Data Album</h1>

            <form action="{{ route('admin.album.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <input type="number" name="id_artis" value="{{ $artis->id }}" hidden>

                <div class="form-group">
                    <label for="">Nama Album</label>
                    <input type="text" name="name_album" class="form-control" placeholder="Nama Album ....">
                </div>

                <div class="form-group">
                    <label for="">Description Album</label>
                    <textarea class="form-control" name="description_album" id="description_album" required rows="3"></textarea>
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