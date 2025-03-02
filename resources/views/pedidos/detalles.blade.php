@extends('layouts.guest')

@section('css')
    <link rel="stylesheet" href="{{asset('css/ticket.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@endsection

@section('content')
    <div class="ticket-container">
        <div class="ticket-header">
            Detalles del Pedido
        </div>

        <div class="ticket-item">
            <label>Descripción del Pedido:</label>
            <span>{{ $pedido->descripcion_pedido }}</span>
        </div>
        
        <div class="ticket-item">
            <label>Cantidad de Productos:</label>
            <span>{{ $pedido->cantidad }}</span>
        </div>

        <div class="ticket-item">
            <label>Categoría:</label>
            <span>{{ $pedido->categoria }}</span>
        </div>

        <div class="ticket-item">
            <label>Precio:</label>
            <span>${{ number_format($pedido->precio, 2) }}</span>
        </div>

        <div class="ticket-item">
            <label>Imagen del Pedido:</label>
            @if ($pedido->img_pedido)
                <img src="{{ asset('storage/' . $pedido->img_pedido) }}" alt="Imagen del pedido" style="max-width: 150px; border-radius: 5px;">
            @else
                <span>No disponible</span>
            @endif
        </div>

        <div class="ticket-item">
            <label>Ubicación de Entrega:</label>
            <span>{{ $pedido->pais_entrega }}, {{ $pedido->ciudad_entrega }}, {{ $pedido->codigo_postal_entrega }}</span>
        </div>

        <div class="ticket-item">
            <label>Dirección de Entrega:</label>
            <span>{{ $pedido->direccion_entrega }}</span>
        </div>

        <div class="ticket-item">
            <label>Ubicación de Envío:</label>
            <span>{{ $pedido->pais_envio }}, {{ $pedido->ciudad_envio }}, {{ $pedido->codigo_postal_envio }}</span>
        </div>

        <div class="ticket-item">
            <label>Dirección de Envío:</label>
            <span>{{ $pedido->direccion_envio }}</span>
        </div>

        <div class="ticket-footer">
            <a href="{{ route('all.pedidos')}}" class="btn">
                <i class="fas fa-arrow-left"></i> Regresar
            </a>
        </div>
        
    </div>
@endsection
