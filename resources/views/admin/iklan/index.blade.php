@extends('admin.layouts.app')

@section('content-admin')

    <div class="container">
        <div class="card">
            <div class="card-body rounded">
                <h1>Data Iklan</h1>

                <div class="table-responsive">
                    <table class="table table-bordered" id="tableCekIn" width="100%" cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th>Kategori Produk</th>
                                <th>Judul Iklan</th>
                                <th>Merk</th>
                                <th>Durasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($iklan as $iklans)
                                <tr class="text-center">
                                    <td>{{ $iklans->kategori_produk }}</td>
                                    <td>{{ $iklans->judul_iklan }}</td>
                                    <td>{{ $iklans->merk }}</td>
                                    <td>
                                        @if ($iklans->durasi == 30)
                                            Satu Bulan
                                        @elseif($iklans->durasi == 7)
                                            Satu Minggu
                                        @elseif($iklans->durasi == 21)
                                            Tiga Minggu
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.ads.detail', $iklans->id) }}" class="btn btn-success">Lihat Detail</a>
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
