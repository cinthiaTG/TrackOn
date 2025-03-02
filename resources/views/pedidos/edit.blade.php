@extends('layouts.guest')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/c_pedido.css') }}">
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="col-md-12">
                <label for="descripcion_pedido" class="form-label">Descripción de pedido</label>
                <textarea class="form-control" id="descripcion_pedido" name="descripcion_pedido" placeholder="funkos de 30cm sin empaquetar" required>{{ old('descripcion_pedido', $pedido->descripcion_pedido) }}</textarea>
                @error('descripcion_pedido')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12">
                <label for="cantidad" class="form-label">Cantidad de productos</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ old('cantidad', $pedido->cantidad) }}">
                @error('cantidad')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-12">
                <label for="img_pedido" class="form-label">Adjunta imagen del pedido</label>
                <input type="file" class="form-control" id="img_pedido" name="img_pedido" accept="image/*">
                @error('img_pedido')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                @if ($pedido->img_pedido)
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $pedido->img_pedido) }}" alt="Imagen del pedido" style="max-width: 150px;">
                    </div>
                @endif
            </div>

            <div class="col-md-4">
                <label for="categoria" class="form-label">Categoría</label>
                <select id="categoria" name="categoria" class="form-select" required>
                    <option value="" disabled>Elige...</option>
                    <option value="Mudanzas" {{ old('categoria', $pedido->categoria) == 'Mudanzas' ? 'selected' : '' }}>Mudanzas</option>
                    <option value="Negocio" {{ old('categoria', $pedido->categoria) == 'Negocio' ? 'selected' : '' }}>Negocio</option>
                    <option value="Paquetes" {{ old('categoria', $pedido->categoria) == 'Paquetes' ? 'selected' : '' }}>Paquetes</option>
                    <option value="Construccion" {{ old('categoria', $pedido->categoria) == 'Construccion' ? 'selected' : '' }}>Construcción</option>
                    <option value="Particular" {{ old('categoria', $pedido->categoria) == 'Particular' ? 'selected' : '' }}>Particular</option>
                    <option value="Otro" {{ old('categoria', $pedido->categoria) == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
                @error('categoria')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-12">
                <h3>Ubicación de entrega</h3>
            </div>

            <div class="col-12">
                <label for="pais_entrega" class="form-label">País</label>
                <input type="text" class="form-control" id="pais_entrega" name="pais_entrega" required value="{{ old('pais_entrega', $pedido->pais_entrega) }}">
                @error('pais_entrega')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="ciudad_entrega" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad_entrega" name="ciudad_entrega" required value="{{ old('ciudad_entrega', $pedido->ciudad_entrega) }}">
                @error('ciudad_entrega')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="codigo_postal_entrega" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="codigo_postal_entrega" name="codigo_postal_entrega" required value="{{ old('codigo_postal_entrega', $pedido->codigo_postal_entrega) }}">
                @error('codigo_postal_entrega')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="direccion_entrega" class="form-label">Descripción adicional</label>
                <textarea class="form-control" id="direccion_entrega" name="direccion_entrega" placeholder="casa de color avellana al lado de un unicornio" required>{{ old('direccion_entrega', $pedido->direccion_entrega) }}</textarea>
                @error('direccion_entrega')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-12">
                <h3>Ubicación de Envío</h3>
            </div>

            <div class="col-12">
                <label for="pais_envio" class="form-label">País</label>
                <input type="text" class="form-control" id="pais_envio" name="pais_envio" required value="{{ old('pais_envio', $pedido->pais_envio) }}">
                @error('pais_envio')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="ciudad_envio" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad_envio" name="ciudad_envio" required value="{{ old('ciudad_envio', $pedido->ciudad_envio) }}">
                @error('ciudad_envio')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="codigo_postal_envio" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="codigo_postal_envio" name="codigo_postal_envio" required value="{{ old('codigo_postal_envio', $pedido->codigo_postal_envio) }}">
                @error('codigo_postal_envio')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="direccion_envio" class="form-label">Descripción adicional</label>
                <textarea class="form-control" id="direccion_envio" name="direccion_envio" placeholder="casa de color avellana al lado de un unicornio" required>{{ old('direccion_envio', $pedido->direccion_envio) }}</textarea>
                @error('direccion_envio')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="precio" class="form-label">Crea un precio a tu viaje</label>
                <input type="number" class="form-control" id="precio" name="precio" required step="0.01" value="{{ old('precio', $pedido->precio) }}">
                @error('precio')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="aceptar_terminos" value="1" {{ old('aceptar_terminos', $pedido->aceptar_terminos) == '1' ? 'checked' : '' }} required>
                    <label class="form-check-label" for="gridCheck">
                        Acepto los términos y condiciones
                    </label>
                </div>
                @error('aceptar_terminos')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-warning">Actualizar Pedido</button>
            </div>
        </form>
    </div>
@endsection
