<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\PagosPedidos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::where('user_id', Auth::id())->get();
        return view('users.pedidos', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create_pedido');
    }

    /**
     * Display all pedidos.
     */
    public function allPedidos()
    {
        $pedido = Pedido::where('user_id', Auth::id())->get();
        return view('users.pedidos', compact('pedido'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validar request
        $request->validate([
            'descripcion_pedido' => 'required|string',
            'cantidad' => 'required|integer',
            'img_pedido' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categoria' => 'required|string',
            'pais_entrega' => 'required|string',
            'ciudad_entrega' => 'required|string',
            'codigo_postal_entrega' => 'required|string',
            'direccion_entrega' => 'required|string',
            'pais_envio' => 'required|string',
            'ciudad_envio' => 'required|string',
            'codigo_postal_envio' => 'required|string',
            'direccion_envio' => 'required|string',
            'precio' => 'required|numeric',
            'aceptar_terminos' => 'accepted',
        ]);
        
        // nuevo pedido
        $pedido = new Pedido();
        $pedido->user_id = Auth::id();
        $pedido->estado = 'Pendiente'; 
        $pedido->descripcion_pedido = $request->descripcion_pedido;
        
        if ($request->hasFile('img_pedido')) {
            // Guardar la imagen
            $pedido->img_pedido = $request->file('img_pedido')->store('pedidos/storage/img/pedidos/', 'public');
        } else {
            $pedido->img_pedido = '/storage/img/paqueteria.jpeg';
        }

        $pedido->cantidad = $request->cantidad;
        $pedido->categoria = $request->categoria;
        $pedido->pais_entrega = $request->pais_entrega;
        $pedido->ciudad_entrega = $request->ciudad_entrega;
        $pedido->codigo_postal_entrega = $request->codigo_postal_entrega;
        $pedido->direccion_entrega = $request->direccion_entrega;
        $pedido->pais_envio = $request->pais_envio;
        $pedido->ciudad_envio = $request->ciudad_envio;
        $pedido->codigo_postal_envio = $request->codigo_postal_envio;
        $pedido->direccion_envio = $request->direccion_envio;
        $pedido->precio = $request->precio;
        $pedido->aceptar_terminos = $request->aceptar_terminos;
    
        // Debugging: Log the data before saving
        Log::info('Pedido Data:', $pedido->toArray());
    
        $pedido->save();
        return redirect()->route('all.pedidos')->with('success', 'Pedido creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        $pagos = PagosPedidos::where('pedido_id', $id)->get();

        return view('pedidos.detalles', compact('pedido', 'pagos'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.edit', compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'descripcion_pedido' => 'required|string',
        'cantidad' => 'required|integer',
        'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'categoria' => 'required|string',
        'pais_entrega' => 'required|string',
        'ciudad_entrega' => 'required|string',
        'codigo_postal_entrega' => 'required|string',
        'direccion_entrega' => 'required|string',
        'pais_envio' => 'required|string',
        'ciudad_envio' => 'required|string',
        'codigo_postal_envio' => 'required|string',
        'direccion_envio' => 'required|string',
        'precio' => 'required|numeric',
        'aceptar_terminos' => 'accepted', // verifica que el checkbox este marcado
    ]);
    
    // Encontrar el Pedido a actualizar
    $pedido = Pedido::findOrFail($id);

    $pedido->descripcion_pedido = $request->descripcion_pedido;
    $pedido->cantidad = $request->cantidad;
    
    if ($request->hasFile('img')) {
        // Eliminar la imagen anterior de almacenamiento
        if ($pedido->img_pedido && Storage::exists($pedido->img_pedido)) {
            Storage::delete($pedido->img_pedido);
        }
        // Almacenar la nueva imagen
        $pedido->img_pedido = $request->file('img')->store('pedidos/images', 'public');
    }

    $pedido->categoria = $request->categoria;
    $pedido->pais_entrega = $request->pais_entrega;
    $pedido->ciudad_entrega = $request->ciudad_entrega;
    $pedido->codigo_postal_entrega = $request->codigo_postal_entrega;
    $pedido->direccion_entrega = $request->direccion_entrega;
    $pedido->pais_envio = $request->pais_envio;
    $pedido->ciudad_envio = $request->ciudad_envio;
    $pedido->codigo_postal_envio = $request->codigo_postal_envio;
    $pedido->direccion_envio = $request->direccion_envio;
    $pedido->precio = $request->precio;
    $pedido->aceptar_terminos = $request->has('aceptar_terminos') ? 1 : 0;
    $pedido->save();

    return redirect()->route('all.pedidos')->with('success', 'Pedido actualizado con éxito.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pedido = Pedido::findOrFail($id);

        if ($pedido->img_pedido && Storage::exists($pedido->img_pedido)) {
            Storage::delete($pedido->img_pedido);
        }
        $pedido->delete();

        return redirect()->route('all.pedidos')->with('success', 'Pedido eliminado con éxito.');
    }
}
