<?php

use Illuminate\Database\Seeder;

use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::Product([
            [
                'name' => 'Crear producto',
                'slug' => 'products.create',//En el slug se asigna el permiso sobre la ruta
                'description' => 'Crear un nuevo producto',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Listar productos',
                'slug' => 'products.index',
                'description' => 'Lista y navega todos los productoes del sistema',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ver producto',
                'slug' => 'products.show',
                'description' => 'Ver el resumen detallado de cada producto del sistema',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Editar producto',
                'slug' => 'products.edit',
                'description' => 'Editar cualquier dato de un producto del sistema',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Eliminar producto',
                'slug' => 'products.destroy',
                'description' => 'Eliminar cualquier producto del sistema',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
