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
            'user_id' => 1,
            'estado' => 'inactivo',
            'descripcion_pedido' => 'funkoss',
            'cantidad' => 30,
            'img_pedido' => '/img/pedidos/theOffice.jpg',
            'categoria' => 'Mudanza',
            'pais_entrega' => 'México',
            'ciudad_entrega' => 'Ciudad Victoria',
            'codigo_postal_entrega' => '87000',
            'direccion_entrega' => 'Colonia Centro, calle 5',
            'pais_envio' => 'México',
            'ciudad_envio' => 'Monterrey',
            'codigo_postal_envio' => '64000',
            'direccion_envio' => 'Colonia Obispado, calle 10',
            'precio' => '123',
            'aceptar_terminos' => true,
        ]);
        
        DB::table('pedido')->insert([
            'user_id' => 2,
            'estado' => 'Terminado',
            'descripcion_pedido' => 'Plantas',
            'cantidad' => 160,
            'img_pedido' => '/img/pedidos/plantitas.jpg',
            'categoria' => 'Otro',
            'pais_entrega' => 'México',
            'ciudad_entrega' => 'Guadalajara',
            'codigo_postal_entrega' => '44100',
            'direccion_entrega' => 'Colonia Americana, calle 20',
            'pais_envio' => 'México',
            'ciudad_envio' => 'León',
            'codigo_postal_envio' => '3700',
            'direccion_envio' => 'Colonia Centro, calle 15',
            'precio' => '200',
            'aceptar_terminos' => true,
        ]);
        DB::table('pedido')->insert([
            'user_id' => 2,
            'estado' => 'Aceptado',
            'descripcion_pedido' => 'Otras Plantitas',
            'cantidad' => 160,
            'img_pedido' => '/img/pedidos/plantitas.jpg',
            'categoria' => 'Otro',
            'pais_entrega' => 'México',
            'ciudad_entrega' => 'Guadalajara',
            'codigo_postal_entrega' => '44100',
            'direccion_entrega' => 'Colonia Americana, calle 20',
            'pais_envio' => 'México',
            'ciudad_envio' => 'León',
            'codigo_postal_envio' => '170',
            'direccion_envio' => 'Colonia Centro, calle 15',
            'precio' => '600',
            'aceptar_terminos' => true,
        ]);
    }
}
