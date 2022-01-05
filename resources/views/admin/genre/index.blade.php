@extends('admin.layouts.app')

@section('content-admin')

    <div class="modal fade" id="tambahGenre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Genre</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.genre.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nama Genre</label>
                            <input type="text" name="name_genre" class="form-control" placeholder="Nama Genre ....">
                        </div>

                        <div class="form-group">
                            <label for="">Cover Genre</label>
                            <input type="file" name="cover_genre" class="form-control">
                        </div>

                        <div class="button-submit float-right">
                            <button type="submit" class="btn btn-lg btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="card">
            <div class="card-body rounded">
                <h1>Data Genre</h1>

                <div class="float-right mb-3">
                    <button type="button" class="btn btn-success btn-lg" data-toggle="modal"
                        data-target="#tambahGenre">Tambah Data</button>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered" id="tableCekIn" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Genre</th>
                                <th>Cover Genre</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($genre as $data)
                                <div class="modal fade" id="editGenre{{ $data->id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Genre</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.genre.update', $data->id) }}" method="post" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    {{ method_field('PATCH') }}
                                
                                                    <div class="form-group">
                                                        <label for="">Nama Genre</label>
                                                        <input type="text" name="name_genre" class="form-control" value="{{ $data->name_genre }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="">Cover Genre</label>
                                                        <input type="file" name="cover_genre" class="form-control">
                                                    </div>
                                                    
                                                    <div class="button-submit float-right">
                                                        <button type="submit" class="btn btn-lg btn-success">Edit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name_genre }}</td>
                                    <td><img src="{{ asset('storage/genre/cover/'.$data->cover_genre) }}" class="img-fluid rounded" style="width: 100px; height: 100px;"></td>
                                    <td>
                                        <a href="{{ route('admin.genre.edit', $data->id) }}" class="btn btn-primary"
                                            data-toggle="modal" data-target="#editGenre{{ $data->id }}">Edit</a>
                                        <a href="#" data-id="{{ $data->id }}" class="btn btn-danger delete">
                                            Hapus
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.delete').click(function() {
            var genreId = $(this).attr('data-id');
            swal({
                    title: "Apakah kamu yakin ?",
                    text: "Apa kamu yakin ingin menghapus data ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/genre/admin/delete/" + genreId + ""
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        });
    </script>
@endsection
