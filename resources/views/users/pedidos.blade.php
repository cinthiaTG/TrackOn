@extends('layouts.guest')

@section('content')
<div class="container">
    
    @if($pedido->isEmpty())
        <h2>No tienes pedidos aún</h2>
    @else
    <h2>Tus Pedidos</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Estado</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Categoría</th>
                    <th>País de Entrega</th>
                    <th>Ciudad de Entrega</th>
                    <th>Código Postal de Entrega</th>
                    <th>País de Envío</th>
                    <th>Ciudad de Envío</th>
                    <th>Código Postal de Envío</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedido as $pedido)
                    <tr>
                        <td>
                            @if($pedido->img_pedido)
                                <img src="{{ asset('storage/'.ltrim($pedido->img_pedido, '/')) }}" alt="Imagen del pedido" width="110" height="110">
                            @else
                                Sin imagen
                            @endif
                        </td>
                        <td>{{ $pedido->estado }}</td>
                        <td>{{ $pedido->descripcion_pedido }}</td>
                        <td>{{ $pedido->cantidad }}</td>
                        <td>{{ $pedido->categoria }}</td>
                        <td>{{ $pedido->pais_entrega }}</td>
                        <td>{{ $pedido->ciudad_entrega }}</td>
                        <td>{{ $pedido->codigo_postal_entrega }}</td>
                        <td>{{ $pedido->pais_envio }}</td>
                        <td>{{ $pedido->ciudad_envio }}</td>
                        <td>{{ $pedido->codigo_postal_envio }}</td>
                        <td>${{ number_format($pedido->precio, 2) }}</td>
                        <td>
                            {{-- ver ruta solo la usare ppara los estados de transcurso y asi --}}
                            {{-- <a href="#" class="btn btn-warning">Ver ruta</a> <br><br> --}}

                            @if ($pedido->estado=='Pendiente')
                            <a  href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-warning">Editar</a>
                            {{-- <a  href="#" class="btn btn-warning">Editar</a> --}}

                            <form action="{{ route('pedido.destroy', $pedido->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <br><button type="submit" class="btn btn-outline-danger" onclick="return confirm('¿Estás seguro de cancelar este pedido?')">Cancelar</button>

                            </form>
                            @endif

                            @if ($pedido->estado=='Terminado')
                            <a href="{{route('pedido.show', $pedido->id)}}" class="btn btn-secondary">Detalles</a>
                            @endif

                            @if ($pedido->estado=='Aceptado')
                            <a href="{{ route('pago.pedido', ['id' => $pedido->id]) }}" class="btn btn-outline-primary">$ Pagar</a>
                            @endif
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <br><h2>Tus Rentas</h2>





        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Año</th>
                    <th>Placa</th>
                    <th>Transmisión</th>
                    <th>Precio (MX) <br> P/dia</th>
                    <th>Dias de renta</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vehiculo->where('disponibilidad', false) as $v)
                @php
                    $renta = $rentas->where('vehiculo_id', $v->id)->first(); // Obtiene la primera renta asociada
                @endphp
            
                @if($renta)
                    <tr>
                        <td>
                            @if($v->img_vehiculo)
                                <img src="{{ asset($v->img_vehiculo) }}" alt="Imagen del vehículo" width="280" height="150">
                            @else
                                Sin imagen
                            @endif
                        </td>
                        <td>{{ $v->marca }}</td>
                        <td>{{ $v->modelo }}</td>
                        <td>{{ $v->año }}</td>
                        <td>{{ $v->placa }}</td>
                        <td>{{ $v->transmision }}</td>
                        <td>{{ $v->precio_por_dia }}</td>
                        <td>{{ $renta->dias }}</td>
                        <td>{{ $renta->dias * $v->precio_por_dia }}</td>
                        <td>
                            <a href="#" class="btn btn-secondary">Detalles</a>
                        </td>
                    </tr>
                @endif
            @endforeach
            
            
            </tbody>
        </table>
    @endif
</div>
@endsection
