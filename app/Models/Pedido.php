<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';

    protected $fillable = [
        'user_id',
        'descripcion_pedido',
        'cantidad',
        'img_pedido',
        'categoria',
        'pais_entrega',
        'ciudad_entrega',
        'codigo_postal_entrega',
        'direccion_entrega',
        'pais_envio',
        'ciudad_envio',
        'codigo_postal_envio',
        'direccion_envio',
        'aceptar_terminos',
        'precio',
    ];
    protected $attributes = [
        'estado' => 'Pendiente',
    ];
    
}
