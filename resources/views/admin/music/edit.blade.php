@extends('admin.layouts.app')

@section('content-admin')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1>Tambah Data Music</h1>

                <form action="{{ route('admin.music.update', $music->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

                    <input type="number" name="id_artis" value="{{ $music->id_artis }}" hidden>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Judul Music</label>
                                <input type="text" name="name_music" class="form-control" value="{{ $music->name_music }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Menit Music</label>
                                <input type="text" name="menit" class="form-control" value="{{ $music->menit }}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="id_genre" aria-label="Default select example">
                            <option selected>Pilih Genre Music</option>
                            @foreach ($genre as $item)
                                <option value="{{ $item->id }}">{{ $item->name_genre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Description Music</label>
                        <textarea class="form-control" name="description_music" id="description_music" required
                            rows="3">{!! $music->description_music !!}</textarea>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                        <label for="">Upload Music</label>
                        <input type="file" class="form-control" name="music">
                    </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                        <label for="">Cover Music</label>
                        <input type="file" class="form-control" name="cover">
                    </div>
                        </div>
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
        CKEDITOR.replace('description_music');
    </script>
@endsection
