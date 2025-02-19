<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transportista extends Model
{
    protected $fillable = [
        'user_id',
        'disponibilidad', 
        'licencia',
        'matricula_vehiculo',
        'tipo_vehiculo',
    ];

}
