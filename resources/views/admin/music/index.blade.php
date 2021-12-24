@extends('admin.layouts.app')

@section('content-admin')

<div class="container">
    <div class="card">
        <div class="card-body rounded">
            <h1>Data Music</h1>

            <div class="float-right mb-3">
                <a href="{{ route('admin.music.create', $artis->id) }}" class="btn btn-success btn-lg">Tambah Data</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="tableCekIn" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Artis</th>
                            <th>Judul Music</th>
                            <th>Music</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($genre as $data)
                            <tr class="text-center">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name_genre }}</td>
                                <td>
                                    <a href="{{ route('admin.genre.edit', $data->id) }}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="#" data-id="{{ $data->id }}" class="btn btn-danger delete">
                                        Hapus
                                    </a>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection