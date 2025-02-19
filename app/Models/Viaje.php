<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    protected $fillable = [
        'transportista_id',
        'fecha_inicio', 
        'fecha_fin',
        'cantidad_pedidos',
        'distancia',
    ];

}
