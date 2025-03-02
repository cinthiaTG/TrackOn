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
            'marca' => 'Nissan',
            'modelo' => 'Kicks',
            'año' => '2020',
            'placa' => 'ABC-1234',
            'transmision' => 'Automática',
            'precio_por_dia' => '1200.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/vehiculos/nissanKicks.jpeg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Nissan',
            'modelo' => 'Sentra',
            'año' => '2019',
            'placa' => 'XYZ-5678',
            'transmision' => 'Manual',
            'precio_por_dia' => '1100.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/vehiculos/nissansentra.jpeg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Honda',
            'modelo' => 'City',
            'año' => '2021',
            'placa' => 'LMN-9101',
            'transmision' => 'Automática',
            'precio_por_dia' => '1150.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/vehiculos/hondacity.jpeg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Toyota',
            'modelo' => 'Corolla',
            'año' => '2018',
            'placa' => 'QRS-2345',
            'transmision' => 'Manual',
            'precio_por_dia' => '1050.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/vehiculos/toyotacorolla.jpeg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Ford',
            'modelo' => 'Fiesta',
            'año' => '2017',
            'placa' => 'TUV-6789',
            'transmision' => 'Automática',
            'precio_por_dia' => '950.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/vehiculos/fordfiesta.jpeg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Chevrolet',
            'modelo' => 'Aveo',
            'año' => '2022',
            'placa' => 'JKL-5432',
            'transmision' => 'Manual',
            'precio_por_dia' => '1080.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/vehiculos/chevroletaveo.jpeg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Volkswagen',
            'modelo' => 'Jetta',
            'año' => '2016',
            'placa' => 'BCD-9876',
            'transmision' => 'Automática',
            'precio_por_dia' => '1025.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/vehiculos/vwjetta.jpeg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Mazda',
            'modelo' => 'Mazda 3',
            'año' => '2020',
            'placa' => 'FGH-1357',
            'transmision' => 'Manual',
            'precio_por_dia' => '1180.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/vehiculos/mazda3.jpeg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Hyundai',
            'modelo' => 'Elantra',
            'año' => '2019',
            'placa' => 'MNO-2468',
            'transmision' => 'Automática',
            'precio_por_dia' => '1120.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/vehiculos/hyundaielantra.jpeg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Kia',
            'modelo' => 'Rio',
            'año' => '2021',
            'placa' => 'PQR-3690',
            'transmision' => 'Manual',
            'precio_por_dia' => '1090.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/img/vehiculos/kiario.jpeg',
        ]);
    }
}
