<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PagosPedidos extends Model
{
    use HasFactory; // Asegúrate de usar el trait correcto

    protected $table = 'pagosPedidos'; // Especificar el nombre correcto de la tabla

    protected $fillable = [
        'user_id',
        'pedido_id',
        'accion',
        'fecha_pago',
        'comision',
        'metodo',
        'descripcion',
    ];
    protected $attributes = [
        'estado' => 'Pendiente',
        'monto' =>15.0,
    ];
    
}
