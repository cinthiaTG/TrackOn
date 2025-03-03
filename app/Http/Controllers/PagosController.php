<?php

namespace App\Http\Controllers;

use App\Models\PagosPedidos;
use App\Models\Pedido;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PagosController extends Controller
{
    /**
     * Mostrar la factura del pedido.
     */
    public function facturaPedido($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.pagos', compact('pedido'));
    }

    /**
     * Guardar un nuevo pago.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'pedido_id' => 'required|exists:pedido,id',
            'monto' => 'required|numeric',
            'metodo' => 'required|string',
            'descripcion' => 'required|string',
        ]);

        $pedido = Pedido::findOrFail($id);

        $pago = new PagosPedidos();
        $pago->user_id = Auth::id(); 
        $pago->pedido_id = $pedido->id;
        $pago->accion = 'Pago Pedido';
        $pago->fecha_pago = Carbon::now();
        $pago->monto = $pedido->precio;
        $pago->comision = 15; 
        $pago->metodo = $request->metodo;
        $pago->descripcion = $request->descripcion;
        $pago->estado = 'Pendiente';
        $pedido->estado = 'Pago en curso';

        Log::info('Pago Creado:', $pago->toArray());

        $pago->save();
        $pedido->save();

        return redirect()->route('all.pedidos')->with('success', 'Pago registrado con éxito');
    }
}
