<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('pedido')->insert([
            'user_id' => 2,
            'estado' => 'Terminado',
            'descripcion_pedido' => 'Plantas',
            'cantidad' => 160,
            'img_pedido' => '/storage/img_pedidos/plantitas.jpg',
            'categoria' => 'Otro',
            'pais_entrega' => 'México',
            'ciudad_entrega' => 'Guadalajara',
            'codigo_postal_entrega' => 44100,
            'direccion_entrega' => 'Colonia Americana, calle 20',
            'pais_envio' => 'México',
            'ciudad_envio' => 'León',
            'codigo_postal_envio' => 37000,
            'direccion_envio' => 'Colonia Centro, calle 15',
            'precio' => '200',
            'aceptar_terminos' => true,
        ]);
        DB::table('pedido')->insert([
            'user_id' => 2,
            'estado' => 'Aceptado',
            'descripcion_pedido' => 'Otras Plantitas',
            'cantidad' => 160,
            'img_pedido' => '/storage/img_pedidos/plantitas.jpg',
            'categoria' => 'Otro',
            'pais_entrega' => 'México',
            'ciudad_entrega' => 'Guadalajara',
            'codigo_postal_entrega' => 44100,
            'direccion_entrega' => 'Colonia Americana, calle 20',
            'pais_envio' => 'México',
            'ciudad_envio' => 'León',
            'codigo_postal_envio' => 17000,
            'direccion_envio' => 'Colonia Centro, calle 15',
            'precio' => '600',
            'aceptar_terminos' => true,
        ]);
        DB::table('pedido')->insert([
            'user_id' => 2,
            'estado' => 'Pendiente',
            'descripcion_pedido' => 'Bultos de cemento',
            'cantidad' => 200,
            'img_pedido' => '/storage/img_pedidos/cemento.jpg',
            'categoria' => 'Contruccion',
            'pais_entrega' => 'México',
            'ciudad_entrega' => 'Guadalajara',
            'codigo_postal_entrega' => 44100,
            'direccion_entrega' => 'Colonia Americana, calle 20',
            'pais_envio' => 'México',
            'ciudad_envio' => 'León',
            'codigo_postal_envio' => 17000,
            'direccion_envio' => 'Colonia Centro, calle 15',
            'precio' => '6000',
            'aceptar_terminos' => true,
        ]);
        DB::table('pedido')->insert([
            'user_id' => 2,
            'estado' => 'Pendiente',
            'descripcion_pedido' => 'Plantas',
            'cantidad' => 160,
            'img_pedido' => '/storage/img_pedidos/plantitas.jpg',
            'categoria' => 'Otro',
            'pais_entrega' => 'México',
            'ciudad_entrega' => 'Guadalajara',
            'codigo_postal_entrega' => 44100,
            'direccion_entrega' => 'Colonia Americana, calle 20',
            'pais_envio' => 'México',
            'ciudad_envio' => 'León',
            'codigo_postal_envio' => 37000,
            'direccion_envio' => 'Colonia Centro, calle 15',
            'precio' => '200',
            'aceptar_terminos' => true,
        ]);
    }
}
