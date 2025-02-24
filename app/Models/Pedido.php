<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditableTrait;

class Pedido extends Model implements Auditable
{
    use HasFactory, AuditableTrait; // Asegúrate de usar el trait correcto

    protected $table = 'pedido'; // Especificar el nombre correcto de la tabla

    protected $fillable = [
        'user_id',
        'estado', 
        'descripcion_pedido', 
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
}
