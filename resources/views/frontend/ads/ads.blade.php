@extends('layouts.app')

@section('title')
    Spotipu - Pasang Iklan
@endsection

@section('content')

    <h2 class="text-white">Hello Susi, Welcome back!</h2>

    <br>

    <h5 class="text-white">Live Campaign</h5><br>

    <div class="row">
        <div class="col-md-3">
            <div class="card rounded" style="background-color: #2D3E50; border: none;">
                <div class="card-body">
                    <img src="{{ asset('assets/img/cicil.png') }}" alt="" srcset=""> <span
                        class="text-white pl-3">Cicil</span>

                    <p class="mt-3 text-white">
                        Summer season marketing campaign
                    </p>

                    <small><b class="text-white">2.3 M</b> impression</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card rounded" style="background-color: #2D3E50; border: none;">
                <div class="card-body">
                    <img src="{{ asset('assets/img/cicil.png') }}" alt="" srcset=""> <span
                        class="text-white pl-3">Cicil</span>

                    <p class="mt-3 text-white">
                        Summer season marketing campaign
                    </p>

                    <small><b class="text-white">2.3 M</b> impression</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card rounded" style="background-color: #2D3E50; border: none;">
                <div class="card-body">
                    <img src="{{ asset('assets/img/cicil.png') }}" alt="" srcset=""> <span
                        class="text-white pl-3">Cicil</span>

                    <p class="mt-3 text-white">
                        Summer season marketing campaign
                    </p>

                    <small><b class="text-white">2.3 M</b> impression</small>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card rounded" style="background-color: #2D3E50; border: none;">
                <div class="card-body">
                    <img src="{{ asset('assets/img/cicil.png') }}" alt="" srcset=""> <span
                        class="text-white pl-3">Cicil</span>

                    <p class="mt-3 text-white">
                        Summer season marketing campaign
                    </p>

                    <small><b class="text-white">2.3 M</b> impression</small>
                </div>
            </div>
        </div>
    </div>
    {{-- end Row Card Cicil --}}

    <h5 class="text-white mt-5">Create New Campaign</h5><br>

    <form action="" class="text-white form-ads">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Kategori Produk <span style="color:red;">*</span></label>
                    <input type="text" name="" class="form-control" placeholder="Fashion" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Judul Iklan <span style="color:red;">*</span></label>
                    <input type="text" name="" class="form-control" placeholder="Outer branded" id="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Merk <span style="color:red;">*</span></label>
                    <input type="text" name="" class="form-control" placeholder="H7M" id="">
                </div>

                <div class="form-group mt-4">
                    <label for="">Nama <span style="color:red;">*</span></label>
                    <input type="text" name="" class="form-control" placeholder="PWL Outer" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Judul Iklan <span style="color:red;">*</span></label>
                    <textarea name="" class="form-control" id="" cols="30"
                        rows="5">ouetr ini dibuat dari bahan pilihan...</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Harga <span style="color:red;">*</span></label>
                    <input type="text" name="" class="form-control" placeholder="Rp.00000" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Link Website <span style="color:red;">*</span></label>
                    <input type="text" name="" class="form-control" placeholder="Tokopedia.com" id="">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="">Unggah foto produk <span style="color:red;">*</span></label><br>
            <button type="button" class="imp-up hvr-shrink" style="background-color: transparent; border: none;">
                <img src="{{ asset('assets/img/upload-img.png') }}" class="img-fluid" width="160" alt="">
            </button>
        </div>

        <h5 class="text-white mt-3">Anggaran & Durasi <span style="color: red;">*</span></h5><br>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Anggaran <span style="color:red;">*</span></label>
                    <input type="text" name="" class="form-control" placeholder="Rp.100000" id="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Durasi <span style="color:red;">*</span></label>
                    <select class="form-control">
                        <option>Pilih Durasi</option>
                        <option>1 Bulan</option>
                        <option>1 Minggu</option>
                        <option>3 Hari</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Metode Pembayaran <span style="color:red;">*</span></label>
                    <select class="form-control">
                        <option>Pilih Metode Pembayaran</option>
                        <option>Transfer Bank</option>
                        <option>OVO</option>
                        <option>Gopay</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Durasi <span style="color:red;">*</span></label>
                    <input type="file" class="form-control" name="">
                </div>
            </div>
        </div>

        <button type="button" class="btn btn-block btn-lg btn-ads hvr-shrink mt-3">Submit</button>
    </form>

@endsection
