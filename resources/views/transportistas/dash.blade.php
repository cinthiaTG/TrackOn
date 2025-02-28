@extends('layouts.log')

@section('content')
<div class="container">
    <h1>Bienvenido transportista!</h1>
    <div class="container-fluid py-2">
        <div class="row">
          <div class="ms-3">
            <h3 class="mb-4">
                "Un nuevo día, una nueva ruta, una nueva oportunidad. ¡Arranca con energía y llega siempre más lejos!"
            </h3>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-2 ps-3">
                <div class="d-flex justify-content-between">
                  <div>
                    <p class="text-sm mb-0 text-capitalize">Ganancias</p>
                    <h4 class="mb-0">$53k</h4>
                  </div>
                  <div class="icon icon-md icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-lg">
                    <i class="material-symbols-rounded opacity-10">viaje</i>
                  </div>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-2 ps-3">
                <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+55% </span>than last week</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-2 ps-3">
                <div class="d-flex justify-content-between">
                  <div>
                    <p class="text-sm mb-0 text-capitalize">Cantidad Pedidos</p>
                    <h4 class="mb-0">5</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-2 ps-3">
                <div class="d-flex justify-content-between">
                  <div>
                    <p class="text-sm mb-0 text-capitalize">Estado</p>
                    <h4 class="mb-0">En ruta</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6">
            <div class="card">
              <div class="card-header p-2 ps-3">
                <div class="d-flex justify-content-between">
                  <div>
                    <p class="text-sm mb-0 text-capitalize">Tu cartera</p>
                    <h4 class="mb-0">$103,430</h4>
                  </div>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <div class="card-footer p-2 ps-3">
                <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+5% </span>than last month</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        {{-- <div class="row mb-4"> --}}
          <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
            <div class="card">
              <div class="card-header pb-0">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h3>Viaje 12</h3>
                    <p class="text-sm mb-0">
                      <i class="fa fa-check text-info" aria-hidden="true"></i>
                      <span class="font-weight-bold ms-1">30 done</span> this month
                    </p>
                  </div>
                  <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="dropdown float-lg-end pe-4">
                      <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-ellipsis-v text-secondary"></i>
                      </a>
                      <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pedido</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ruta</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado pedido</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Completion</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div>
                              <img src="{{asset('/storage/img/pedidos/theOffice.jpg')}}" class="avatar avatar-sm me-3" alt="xd" width="50" height="50">
                            </div>
                            
                          </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">pedido1ID</h6>
                              </div>
                        </td>
                        <td>
                          <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vol.</P>
                          <button type="button" class="btn btn-success">ver ruta</button>

                        </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> En camino </span>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                              </button>
                              
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Entregado</a>
                              <a class="dropdown-item" href="#">En ruta</a>
                              <a class="dropdown-item" href="#">Pagado</a>
                              <a class="dropdown-item" href="#">Recogiendo Pedido</a>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">60%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="{{asset('/storage/img/pedidos/theOffice.jpg')}}" class="avatar avatar-sm me-3" alt="xd" width="50" height="50">
                              </div>
                              
                            </div>
                          </td>
                          <td>
                              <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">pedido1ID</h6>
                                </div>
                          </td>
                          <td>
                            <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vol.</P>
                            <button type="button" class="btn btn-success">ver ruta</button>

                          </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> Pagado </span>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                              </button>
                              
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Entregado</a>
                              <a class="dropdown-item" href="#">En ruta</a>
                              <a class="dropdown-item" href="#">Pagado</a>
                              <a class="dropdown-item" href="#">Recogiendo Pedido</a>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">10%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="{{asset('/storage/img/pedidos/theOffice.jpg')}}" class="avatar avatar-sm me-3" alt="xd" width="50" height="50">
                              </div>
                              
                            </div>
                          </td>
                          <td>
                              <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">pedido1ID</h6>
                                </div>
                          </td>
                          <td>
                            <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vol.</P>
                            <button type="button" class="btn btn-success">ver ruta</button>

                          </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> Entregado </span>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                              </button>
                              
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Entregado</a>
                              <a class="dropdown-item" href="#">En ruta</a>
                              <a class="dropdown-item" href="#">Pagado</a>
                              <a class="dropdown-item" href="#">Recogiendo Pedido</a>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="{{asset('/storage/img/pedidos/theOffice.jpg')}}" class="avatar avatar-sm me-3" alt="xd" width="50" height="50">
                              </div>
                              
                            </div>
                          </td>
                          <td>
                              <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">pedido1ID</h6>
                                </div>
                          </td>
                          <td>
                            <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vol.</P>
                            <button type="button" class="btn btn-success">ver ruta</button>

                          </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold">Entregado </span>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                              </button>
                              
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Entregado</a>
                              <a class="dropdown-item" href="#">En ruta</a>
                              <a class="dropdown-item" href="#">Pagado</a>
                              <a class="dropdown-item" href="#">Recogiendo Pedido</a>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">100%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-success w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                              <div>
                                <img src="{{asset('/storage/img/pedidos/theOffice.jpg')}}" class="avatar avatar-sm me-3" alt="xd" width="50" height="50">
                              </div>
                              
                            </div>
                          </td>
                          <td>
                              <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">pedido1ID</h6>
                                </div>
                          </td>
                          <td>
                            <P>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vol.</P>
                            <button type="button" class="btn btn-success">ver ruta</button>

                          </td>
                        <td class="align-middle text-center text-sm">
                          <span class="text-xs font-weight-bold"> Recogiendo Pedido </span>
                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                              </button>
                              
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Entregado</a>
                              <a class="dropdown-item" href="#">En ruta</a>
                              <a class="dropdown-item" href="#">Pagado</a>
                              <a class="dropdown-item" href="#">Recogiendo Pedido</a>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="progress-wrapper w-75 mx-auto">
                            <div class="progress-info">
                              <div class="progress-percentage">
                                <span class="text-xs font-weight-bold">25%</span>
                              </div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card h-100">
              <div class="card-header pb-0">
                <h6>Orders overview</h6>
              </div>
              <div class="card-body p-3">
                <div class="timeline timeline-one-side">
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-symbols-rounded text-success text-gradient">notifications</i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Pago concretado #112334</h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-symbols-rounded text-danger text-gradient">code</i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-symbols-rounded text-info text-gradient">message</i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                      <i class="material-symbols-rounded text-warning text-gradient">credit_card</i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="footer py-4  ">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                  © <script>
                    document.write(new Date().getFullYear())
                  </script>2025,
                  made with <i class="fa fa-heart"></i> by
                  <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Si</a>
                  for a better web.
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
</div>
@endsection
