<?php

use Illuminate\Database\Seeder;

use App\User;

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
            'name' => 'Listar usuarios',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'Ver usuario',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'Editar usuario',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'Eliminar usuario',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //---------- Permisos para manejar roles ----------//
        Permission::create([
            'name' => 'Crear perfil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'Listar perfiles',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'Ver perfil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'Editar perfil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'Eliminar perfil',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //---------- Permisos para manejar productos ----------//
        Permission::create([
            'name' => 'Crear producto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'Listar productos',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'Ver producto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'Editar producto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Permission::create([
            'name' => 'Eliminar producto',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
