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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artis as $data)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name_artis }}</td>
                                    <td>
                                        {!! $data->description_artis !!}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.artist.edit', $data->id) }}" class="btn btn-lg btn-primary">Edit</a>
                                        <a href="{{ route('admin.artist.delete', $data->id) }}" class="btn btn-lg btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
