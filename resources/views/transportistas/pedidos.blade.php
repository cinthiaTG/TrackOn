@extends('layouts.log')

@section('content')
<div class="container">
    <div class="col-12 mt-4">
        <div class="mb-5 ps-3">
            <h3 class="mb-1">Viaje 12</h3>
        </div>

        <div class="row">
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Desccripcion</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">cantidad</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Categoria</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pedidos->where('estado', 'Pendiente') as $pedidos)
                            <tr>
                               
                                <td>{{ $pedidos->descripcion_pedido }}</td>
                                <td>{{ $pedidos->cantidad }}</td>
                                <td>{{ $pedidos->categoria }}</td>
                                <td>
                                    @if($pedidos->img_pedido)
                                        <img src="{{ asset($pedidos->img_pedido) }}" alt="Imagen del pedido" width="100" height="100">
                                    @else
                                        Sin imagen
                                    @endif
                                </td>

                            </tr>
                        @endforeach
                        
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection