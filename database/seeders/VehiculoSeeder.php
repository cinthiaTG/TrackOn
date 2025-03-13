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
            'img_vehiculo' => '/storage/vehiculos/Nissan_Kicks_2020.jpg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Nissan',
            'modelo' => 'Sentra',
            'año' => '2019',
            'placa' => 'XYZ-5678',
            'transmision' => 'Manual',
            'precio_por_dia' => '1100.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/vehiculos/Nissan_Sentra_2019.jpg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Honda',
            'modelo' => 'City',
            'año' => '2021',
            'placa' => 'LMN-9101',
            'transmision' => 'Automática',
            'precio_por_dia' => '1150.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/vehiculos/Nissan_Sentra_2019.jpg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Toyota',
            'modelo' => 'Corolla',
            'año' => '2018',
            'placa' => 'QRS-2345',
            'transmision' => 'Manual',
            'precio_por_dia' => '1050.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/vehiculos/Nissan_Sentra_2019.jpg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Ford',
            'modelo' => 'Fiesta',
            'año' => '2017',
            'placa' => 'TUV-6789',
            'transmision' => 'Automática',
            'precio_por_dia' => '950.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/vehiculos/Nissan_Sentra_2019.jpg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Chevrolet',
            'modelo' => 'Aveo',
            'año' => '2022',
            'placa' => 'JKL-5432',
            'transmision' => 'Manual',
            'precio_por_dia' => '1080.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/vehiculos/Nissan_Sentra_2019.jpg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Volkswagen',
            'modelo' => 'Jetta',
            'año' => '2016',
            'placa' => 'BCD-9876',
            'transmision' => 'Automática',
            'precio_por_dia' => '1025.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/vehiculos/Nissan_Sentra_2019.jpg',
        ]);

        DB::table('vehiculo')->insert([
            'marca' => 'Mazda',
            'modelo' => 'Mazda 3',
            'año' => '2020',
            'placa' => 'FGH-1357',
            'transmision' => 'Manual',
            'precio_por_dia' => '1180.00',
            'disponibilidad' => true,
            'img_vehiculo' => '/storage/vehiculos/Nissan_Sentra_2019.jpg',
        ]);
    }
}
