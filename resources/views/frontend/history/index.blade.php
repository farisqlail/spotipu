@extends('layouts.app')

@section('title')
    Spotipu - History
@endsection

@section('content')


<div class="card mt-3" style="background-color: #2D3E50; border: none;">
    <div class="card-body">
            <h2 class="text-white"><strong>History Langganan</strong></h2>
                <div class="table-responsive mt-3">
                    <table class="table" id="tableCekIn" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Akun</th>
                                <th>Langganan Paket</th>
                                <th>Harga Paket</th>
                                <th>Total Harga</th>
                                <th>Tanggal Langganan</th>
                                <th>Tanggal Berakhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trans as $data)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->harga }}</td>
                                    <td>{{ $data->total }}</td>
                                    <td>{{ $data->name_member }}</td>
                                    <td>{{ $data->active }}</td>
                                    <td>{{ $data->duedate }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>

@endsection
