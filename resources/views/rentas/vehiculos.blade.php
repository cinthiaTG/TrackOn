@extends('layouts.guest')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/vehiculos.css') }}">
@endsection

@section('content')
<div class="container">
    <h1>Renta de vehículos</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Vehículo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Placa</th>
                <th>Transmisión</th>
                <th>Precio (MX)</th>
                <th>Disponibilidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculo->where('disponibilidad', true) as $vehiculo)
                <tr>
                    <td>
                        @if($vehiculo->img_vehiculo)
                            <img src="{{ asset($vehiculo->img_vehiculo) }}" alt="Imagen del vehículo" width="280" height="150">
                        @else
                            Sin imagen
                        @endif
                    </td>
                    <td>{{ $vehiculo->marca }}</td>
                    <td>{{ $vehiculo->modelo }}</td>
                    <td>{{ $vehiculo->año }}</td>
                    <td>{{ $vehiculo->placa }}</td>
                    <td>{{ $vehiculo->transmision }}</td>
                    <td>{{ $vehiculo->precio_por_dia }}</td>
                    <td>{{ $vehiculo->disponibilidad ? 'Disponible' : 'No disponible' }}</td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm">Rentar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
