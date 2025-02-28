<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Transportista;


class TransportistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transportista = Transportista::all();
        return(view('transportistas.dash', compact('transportista')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function viajes()
    {
        return(view('transportistas.viajes'));
    }
    public function pedidos(){
        return (view('transportistas.pedidos'));
    }
    public function nosotros()
    {
        return(view('transportistas.nosotros'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
