@extends('layouts.log')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/dTransportista.css') }}">

@endsection

@section('content')
<div class="container mt-4">
    <!-- Sección de bienvenida -->
    <div class="card bg-light shadow-sm p-4 text-center mb-4">
        <h1>¡Bienvenido, Transportista!</h1>
        <h3 class="text-muted fst-italic">
            "Un nuevo día, una nueva ruta, una nueva oportunidad. ¡Arranca con energía y llega siempre más lejos!"
        </h3>
    </div>

    <!-- Sección de viaje actual -->
    <div class="card shadow-sm mb-4">
        <div class="card-header text-light d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Viaje 12</h3>
            <button type="button" class="btn btn-warning btn-sm">Ver detalles</button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Pedido</th>
                            <th>ID</th>
                            <th>Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 0; $i < 5; $i++)
                            <tr class="bg-light">
                                <td>
                                    <img src="{{ asset('/storage/img_pedidos/pedido1.jpg') }}" class="rounded-circle" alt="Pedido" width="70" height="70">
                                </td>
                                <td>
                                    <h6 class="mb-0 text-black">1255477</h6>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning text-light btn-sm">Ver más</button>
                                </td>
                            </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Sección del pie de página -->
    <footer class="footer py-3 bg-light text-center mt-4">
        <div class="container">
            <span class="text-muted">© {{ date('Y') }}</span>
        </div>
    </footer>
</div>
@endsection