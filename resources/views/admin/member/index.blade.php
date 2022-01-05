@extends('admin.layouts.app')

@section('content-admin')

<div class="container">
    <div class="card">
        <div class="card-body rounded">
            <h1>Data Member</h1>

            <div class="float-right mb-3">
                <a href="{{ route('admin.member.create') }}" class="btn btn-success btn-lg">Tambah Data</a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered" id="tableCekIn" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama Member </th>
                            <th>Deskripsi Member</th>
                            <th>Harga</th>  
                            <th>Banyak Akun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($member as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{ $data->name_member}}</td>
                            <td>{!! Str::limit($data->description_member, 60)!!}</td>
                            <td>{{ $data->price}}</td>
                            <td>{{ $data->account}}</td>
                            <td>
                           
                                        
                                        <a href="{{ route('admin.member.edit', $data->id) }}"
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
    var memberId = $(this).attr('data-id');
    swal({
            title: "Apakah kamu yakin ?",
            text: "Apa kamu yakin ingin menghapus data ini",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location = "/member/admin/delete/" + memberId + ""
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