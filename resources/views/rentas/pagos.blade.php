@extends('layouts.guest')

@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/c_pedido.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/pagos.css') }}">
@endsection

@section('content')
    <div class="container">
        {{-- <div class="card"> --}}
           
            <div class="back-button">
                <a href="{{ route('user.rentaV') }}" class="btn btn-secondary">← Volver</a>
            </div>
            
            <div class="card-top border-bottom text-center">
               
                <div class="header" id="logo">TrackOn</div> <!-- Cambié el span a un div con la clase header -->
            </div>

            <div class="card-body">

                        <!-- Show validation errors if there are any -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                <form action="{{ route('pago.renta', ['id' => $vehiculo->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="vehiculo_id" value="{{ $vehiculo->id }}">

                    <div class="row">
                        <div class="col-md-7">
                            <div class="left border">

                                    
                                <div class="form-label">Cantidad de días a rentar:</div>
                                <input type="number" class="form-control" name="dias" id="dias" required>

                                <div class="header">Payment</div> <!-- Cambié el span a un div con la clase header -->
                                <div class="icons">
                                    <img src="https://img.icons8.com/color/48/000000/visa.png"/>
                                    <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png"/>
                                    <img src="https://img.icons8.com/color/48/000000/maestro.png"/>
                                </div>

                                <div class="form-label">Cardholder's name:</div> <!-- Cambié el span a div con la clase form-label -->
                                <input type="text" class="form-control" name="cardholder_name" required>

                                <div class="form-label">Card Number:</div> <!-- Cambié el span a div con la clase form-label -->
                                <input type="text" class="form-control" name="card_number" required>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-label">Expiry date:</div> <!-- Cambié el span a div con la clase form-label -->
                                        <input type="text" class="form-control"  name="expiry_day" placeholder="MM/YY" pattern="(0[1-9]|1[0-2])\/\d{2}" required>
                                    </div>
{{-- 
                                    <label for="expiry_day">Fecha de Expiración (MM/YY)</label>
<input type="text" id="expiry_day" name="expiry_day" placeholder="MM/YY" pattern="(0[1-9]|1[0-2])\/\d{2}" required> --}}



                                    <div class="col-6">
                                        <div class="form-label">CVV:</div> <!-- Cambié el span a div con la clase form-label -->
                                        <input type="text" class="form-control" name="cvv" required>
                                    </div>
                                </div>

                                {{-- <input type="checkbox" id="save_card" class="align-left">
                                <label for="save_card">Save card details to wallet</label>   --}}
                            </div>                        
                        </div>

                        <div class="col-md-5">
                            <div class="right border">
                                <div class="header">Order Summary</div>                            
                                <div class="row item">
                                    <div class="col-4 align-self-center">
                                        <img class="img-fluid" src="{{ asset($vehiculo->img_vehiculo) }}">
                                    </div>
                                    <div class="col-8">
                                        <div class="row">${{ $vehiculo->precio_por_dia }}</div>
                                        <div class="row text-muted">Be Legendary Lipstick-Sheer Navy Cream</div>
                                        <div class="row">Qty: <div id="resumenDias">0</div></div> <!-- Cambié el span a un div -->
                                    </div>
                                </div>                            
                                <hr>
                                <div class="row lower">
                                    <div class="col text-left">Precio por día (MXN)</div>
                                    <div class="col text-right">${{ $vehiculo->precio_por_dia }}</div>
                                </div>
                                <div class="row lower">
                                    <div class="col text-left">Comisión</div>
                                    <div class="col text-right">$<div id="totalComision">0.00</div></div> <!-- Cambié el span a un div -->
                                </div>
                                <div class="row lower">
                                    <div class="col text-left"><b>Total a pagar</b></div>
                                    <div class="col text-right">$<div id="totalMonto">0.00</div></div> <!-- Cambié el span a un div -->
                                </div>
                                <button type="submit" class="btn btn-warning">Realizar Pago</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        {{-- </div> --}}

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                let diasInput = document.getElementById("dias");
                let totalMontoSpan = document.getElementById("totalMonto");
                let totalComisionSpan = document.getElementById("totalComision");
                let resumenDias = document.getElementById("resumenDias");
                let precioPorDia = parseFloat("{{ $vehiculo->precio_por_dia }}");

                function calcularTotal() {
                    let dias = parseInt(diasInput.value) || 0;
                    let comision = dias * 15;
                    let total = (dias * precioPorDia) + comision;

                    totalComisionSpan.textContent = comision.toFixed(2);
                    totalMontoSpan.textContent = total.toFixed(2);
                    resumenDias.textContent = dias;
                }

                diasInput.addEventListener("input", calcularTotal);
            });
        </script>
    </div>
@endsection
