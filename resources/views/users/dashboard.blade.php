@extends('layouts.guest')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
@endsection

@section('content')
<div class="container py-5">
    <!-- Título principal de la página -->
    <div class="row mb-5 text-center">
        <div class="col-12">
            <h1 class="display-3 font-weight-bold">Bienvenido a TrackOn</h1>
            <p class="lead">Transformamos y optimizamos el proceso de traslados de productos, mudanzas, contruccion y más facilitando los servicios de transporte para que sean más eficientes y accesibles.</p>
        </div>
    </div>

    <!-- Tarjetas de opciones -->
    <div class="row justify-content-center">

        <!-- Crear un viaje -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-lg border-light">
                <img src="{{ asset('storage/img_generales/envios.jpg') }}" class="card-img-top img-fluid rounded-top" alt="Crear un viaje">
                <div class="card-body text-center">
                    <h5 class="card-title font-weight-bold">Crear un viaje</h5>
                    <p class="card-text">Crea un viaje para que nuestro equipo de transporte se encargue del envío de tus productos.</p>
                    <a href="{{ route('user.Cviaje') }}" class="btn btn-warning btn-lg">Crea tu viaje</a>
                </div>
            </div>
        </div>

        <!-- Información sobre los servicios -->
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card shadow-lg border-light">
                <div class="card-body text-center">
                    <h5 class="card-title font-weight-bold">Recibe ayuda con tus pedidos</h5>
                    <p class="card-text">Ofrecemos soluciones de transporte confiables y eficientes para empresas y usuarios particulares. ¡Haz que tu mudanza sea más fácil y rápida!</p>
                    <!-- Puedes descomentar el siguiente botón si es necesario -->
                    <!-- <a href="#" class="btn btn-info btn-lg">Más sobre nuestros servicios</a> -->
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class=" py-2 mt-2">
    <div class="container text-center">
        <p class="mb-0">&copy; 2025 TrackOn - Todos los derechos reservados.</p>
    </div>
</footer>
@endsection