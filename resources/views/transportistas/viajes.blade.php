@extends('layouts.log')

@section('content')
<div class="container">
    <div class="col-12 mt-4">
        <div class="mb-5 ps-3">
            <h3 class="mb-1">Viajes - Febrero</h3>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-blog card-plain">
                    <div class="card-header p-0 m-2">
                        <a class="d-block shadow-xl border-radius-xl">
                            <img src="{{ asset('storage/img/viaje.jpeg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" width="400" height="140">
                        </a>
                    </div>
                    <div class="card-body p-3">
                        <p class="mb-0 text-sm">Viaje 12</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{route('transportistas.pedidos')}}" type="button" class="btn btn-outline-primary btn-sm mb-0">View Travel</a>
                            <h6>estado: en curso</h6>
                        </div>
                    </div>
                </div>
            </div>
            @for ($i = 1; $i <= 7; $i++)
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card card-blog card-plain">
                        <div class="card-header p-0 m-2">
                            <a class="d-block shadow-xl border-radius-xl">
                                <img src="{{ asset('storage/img/viaje.jpeg') }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg" width="400" height="140">
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <p class="mb-0 text-sm">Viaje #{{ $i }}</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <a href="{{route('transportistas.pedidos')}}" type="button" class="btn btn-outline-primary btn-sm mb-0">View Travel</a>
                                <h6>estado: terminado</h6>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
            
        </div>
    </div>
</div>
@endsection
