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
            'dias'=> 'required|numeric',
            'monto' => 'required|numeric',
            'metodo' => 'required|string',
            'descripcion' => 'required|string',
        ]);

        $vehiculo = Vehiculo::findOrFail($id);

        $pago = new PagoVehiculos();
        $pago->user_id = Auth::id(); 
        $pago->vehiculo_id = $vehiculo->id;
        $pago->accion = 'Pago Renta';
        $pago->dias = $request->dias;
        $pago->fecha_pago = Carbon::now();
        $pago->monto = $vehiculo->precio_por_dia*$pago->dias;
        $pago->comision = 15; 
        $pago->metodo = $request->metodo;
        $pago->descripcion = $request->descripcion;
        $pago->estado = 'Pendiente';
        $vehiculo->disponibilidad = 0;

        Log::info('Pago Creado:', $pago->toArray());

        $pago->save();
        $vehiculo->save();

        return redirect()->route('all.pedidos')->with('success', 'Pago registrado con éxito');
    }
    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
