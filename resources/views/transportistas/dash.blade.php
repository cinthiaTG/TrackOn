@extends('layouts.log')

@section('content')
<div class="container mt-4">
    <div class="card bg-light shadow-sm p-4 text-center">
        <h1 class="text-primary">¡Bienvenido, Transportista!</h1>
        <h3 class="text-muted fst-italic">
            "Un nuevo día, una nueva ruta, una nueva oportunidad. ¡Arranca con energía y llega siempre más lejos!"
        </h3>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-black text-left">
                    <h3 class="mb-0">Viaje 12</h3>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border border-primary text-center">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Pedido</th>
                                    <th>ID</th>
                                    <th>Info</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 5; $i++)
                                <tr class="bg-light">
                                    <td>
                                        <img src="{{ asset('/storage/img_pedidos/pedido1.jpg') }}" class="rounded-circle" alt="Pedido" width="70" height="70">
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-black">1255477</h6>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning text-dark">Ver más</button>
                                    </td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-4 py-3 bg-light text-center">
        <div class="container">
            <span class="text-muted">© {{ date('Y') }}, Hecho con <i class="fa fa-heart text-danger"></i> para una mejor web.</span>
        </div>
    </footer>
</div>
@endsection
