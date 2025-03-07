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
        'dias', 
        'fecha_pago', 
        'monto', 
        'comision',
        'cardholder_name', 
        'card_number', 
        'expiry_day', 
        'cvv', 
        'estado'
    ];
    
    protected $attributes = [
        
    ];
    
}
