@extends('layouts.guest')

@section('content')
<div class="container">
    <h1>Lista de Pedidos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Imagen</th>
                {{-- <th>ID</th> --}}
                <th>Estado</th>
                <th>Descripción</th>
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
                    <div class="imagen">
                        <td>
                            @if($pedido->img_pedido)
                                <img src="{{ asset($pedido->img_pedido) }}" alt="Imagen del pedido" width="250" height="250">
                            @else
                                Sin imagen
                            @endif
                        </td>
                    </div>
                    {{-- <td>{{ $pedido->id }}</td> --}}
                    <td>{{ $pedido->estado }}</td>
                    <td>{{ $pedido->descripcion_pedido }}</td>
                    <td>{{ $pedido->categoria }}</td>
                    
                    <td>{{ $pedido->pais_entrega }}</td>
                    <td>{{ $pedido->ciudad_entrega }}</td>
                    <td>{{ $pedido->codigo_postal_entrega }}</td>
                    <td>{{ $pedido->pais_envio }}</td>
                    <td>{{ $pedido->ciudad_envio }}</td>
                    <td>{{ $pedido->codigo_postal_envio }}</td>
                    <td>${{ number_format($pedido->precio, 2) }}</td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
