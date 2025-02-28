@extends('layouts.log')

@section('content')
<div class="container">
    <h1>Empieza a crear tu viaje</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pedido as $pedido)
                <tr>
                    <td>
                        @if($pedido->img_pedido)
                            <img src="{{ asset($pedido->img_pedido) }}" alt="Imagen del pedido" width="150" height="150">
                        @else
                            Sin imagen
                        @endif
                    </td>
                    <td>
                        <dl class="row">
                            <dt class="col-sm-3">Descripción</dt>
                            <dd class="col-sm-9">{{ $pedido->descripcion_pedido }}</dd>

                            {{-- <dt class="col-sm-3">Estado</dt>
                            <dd class="col-sm-9">{{ $pedido->estado }}</dd> --}}

                            <dt class="col-sm-3">Categoría</dt>
                            <dd class="col-sm-9">{{ $pedido->categoria }}</dd>
{{-- 
                            <dt class="col-sm-3">País Entrega</dt>
                            <dd class="col-sm-9">{{ $pedido->pais_entrega }}</dd> --}}

                            <dt class="col-sm-3">Ciudad Entrega</dt>
                            <dd class="col-sm-9">{{ $pedido->ciudad_entrega }}</dd>

                            {{-- <dt class="col-sm-3">Código Postal Entrega</dt>
                            <dd class="col-sm-9">{{ $pedido->codigo_postal_entrega }}</dd>

                            <dt class="col-sm-3">País Envío</dt>
                            <dd class="col-sm-9">{{ $pedido->pais_envio }}</dd> --}}

                            <dt class="col-sm-3">Ciudad Envío</dt>
                            <dd class="col-sm-9">{{ $pedido->ciudad_envio }}</dd>
{{-- 
                            <dt class="col-sm-3">Código Postal Envío</dt>
                            <dd class="col-sm-9">{{ $pedido->codigo_postal_envio }}</dd> --}}

                            <dt class="col-sm-3">Precio</dt>
                            <dd class="col-sm-9">${{ number_format($pedido->precio, 2) }}</dd>
                        </dl>
                    </td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm">Tomar</a><br><br>
                        <a href="https://www.google.com.mx/maps/@19.083952,-98.2094707,3a,75y,317.52h,102.62t/data=!3m7!1e1!3m5!1sHhwNXDwidiqyvCyxXl7Wtg!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D-12.624579989235514%26panoid%3DHhwNXDwidiqyvCyxXl7Wtg%26yaw%3D317.5170227572902!7i13312!8i6656?entry=ttu&g_ep=EgoyMDI1MDIyNS4wIKXMDSoASAFQAw%3D%3D" class="btn btn-info btn-sm">Ver ruta</a><br><br>
                        <a href="#" class="btn btn-info btn-sm">Detalles</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
