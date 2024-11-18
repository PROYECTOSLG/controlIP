<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Diego Olvera',
            'email' => 'diego.olvera@lginnotek.com',
            'password' => bcrypt('admin#olvera'),
            'role' => 'administrador'
        ]);

        User::create([
            'name' => 'Karla Martinez',
            'email' => 'karla.martinez@lginnotek.com',
            'password' => bcrypt('admin#martinez'),
            'role' => 'administrador'
        ]);

        User::create([
            'name' => 'Alvaro Camacho',
            'email' => 'alvaro.camacho@lginnotek.com',
            'password' => bcrypt('admin#camacho'),
            'role' => 'administrador'
        ]);

        User::create([
            'name' => 'Daniel Neri',
            'email' => 'daniel.neri@lginnotek.com',
            'password' => bcrypt('password$neri'),
            'role' => 'estandar'
        ]);

        User::create([
            'name' => 'Mathew Rojas',
            'email' => 'mathew.rojas@lginnotek.com',
            'password' => bcrypt('password$rojas'),
            'role' => 'estandar'
        ]);

        User::create([
            'name' => 'Luis Vidal',
            'email' => 'luis.vidal@lginnotek.com',
            'password' => bcrypt('password$vidal'),
            'role' => 'estandar'
        ]);
    }
}
