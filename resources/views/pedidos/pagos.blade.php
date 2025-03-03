@extends('layouts.guest')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/c_pedido.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>Realiza tu pago</h1>
        <form action="{{ route('pago.pedido', ['id' => $pedido->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">

            <div class="col-md-12">
                <label for="monto" class="form-label">Monto (MX)</label>
                <input type="number" class="form-control" id="monto" name="monto" value="{{ $pedido->precio }}" readonly>
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

            <button type="submit" class="btn btn-primary mt-3">Realizar Pago</button>
        </form>
    </div>
@endsection
