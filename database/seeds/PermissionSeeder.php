<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            [
                'name' => 'Listar usuarios',
                'slug' => 'users.index',//En el slug se asigna el permiso sobre la ruta
                'description' => 'Lista y navega todos los usuarios del sistema',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ver usuario',
                'slug' => 'users.show',
                'description' => 'Ver el resumen detallado de cada usuario del sistema',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Editar usuario',
                'slug' => 'users.edit',
                'description' => 'Editar cualquier dato de un usuario del sistema',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Eliminar usuario',
                'slug' => 'users.destroy',
                'description' => 'Eliminar cualquier usuario del sistema',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
