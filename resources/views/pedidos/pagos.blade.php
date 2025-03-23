@extends('layouts.guest')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/pagoped.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="header">
        <h1 class="page-title">Realiza tu pago</h1>
    </div>

    <form action="{{ route('pago.pedido', ['id' => $pedido->id]) }}" method="POST" class="payment-form">
        @csrf
        <input type="hidden" name="pedido_id" value="{{ $pedido->id }}">

        <!-- Monto -->
        <div class="form-group">
            <label for="monto" class="form-label">Monto (MX)</label>
            <input type="number" class="form-control" id="monto" name="monto" value="{{ $pedido->precio }}" readonly>
        </div>

        <!-- Método de Pago -->
        <div class="form-group">
            <label for="metodo" class="form-label">Método de pago</label>
            <select id="metodo" name="metodo" class="form-select" required>
                <option value="" disabled selected>Elige...</option>
                <option value="Tarjeta de crédito" {{ old('metodo') == 'Tarjeta de crédito' ? 'selected' : '' }}>Tarjeta de crédito</option>
                <option value="Paypal" {{ old('metodo') == 'Paypal' ? 'selected' : '' }}>Paypal</option>
                <option value="Transferencia" {{ old('metodo') == 'Transferencia' ? 'selected' : '' }}>Transferencia</option>
            </select>
        </div>

        <!-- Descripción -->
        <div class="form-group">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required>{{ old('descripcion') }}</textarea>
        </div>

        <!-- Botón de Submit -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Realizar Pago</button>
        </div>
    </form>
</div>
@endsection
