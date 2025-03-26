@extends('layouts.guest')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pedidos.css') }}">

@endsection


@section('content')
<div class="container">

    @if($pedidos->isEmpty())
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
                    @foreach($pedidos as $pedido)
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
                                        <button type="button" class="btn btn-sm btn-outline-secondary" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#detallePedidoModal"
                                            data-descripcion="{{ $pedido->descripcion_pedido }}"
                                            data-cantidad="{{ $pedido->cantidad }}"
                                            data-categoria="{{ $pedido->categoria }}"
                                            data-precio="{{ number_format($pedido->precio, 2) }}"
                                            data-img="{{ asset($pedido->img_pedido) }}"
                                            data-pais-entrega="{{ $pedido->pais_entrega }}"
                                            data-ciudad-entrega="{{ $pedido->ciudad_entrega }}"
                                            data-codigo-postal-entrega="{{ $pedido->codigo_postal_entrega }}"
                                            data-direccion-entrega="{{ $pedido->direccion_entrega }}"
                                            data-pais-envio="{{ $pedido->pais_envio }}"
                                            data-ciudad-envio="{{ $pedido->ciudad_envio }}"
                                            data-codigo-postal-envio="{{ $pedido->codigo_postal_envio }}"
                                            data-direccion-envio="{{ $pedido->direccion_envio }}">
                                            📄 Detalles
                                        </button>
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
                        <img id="modal-img" src="" alt="Imagen del pedido" height=75px width = 75px>
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

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var detalleModal = document.getElementById('detallePedidoModal');
        detalleModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            
            // Obtener datos del botón
            var descripcion = button.getAttribute('data-descripcion');
            var cantidad = button.getAttribute('data-cantidad');
            var categoria = button.getAttribute('data-categoria');
            var precio = button.getAttribute('data-precio');
            var img = button.getAttribute('data-img');
            var paisEntrega = button.getAttribute('data-pais-entrega');
            var ciudadEntrega = button.getAttribute('data-ciudad-entrega');
            var codigoPostalEntrega = button.getAttribute('data-codigo-postal-entrega');
            var direccionEntrega = button.getAttribute('data-direccion-entrega');
            var paisEnvio = button.getAttribute('data-pais-envio');
            var ciudadEnvio = button.getAttribute('data-ciudad-envio');
            var codigoPostalEnvio = button.getAttribute('data-codigo-postal-envio');
            var direccionEnvio = button.getAttribute('data-direccion-envio');

            // Asignar datos al modal
            document.getElementById('modal-descripcion').textContent = descripcion;
            document.getElementById('modal-cantidad').textContent = cantidad;
            document.getElementById('modal-categoria').textContent = categoria;
            document.getElementById('modal-precio').textContent = precio;
            document.getElementById('modal-img').src = img ? img : "{{ asset('img/default.jpg') }}";
            document.getElementById('modal-pais-entrega').textContent = paisEntrega;
            document.getElementById('modal-ciudad-entrega').textContent = ciudadEntrega;
            document.getElementById('modal-codigo-postal-entrega').textContent = codigoPostalEntrega;
            document.getElementById('modal-direccion-entrega').textContent = direccionEntrega;
            document.getElementById('modal-pais-envio').textContent = paisEnvio;
            document.getElementById('modal-ciudad-envio').textContent = ciudadEnvio;
            document.getElementById('modal-codigo-postal-envio').textContent = codigoPostalEnvio;
            document.getElementById('modal-direccion-envio').textContent = direccionEnvio;
        });
    });
</script>
@endsection

