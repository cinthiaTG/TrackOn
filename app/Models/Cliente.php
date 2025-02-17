<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;

class Cliente extends Model
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'nombre',
        'email', 
        'telefono',
        'direccion',
        'categoria_id',
        'img_pedido',
    ];

    //aqui faltan las funciones del modelo para categoria
    

}