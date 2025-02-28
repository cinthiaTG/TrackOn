@extends('layouts.guest')

@section('css')
    <link rel="stylesheet" href="{{asset('css/dash.css')}}">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content">
        <div class="col-md-6 mb-4">
            <div class="card h-100">
                <img src="{{ asset('storage/img/paqueteria.jpeg') }}" class="card-img-top img-fluid" alt="Crear un viaje">
                <div class="card-body">
                    <h5 class="card-title">Crear un viaje</h5>
                    <p class="card-text">Crea un viaje para que nuestros equipo de transporte se encargue del envio.</p>
                    <a href="{{route('user.Cviaje')}}" class="btn btn-warning">Crea tu viaje</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card h-90">
                <img src="{{ asset('storage/img/RentaVehiculo.jpeg') }}" class="card-img-top img-fluid" alt="Crear un pedido">
                <div class="card-body">
                    <h5 class="card-title">Rentar un vehiculo</h5>
                    <p class="card-text">Te ayudamos a que tengas acceso a vehiculos para tus viajes sorpresa</p>
                    <a  href="{{route('user.rentaV')}}" class="btn btn-warning">Rentar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
