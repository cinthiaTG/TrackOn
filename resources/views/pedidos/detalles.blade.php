@extends('layouts.guest')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/ticket.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="header">
        <h2>Detalles del Pedido</h2>
        <a href="{{ route('all.pedidos') }}" class="btn-back"><i class="fas fa-arrow-left"></i> Regresar</a>
    </div>

    <div class="content">
        <div class="card pedido">
            <h3>Información del Pedido</h3>
            <ul>
                <li><strong>Descripción:</strong> {{ $pedido->descripcion_pedido }}</li>
                <li><strong>Cantidad:</strong> {{ $pedido->cantidad }}</li>
                <li><strong>Categoría:</strong> {{ $pedido->categoria }}</li>
                <li><strong>Precio:</strong> ${{ number_format($pedido->precio, 2) }} MXN</li>
            </ul>
            @if ($pedido->img_pedido)
                <div class="img-container">
                    <img src="{{ asset($pedido->img_pedido) }}" alt="Imagen del pedido">
                </div>
            @else
                <p class="no-image">Imagen no disponible</p>
            @endif
        </div>

        <div class="card ubicacion">
            <h3>Ubicación</h3>
            <ul>
                <li><strong>Entrega:</strong> {{ $pedido->pais_entrega }}, {{ $pedido->ciudad_entrega }}, {{ $pedido->codigo_postal_entrega }}</li>
                <li><strong>Dirección:</strong> {{ $pedido->direccion_entrega }}</li>
                <li><strong>Envío:</strong> {{ $pedido->pais_envio }}, {{ $pedido->ciudad_envio }}, {{ $pedido->codigo_postal_envio }}</li>
                <li><strong>Dirección:</strong> {{ $pedido->direccion_envio }}</li>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detallePedidoModal" tabindex="-1" aria-labelledby="detallePedidoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detallePedidoLabel">Detalles del Pedido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card pedido">
                    <h3>Información del Pedido</h3>
                    <ul>
                        <li><strong>Descripción:</strong> <span id="modal-descripcion"></span></li>
                        <li><strong>Cantidad:</strong> <span id="modal-cantidad"></span></li>
                        <li><strong>Categoría:</strong> <span id="modal-categoria"></span></li>
                        <li><strong>Precio:</strong> $<span id="modal-precio"></span> MXN</li>
                    </ul>
                    <div class="img-container">
                        <img id="modal-img" src="" alt="Imagen del pedido">
                    </div>
                </div>

                <div class="card ubicacion">
                    <h3>Ubicación</h3>
                    <ul>
                        <li><strong>Entrega:</strong> <span id="modal-pais-entrega"></span>, <span id="modal-ciudad-entrega"></span>, C.P. <span id="modal-codigo-postal-entrega"></span></li>
                        <li><strong>Dirección:</strong> <span id="modal-direccion-entrega"></span></li>
                        <li><strong>Envío:</strong> <span id="modal-pais-envio"></span>, <span id="modal-ciudad-envio"></span>, C.P. <span id="modal-codigo-postal-envio"></span></li>
                        <li><strong>Dirección:</strong> <span id="modal-direccion-envio"></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
