@extends('layouts.guest')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/vehiculos.css')}}">
@endsection

@section('content')
<div class="container">
   
<h1>Renta de vehiculos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Vehiculo</th>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Placa</th>
                <th>Transmicion</th>
                <th>Precio(MX)</th>
                <th>disponibilidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculo as $vehiculo)
                <tr>
                   <div class="imagen">
                    <td>
                        @if($vehiculo->img_vehiculo)
                            <img src="{{ asset($vehiculo->img_vehiculo) }}" alt="Imagen del vehiculo" width="280" height="150">
                        @else
                            Sin imagen
                        @endif
                    </td>
                   </div>
                    <td>{{ $vehiculo->id }}</td>
                    <td>{{ $vehiculo->marca }}</td>
                    <td>{{ $vehiculo->modelo }}</td>
                    <td>{{ $vehiculo->año }}</td>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->transmision }}</td>
                    <td>{{ $vehiculo->precio_por_dia }}</td>
                    <td>{{ $vehiculo->disponibilidad }}</td>
                    
                    <td>
                        <a href="#" class="btn btn-info btn-sm">Ver</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection