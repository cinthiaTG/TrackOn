@extends('layouts.log')
@section('css')
<link rel="stylesheet" href="{{ asset('css/pedidos.css') }}">
@endsection

@section('content')

<div class="container">
    <div class="col-12 mt-4">
        <div class="mb-5 ps-3">
            <h3>Tus pedidos</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Pedido</th>
                        <th>Ubicación de Entrega</th>
                        <th>Ubicación de Envío</th>
                        <th>Precio (MX)</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pedidos->where('estado', 'Aceptado') as $pedido)
                    <tr>
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
                        <td class="fw-bold text-danger">${{ number_format($pedido->precio, 2) }}</td>

                        <!-- Acciones -->
                        <td>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-danger">Cancelar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>  
    </div>

    <div class="col-12 mt-4">
        <div class="mb-5 ps-3">
            <h3 class="mb-1">Pedidos Disponibles</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Pedido</th>
                        <th>Ubicación de Entrega</th>
                        <th>Ubicación de Envío</th>
                        <th>Precio (MX)</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($pedidos->where('estado', 'Pendiente') as $pedidou)
                    <tr>
                        <!-- Imagen + Cantidad y Categoría -->
                        <td class="d-flex align-items-center">
                            <div class="me-3">
                                @if($pedidou->img_pedido)
                                    <img src="{{ asset($pedidou->img_pedido) }}" alt="Imagen del pedido" class="rounded-circle" width="80" height="80">
                                @else
                                    <div class="bg-secondary text-white text-center rounded-circle d-flex align-items-center justify-content-center" style="width:50px; height:50px;">?</div>
                                @endif
                            </div>
                            <div>
                                <strong>{{ $pedidou->descripcion_pedido }}</strong>  
                                <div class="text-muted small">{{ $pedidou->cantidad }} × {{ $pedidou->categoria }}</div>
                            </div>
                        </td>

                        <!-- Dirección de Entrega -->
                        <td>
                            <div class="small text-muted">{{ $pedidou->pais_entrega }}, {{ $pedidou->ciudad_entrega }}</div>
                            <div class="small">C.P. {{ $pedidou->codigo_postal_entrega }}</div>
                        </td>

                        <!-- Dirección de Envío -->
                        <td>
                            <div class="small text-muted">{{ $pedidou->pais_envio }}, {{ $pedidou->ciudad_envio }}</div>
                            <div class="small">C.P. {{ $pedidou->codigo_postal_envio }}</div>
                        </td>

                        <!-- Precio -->
                        <td class="fw-bold text-danger">${{ number_format($pedidou->precio, 2) }}</td>

                        <!-- Acciones -->
                        <td>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-success">Aceptar</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
