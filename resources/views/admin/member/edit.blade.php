@extends('admin.layouts.app')

@section('content-admin')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Edit Data Member</h1>

            <form action="{{ route('admin.member.update', $member->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}


                <div class="form-group">
                    <label for="">Nama member</label>
                    <input type="text" name="name_member" class="form-control" value="{{$member->name_member}}">
                </div>

                <div class="form-group">
                    <label for="">Deskripsi member</label>
                    <textarea class="form-control" name="description_member" id="description_member" required rows="3" >{{$member->description_member}}</textarea>
                </div>
                
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="number" class="form-control" name="price" value="{{$member->price}}">
                </div>

                <div class="form-group">
                    <label for="">banyak Akun</label>
                    <input type="text" class="form-control" name="account" value="{{$member->account}}">
                </div>

                
                
                <div class="button-submit float-right">
                    <button type="submit" class="btn btn-lg btn-success">Ubah</button>
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