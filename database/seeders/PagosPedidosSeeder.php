<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PagosPedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pagosPedidos')->insert([
            [
                'user_id' => 2,  // Asegúrate de que este cliente exista en la tabla de clientes
                'pedido_id' => 2,  // Asegúrate de que este cliente exista en la tabla de clientes
                'accion' => 'Pedido',
                'fecha_pago' => Carbon::now()->format('Y-m-d'),
                'monto' => 123.00,
                'comision' => 10.00,
                'metodo' => 'Tarjeta de crédito',
                'descripcion' => 'Pago por viaje',
                'estado' => 'Completado',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
        ]);
    }
}
