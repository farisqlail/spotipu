@extends('admin.layouts.app')

@section('content-admin')

    <div class="container">
        <div class="card">
            <div class="card-body rounded">
                <h1>Data Artist</h1>

                <div class="float-right mb-3">
                    <a href="{{ route('admin.artist.create') }}" class="btn btn-success btn-lg">Tambah Data</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered" id="tableCekIn" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Artis</th>
                                <th>Deskripsi Artis</th>
                                <th>Foto Artis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artis as $data)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name_artis }}</td>
                                    <td>
                                        {!! Str::limit($data->description_artis, 60) !!}
                                    </td>
                                    <td><img src="{{ asset('storage/image/artis/'.$data->image) }}" class="img-fluid rounded" style="width: 100px; height: 100px;"></td>
                                    <td>
                                        <a href="{{ route('admin.album.index', $data->id) }}" class="btn btn-success">Album</a>
                                        <a href="{{ route('admin.music.index', $data->id) }}" class="btn btn-info">Music</a>
                                        <a href="{{ route('admin.artist.edit', $data->id) }}"
                                            class="btn btn-primary">Edit</a>
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
            var artisId = $(this).attr('data-id');
            swal({
                    title: "Apakah kamu yakin ?",
                    text: "Apa kamu yakin ingin menghapus data ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/artist/admin/delete/" + artisId + ""
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
