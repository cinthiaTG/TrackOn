@extends('layouts.guest')
@section('css')
    <link rel="stylesheet" href="{{asset('css/c_pedido.css')}}">
@endsection

@section('content')

    <div class="container">
        <form class="row g-3">
            <div class="col-md-12">
                <label for="descripcion_pedido" class="form-label">Descripción de pedido</label>
                <textarea type="text" class="form-control" id="direccion_origen2" name="direccion_origen2" placeholder="casa de color avellana al lado de un unicornio" required></textarea>
            </div>
            <div class="col-md-12">
                <label for="img" class="form-label">Adjunta imagen del pedido</label>
                <input type="file" class="form-control" id="img" name="img" accept="image/*" required>
            </div>

            <div class="col-md-4">
                <label for="categoria" class="form-label">Categoría</label>
                <select id="categoria" name="categoria" class="form-select" required>
                    <option value="" selected disabled>Elige...</option>
                    <option value="Mudanzas">Mudanzas</option>
                    <option value="Negocio">Negocio</option>
                    <option value="Paquetes">Paquetes</option>
                    <option value="Construccion">Construccion</option>
                    <option value="Particular">Particular</option>
                    <option value="otro">Otro</option>
                </select>
            </div>

            <div class="col-md-12">
                <h3>Ubicación de entrega</h3>
            </div>

            <div class="col-12">
                <label for="pais" class="form-label">País</label>
                <input type="text" class="form-control" id="pais" name="pais" required>

                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" required>

                <label for="codigo_postal" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" required>

                <label for="direccion_origen" class="form-label">Descripción adicional</label>
                <textarea type="text" class="form-control" id="direccion_origen2" name="direccion_origen2" placeholder="casa de color avellana al lado de un unicornio" required></textarea>
            </div>

            <div class="col-md-12">
                <h3>Ubicación de Envío</h3>
            </div>

            <div class="col-12">
                <label for="pais2" class="form-label">País</label>
                <input type="text" class="form-control" id="pais2" name="pais2" required>

                <label for="ciudad2" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad2" name="ciudad2" required>

                <label for="codigo_postal2" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="codigo_postal2" name="codigo_postal2" required>

                <label for="direccion_origen2" class="form-label">Descripción adicional</label>
                <textarea type="text" class="form-control" id="direccion_origen2" name="direccion_origen2" placeholder="casa de color avellana al lado de un unicornio" required></textarea>
                
                <label for="precio" class="form-label">Crea un precio a tu viaje</label>
                <input type="text" class="form-control" id="precio" name="precio" required>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="aceptar_terminos" required>
                    <label class="form-check-label" for="gridCheck">
                        Acepto los términos y condiciones
                    </label>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        </form>
    </div>

@endsection