<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehiculo')->insert([
            'marca' => 'nissan',
            'modelo' => 'Kicks',
            'año' => '1998',
            'placa' => '125471TTR',
            'transmision' => 'Manual',
            'precio_por_dia' => '1234.67',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/nissanKicks.jpeg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'nissan',
            'modelo' => 'Sentra',
            'año' => '1995',
            'placa' => '125477UU651TTR',
            'transmision' => 'Manual',
            'precio_por_dia' => '1234.67',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/nissansentra.jpeg',
        ]);
        DB::table('vehiculo')->insert([
            'marca' =>'honda',
            'modelo' => 'city',
            'año' => '2009',
            'placa' => 'XHZ-DBZ',
            'transmision' => 'Manual',
            'precio_por_dia' => '1234.67',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/hondacity.jpeg',
        ]);
        
        
    }
}
