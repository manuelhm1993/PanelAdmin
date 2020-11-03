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
                'updated_at' => now(),
            ],
            [
                'name' => 'Ver usuario',
                'slug' => 'users.show',
                'description' => 'Ver el resumen detallado de cada usuario del sistema',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Editar usuario',
                'slug' => 'users.edit',
                'description' => 'Editar cualquier dato de un usuario del sistema',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eliminar usuario',
                'slug' => 'users.destroy',
                'description' => 'Eliminar cualquier usuario del sistema',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Crear perfil',
                'slug' => 'roles.create',
                'description' => 'Crear un nuevo perfil de usuario',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Listar perfiles',
                'slug' => 'roles.index',
                'description' => 'Lista y navega todos los perfiles de usuario',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ver perfil',
                'slug' => 'roles.show',
                'description' => 'Ver el resumen detallado de cada perfil de usuario',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Editar perfil',
                'slug' => 'roles.edit',
                'description' => 'Editar cualquier dato de un perfil de usuario',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eliminar perfil',
                'slug' => 'roles.destroy',
                'description' => 'Eliminar cualquier perfil de usuario',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Crear producto',
                'slug' => 'products.create',
                'description' => 'Crear un nuevo producto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Listar productos',
                'slug' => 'products.index',
                'description' => 'Lista y navega todos los productoes del sistema',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ver producto',
                'slug' => 'products.show',
                'description' => 'Ver el resumen detallado de cada producto del sistema',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Editar producto',
                'slug' => 'products.edit',
                'description' => 'Editar cualquier dato de un producto del sistema',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eliminar producto',
                'slug' => 'products.destroy',
                'description' => 'Eliminar cualquier producto del sistema',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
