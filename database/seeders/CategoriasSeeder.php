<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nombre' => 'Mudanza',
            'descripcion' => 'algo ddvssdd',
            'tipo' => 'camion',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Categoria::create([
            'nombre' => 'Empresa',
            'descripcion' => 'algo ddvssdd',
            'tipo' => 'otro',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
