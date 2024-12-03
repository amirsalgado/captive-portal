<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);

        // Asignar el rol 'admin' a un usuario específico
        $user = User::find(1); // Cambia el ID según sea necesario
        $user->roles()->attach($adminRole);
    }
}