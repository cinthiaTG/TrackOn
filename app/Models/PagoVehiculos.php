<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PagoVehiculos extends Model
{
    use HasFactory; 

    protected $table = 'pagosVehiculos';

    protected $fillable = [
        'user_id',
        'vehiculo_id',
        'accion',
        'fecha_pago',
        'dias',
        'comision',
        'metodo',
        'descripcion',
        'monto',
        'estado',
    ];
    protected $attributes = [
        
    ];
    
}
