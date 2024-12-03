<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Crear el rol 'admin' si no existe
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Crear un usuario administrador por defecto
        $adminUser = User::firstOrCreate([
            'email' => 'admin@example.com',
        ], [
            'name' => 'Admin User',
            'password' => bcrypt('password'), // Asegúrate de cambiar esto por una contraseña segura
        ]);
        // Asignar el rol 'admin' al usuario creado
        $adminUser->roles()->syncWithoutDetaching([$adminRole->id]);
    }
}