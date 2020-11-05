<?php

use Illuminate\Database\Seeder;

use App\User;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //---------- Permisos para manejar usuario ----------//
        Permission::create([
            'name' => 'users.index',
            'slug' => 'Listar usuarios',
            'description' => 'Lista y navega todos los usuarios del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'users.show',
            'slug' => 'Ver usuario',
            'description' => 'Ve el detalle de todos los usuarios del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'users.edit',
            'slug' => 'Editar usuario',
            'description' => 'Edita todos los datos de los usuarios del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'users.destroy',
            'slug' => 'Eliminar usuario',
            'description' => 'Elimina los usuarios del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //---------- Permisos para manejar roles ----------//
        Permission::create([
            'name' => 'roles.create',
            'slug' => 'Crear perfil',
            'description' => 'Crea un nuevo perfil de usuario del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'roles.index',
            'slug' => 'Listar perfiles',
            'description' => 'Lista y navega todos los perfiles de usuario del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'roles.show',
            'slug' => 'Ver perfil',
            'description' => 'Ve el detalle de los perfiles de usuario del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'roles.edit',
            'slug' => 'Editar perfil',
            'description' => 'Edita todos los datos de los perfiles de usuario del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'roles.destroy',
            'slug' => 'Eliminar perfil',
            'description' => 'Elimina los perfiles del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //---------- Permisos para manejar productos ----------//
        Permission::create([
            'name' => 'products.create',
            'slug' => 'Crear producto',
            'description' => 'Crea un nuevo producto del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'products.index',
            'slug' => 'Listar productos',
            'description' => 'Lista y navega todos los productos del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'products.show',
            'slug' => 'Ver producto',
            'description' => 'Ve el detalle de los productos del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'products.edit',
            'slug' => 'Editar producto',
            'description' => 'Edita todos los datos de los productos del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'products.destroy',
            'slug' => 'Eliminar producto',
            'description' => 'Elimina los productos del sistema',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
