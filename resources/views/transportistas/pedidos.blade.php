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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pedido</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ruta</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado pedido</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 5; $i++)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="{{ asset('/storage/img/pedidos/theOffice.jpg') }}" class="avatar avatar-sm me-3" alt="Pedido" width="50" height="50">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">pedido{{ $i }}ID</h6>
                                    </div>
                                </td>
                                <td>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vol.</p>
                                    <button type="button" class="btn btn-success">Ver ruta</button>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="text-xs font-weight-bold">{{ $i % 2 == 0 ? 'Pagado' : 'Terminado' }}</span>
                                </td>
                                <td class="align-middle">

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
@endsection