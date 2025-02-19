@extends('layouts.guest')

@section('css')
    <link rel="stylesheet" href="{{asset('css/dash.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <img src="{{ asset('storage/img/viaje.jpeg') }}" class="card-img-top img-fluid" alt="Crear un viaje">
                <div class="card-body">
                    <h5 class="card-title">Crear un viaje</h5>
                    <p class="card-text">Crea un viaje para que nuestros equipo de transporte se encargue del envio.</p>
                    <a href="{{route('user.Cviaje')}}" class="btn btn-primary">Ir al viaje</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-90">
                <img src="{{ asset('storage/img/compras.jpeg') }}" class="card-img-top img-fluid" alt="Crear un pedido">
                <div class="card-body">
                    <h5 class="card-title">Crear un pedido</h5>
                    <p class="card-text">Ocupas que uno de nuestros transportistas te haga llegar tu pedido hacia donde estas?</p>
                    <a  href="{{route('user.pedidos')}}" class="btn btn-primary">Ir a pedidos</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
