<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;

class Pedido extends Model
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'user_id',
        'estado', 
        'descripcion', 
        'origen_pedido',
        'destino_pedido',
        'categoria',
        'img_pedido',
        'cantidad_productos',
        'precio',
    ];


}