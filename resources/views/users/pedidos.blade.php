@extends('layouts.guest')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pedidos.css') }}">

@endsection


@section('content')
<div class="container">

    @if($pedido->isEmpty())
        <div class="alert alert-info text-center">No tienes pedidos aún</div>
    @else
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Pedido</th>
                        <th>Estado</th>
                        <th>Entrega</th>
                        <th>Envío</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pedido as $pedido)
                        <tr>
                            <!-- Imagen + Cantidad y Categoría -->
                            <td class="d-flex align-items-center">
                                <div class="me-3">
                                    @if($pedido->img_pedido)
                                    <img src="{{ asset($pedido->img_pedido) }}" alt="Imagen del pedido" class="rounded-circle" width="80" height="80">
                                    @else
                                        <div class="bg-secondary text-white text-center rounded-circle d-flex align-items-center justify-content-center" style="width:50px; height:50px;">?</div>
                                    @endif
                                </div>
                                <div>
                                    <strong>{{ $pedido->descripcion_pedido }}</strong>  
                                    <div class="text-muted small">{{ $pedido->cantidad }} × {{ $pedido->categoria }}</div>
                                </div>
                            </td>

                            <!-- Estado con badge -->
                            <td>
                                @php
                                    $badgeClass = match($pedido->estado) {
                                        'Pendiente' => 'warning',
                                        'Terminado' => 'success',
                                        'Aceptado' => 'primary',
                                        default => 'secondary'
                                    };
                                @endphp
                                <span class="badge bg-{{ $badgeClass }}">{{ $pedido->estado }}</span>
                            </td>

                            <!-- Dirección de Entrega -->
                            <td>
                                <div class="small text-muted">{{ $pedido->pais_entrega }}, {{ $pedido->ciudad_entrega }}</div>
                                <div class="small">C.P. {{ $pedido->codigo_postal_entrega }}</div>
                            </td>

                            <!-- Dirección de Envío -->
                            <td>
                                <div class="small text-muted">{{ $pedido->pais_envio }}, {{ $pedido->ciudad_envio }}</div>
                                <div class="small">C.P. {{ $pedido->codigo_postal_envio }}</div>
                            </td>

                            <!-- Precio -->
                            <td class="fw-bold text-primary">${{ number_format($pedido->precio, 2) }}</td>

                            <!-- Acciones -->
                            <td>
                                <div class="d-flex gap-2">
                                    @if ($pedido->estado == 'Pendiente')
                                        <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-sm btn-outline-warning">
                                            ✏ Editar
                                        </a>
                                        <form action="{{ route('pedido.destroy', $pedido->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('¿Cancelar este pedido?')">
                                                ❌ Cancelar
                                            </button>
                                        </form>
                                    @endif

                                    @if ($pedido->estado == 'Terminado')
                                        <a href="{{ route('pedido.show', $pedido->id) }}" class="btn btn-sm btn-outline-secondary">
                                            📄 Detalles
                                        </a>
                                    @endif

                                    @if ($pedido->estado == 'Aceptado')
                                        <a href="{{ route('pago.pedido', ['id' => $pedido->id]) }}" class="btn btn-sm btn-outline-primary">
                                            💳 Pagar
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
