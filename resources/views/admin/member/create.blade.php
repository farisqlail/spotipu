@extends('admin.layouts.app')

@section('content-admin')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Tambah Data Member/h1>

            <form action="{{ route('admin.member.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}


                <div class="form-group">
                    <label for="">Nama member</label>
                    <input type="text" name="name_member" class="form-control" placeholder="Nama member ....">
                </div>

                <div class="form-group">
                    <label for="">Deskripsi member</label>
                    <textarea class="form-control" name="description_member" id="description_member" required rows="3"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="number" class="form-control" name="price">
                </div>

                <div class="form-group">
                    <label for="">Jenis Akun</label>
                    <input type="text" class="form-control" name="account">
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
    CKEDITOR.replace( 'description_member');
</script>

@endsection