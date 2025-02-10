<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pedido;
class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pedido::create([
            'cliente_id' => 1,
            'descripcion' => 'este pedido es bastante pesado, esta o no empaquetado y ocupo que se entregue lo antes posible',
            'origen_pedido' => 'calle normal superior, manzana 1234, colonia sabrits moradas',
            'destino_pedido' => 'calle normal superior, manzana 1234, colonia sabrits moradas',
            'categoria' => 'otro',
            'img_pedido' => '/storage/img/almacen.png',
            'cantidad_productos' => 3,
            'precio' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Pedido::create([
            'cliente_id' => 1,
            'descripcion' => 'este pedido es bastante pesado, esta o no empaquetado y ocupo que se entregue lo antes posible',
            'origen_pedido' => 'calle normal superior, manzana 1234, colonia sabrits moradas',
            'destino_pedido' => 'calle normal superior, manzana 1234, colonia sabrits moradas',
            'categoria' => 'otro',
            'img_pedido' => '/storage/img/almacen.png',
            'cantidad_productos' => 3,
            'precio' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Pedido::create([
            'cliente_id' => 2,
            'descripcion' => 'este pedido es bastante pesado, esta o no empaquetado y ocupo que se entregue lo antes posible',
            'origen_pedido' => 'calle normal superior, manzana 1234, colonia sabrits moradas',
            'destino_pedido' => 'calle normal superior, manzana 1234, colonia sabrits moradas',
            'categoria' => 'otro',
            'img_pedido' => '/storage/img/almacen.png',
            'cantidad_productos' => 3,
            'precio' => 300,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
