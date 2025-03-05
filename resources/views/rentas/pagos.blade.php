@extends('layouts.guest')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/c_pedido.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Realiza tu pago</h1>
        <form action="{{ route('pago.renta', ['id' => $vehiculo->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="vehiculo_id" value="{{ $vehiculo->id }}">


            <div class="col-md-12">
                <label for="dias" class="form-label">Cantidad de dias de renta</label>
                <input type="number" class="form-control" name="dias" id="dias">
            </div>

            <div class="col-md-12">
                <label for="monto" class="form-label">Monto (MX) Por Dia</label>
                <input type="number" class="form-control" id="monto" name="monto" value="{{ $vehiculo->precio_por_dia }}" readonly>
            </div>
            

            <div class="col-md-12">
                <label for="metodo" class="form-label">Método</label>
                <select id="metodo" name="metodo" class="form-select" required>
                    <option value="" disabled selected>Elige...</option>
                    <option value="Tarjeta de crédito" {{ old('metodo') == 'Tarjeta de crédito' ? 'selected' : '' }}>Tarjeta de crédito</option>
                    <option value="Paypal" {{ old('metodo') == 'Paypal' ? 'selected' : '' }}>Paypal</option>
                    <option value="Transferencia" {{ old('metodo') == 'Transferencia' ? 'selected' : '' }}>Transferencia</option>
                </select>
            </div>

            <div class="col-md-12">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required>{{ old('descripcion') }}</textarea>
            </div>

            <br><div class="col-md-12">
            <button type="submit" class="btn btn-warning">Realizar Pago</button>

            </div>
        </form>
    </div>
@endsection
