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
        Pedido::factory()->create([
            'user_id' => 1,
            'estado' => 'En espera',
            'descripcion' => 'Una descripcion bla bla bla',
            'origen_pedido' => 'Origen bla bla bla',
            'destino_pedido' => 'Mudanza',
            'img_pedido' => '/storage/img/almacen.png',
            'cantidad_productos' => 4,
        ]);

        // $this->call([
        //     //CategoriasSeeder::class,
        //     //UserSeeder::class,
        //     //UserSeeder::class,
        // ]);
    }
}
