<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            [
                'name' => 'Crear rol del sistema',
                'slug' => 'roles.create',//En el slug se asigna el permiso sobre la ruta
                'description' => 'Crear un nuevo perfil de usuario',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Listar perfils',
                'slug' => 'roles.index',
                'description' => 'Lista y navega todos los perfiles de usuario',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ver perfil',
                'slug' => 'roles.show',
                'description' => 'Ver el resumen detallado de cada perfil de usuario',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Editar perfil',
                'slug' => 'roles.edit',
                'description' => 'Editar cualquier dato de un perfil de usuario',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Eliminar perfil',
                'slug' => 'roles.destroy',
                'description' => 'Eliminar cualquier perfil de usuario',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
