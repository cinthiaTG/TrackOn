<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use OwenIt\Auditing\Contracts\Auditable;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Asegúrate de que el nombre coincide con la tabla en la BD

    protected $fillable = ['nombre', 'descripcion', 'tipo'];
}