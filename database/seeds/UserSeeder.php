<?php

use Illuminate\Database\Seeder;

use App\User;

use Spatie\Permission\Models\Role; //Crear el rol por defecto Admin
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 20)->create();

        //Admin
        $admin = Role::create([
            'name' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $admin->givePermissionTo(Permission::all());

        /*$admin->givePermissionTo([
            'products.index',
            'products.edit',
            'products.show',
            'products.create',
            'products.destroy'
        ]);*/
    }
}
