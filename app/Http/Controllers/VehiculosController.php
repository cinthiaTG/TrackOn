<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Models\PagoVehiculos;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculo = Vehiculo::all();
        return (view('rentas.vehiculos', compact('vehiculo')));
    }

    public function facturaRenta($id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        return view('rentas.pagos', compact('vehiculo'));
    }

    /**
     * Guardar un nuevo pago. pedido
     */
    public function rentaStore(Request $request, $id)
    {
        $request->validate([
            'vehiculo_id' => 'required|exists:vehiculo,id',
            'dias' => 'required|numeric|min:1|not_in:0',
            'cardholder_name' => 'required|string|min:3',
            'card_number' => 'required|string|size:16|regex:/^[0-9]+$/',  // Only numeric card number
            'expiry_day' => ['required', 'regex:/^(0[1-9]|1[0-2])\/\d{2}$/'],  
            'cvv' => 'required|digits:3|numeric',  // Ensuring CVV is numeric
        ]);
    
        $vehiculo = Vehiculo::findOrFail($id);
    
        $pago = new PagoVehiculos();
        $pago->user_id = Auth::id();
        $pago->vehiculo_id = $vehiculo->id;
        $pago->dias = $request->dias;
        $pago->fecha_pago = Carbon::now();
        $pago->monto = $vehiculo->precio_por_dia * $pago->dias;
        $pago->comision = 15 * $pago->dias;
        $pago->cardholder_name = $request->cardholder_name;
        $pago->card_number = (string) $request->card_number;
        list($mes, $anio) = explode('/', $request->expiry_day);
        $pago->expiry_day = "$mes/$anio"; // Guardar como 11/26
       
        $pago->cvv = $request->cvv;
        $pago->estado = 'Pendiente';
    
        $vehiculo->disponibilidad = 0;
    
        Log::info('Pago Creado:', $pago->toArray());
    
        $pago->save();
        $vehiculo->save();
    
        return redirect()->route('all.pedidos')->with('success', 'Pago registrado con éxito');
    }
    
}
