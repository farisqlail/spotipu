@extends('layouts')

@section('content')
    
    <h2 class="text-white">Hello Susi, Welcome back!</h2>

    <br>

    <h5 class="text-white">Live Campaign</h5><br>

    <div class="row">
        <div class="col-md-3">
            <div class="card rounded" style="background-color: #2D3E50; border: none;">
                <div class="card-body">
                    <img src="{{ asset('assets/img/cicil.png') }}" alt="" srcset=""> <span class="text-white pl-3">Cicil</span>

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
                    <img src="{{ asset('assets/img/cicil.png') }}" alt="" srcset=""> <span class="text-white pl-3">Cicil</span>

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
                    <img src="{{ asset('assets/img/cicil.png') }}" alt="" srcset=""> <span class="text-white pl-3">Cicil</span>

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
                    <img src="{{ asset('assets/img/cicil.png') }}" alt="" srcset=""> <span class="text-white pl-3">Cicil</span>

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
    
    <form action="">

    </form>

@endsection