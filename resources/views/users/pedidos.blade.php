@extends('layouts.guest')

@section('content')
<div class="container">
    
    @if($pedido->isEmpty())
        <h2>No tienes pedidos aún</h2>
    @else
    <h1>Tus Pedidos</h1>

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
    @endif
</div>
@endsection
