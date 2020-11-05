<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//---------- Rutas visibles solo con login ----------//
Route::middleware(['auth'])->group(function () {
    //Users - a partir de la versión 6x de laravel se sustituye permission: por can:
    Route::get('users', 'UserController@index')
        ->name('users.index')
        ->middleware('can:Listar usuarios');//Verificar si tiene el permiso
    
    Route::get('users/{user}', 'UserController@show')
        ->name('users.show')
        ->middleware('can:Ver usuario');
    
    Route::get('users/{user}/edit', 'UserController@edit')
        ->name('users.edit')
        ->middleware('can:Editar usuario');

    Route::put('users/{user}', 'UserController@update')
        ->name('users.update')
        ->middleware('can:Editar usuario');
    
    Route::delete('users/{user}', 'UserController@destroy')
        ->name('users.destroy')
        ->middleware('can:Eliminar usuario');

    //-------------------- Rutas de controladores de recursos --------------------//
    Route::resources([
        'roles' => 'RoleController',
        'products' => 'ProductController',
    ]);
});