<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pedido;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory()->create([
            'name' => 'Cinthia Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'rol' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'Luis User',
            'email' => 'luis@gmail.com',
            'password' => Hash::make('password'),
            'rol' => 'usuario',
        ]);
        User::factory()->create([
            'name' => 'Juanjo transportista',
            'email' => 'juanjo@gmail.com',
            'password' => Hash::make('password'),
            'rol' => 'transportista',
        ]);
        

        $this->call([
            PedidoSeeder::class,
            VehiculoSeeder::class,
            PagosPedidosSeeder::class,
            //UserSeeder::class,
            //UserSeeder::class,
        ]);
    }
}
