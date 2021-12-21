{{-- @extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Spotipu</title>
</head>

<link rel="stylesheet" href="assets/css/style2.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
    .aref:hover {
        color: #2D3E50;
    }

</style>

<body>

    <div class="container">

        <div class="card" style="background-color: #00856B; border-radius: 25%">
            <img src="assets/img/logo-2.png" alt="">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div align="center" class="formcon2">

                    <div class="form-group mb-1">
                        <label class="labeluser" for="">Username</label>
                        <input
                            style="width: 60%; background: transparent; border-width: 3px; border-top: none; border-left: none; border-right: none;"
                            type="text" class="form-control" id="" name="name">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-1">
                        <label class="labelemail" for="">Email</label>
                        <input
                            style="width: 60%; background: transparent; border-width: 3px; border-top: none; border-left: none; border-right: none;"
                            type="email" class="form-control" id="" name="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mt-1" style="margin-top: 10px">
                        <Label class="labelpass">Password</Label>
                        <input
                            style="width: 60%; background: transparent; border-width: 3px; border-top: none; border-left: none; border-right: none;"
                            type="password" class="form-control mt-2" id="exampleInputPassword1" name="password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- TextField NomerHp --}}
                    {{-- <div class="form-group mt-1" style="margin-top: 10px">
                        <Label class="labelhp">Confirm Password</Label>
                        <input id="password-confirm" style="width: 60%; background: transparent; border-width: 3px; border-top: none; border-left: none; border-right: none;" type="password" class="form-control mt-2" id="exampleInputPassword1" name="password_confirmation" required>
                      </div> --}}

                    <div class="buttoncon">
                        <button style="width: 60%; background-color: #009BA0; border: none" type="submit"
                            class="btn btn-dark mt-1 mb-3">Register</button><br>
                        <a class="aref" href="{{ url('/login') }}">Kembali ke halaman login</a>
                    </div>
                </div>

            </form>

        </div>
    </div>

</body>

</html>
