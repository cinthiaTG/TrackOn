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

        <div class="card pago">
            <h3>Detalles del Pago</h3>
            @foreach ($pagos as $pago)
                <ul>
                    <li><strong>Acción:</strong> {{ $pago->accion }}</li>
                    <li><strong>Fecha de Pago:</strong> {{ \Carbon\Carbon::parse($pago->fecha_pago)->format('Y-m-d') }}</li>
                    <li><strong>Monto:</strong> ${{ number_format($pago->monto, 2) }} MXN</li>
                    <li><strong>Comisión:</strong> ${{ number_format($pago->comision, 2) }} MXN</li>
                    <li><strong>Método:</strong> {{ $pago->metodo }}</li>
                    <li><strong>Descripción:</strong> {{ $pago->descripcion }}</li>
                    <li><strong>Estado:</strong> {{ $pago->estado }}</li>
                </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection
