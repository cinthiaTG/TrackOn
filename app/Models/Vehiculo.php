<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculo'; 

    protected $fillable = [
        'marca',
        'modelo', 
        'año',
        'placa',
        'transmicion',
        'precio_por_dia',
        'disponibilidad',
        'img_vehiculo',
    ];

}
