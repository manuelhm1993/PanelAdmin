<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('permission:Listar perfiles')->only('index');
        $this->middleware('permission:Crear perfil')->only(['create', 'store']);
        $this->middleware('permission:Ver perfil')->only('show');
        $this->middleware('permission:Editar perfil')->only(['edit', 'update']);
        $this->middleware('permission:Eliminar perfil')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate();

        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::create($request->all());

        switch($request->special) {
            case 'all-access':
                $role->syncPermissions(Permission::all());//Acceso total
            break;

            case 'no-access':
                $role->syncPermissions([]);//Ningún acceso
            break;

            default:
                $role->syncPermissions($request->permissions);//Permisos asignados
        }

        return redirect()->route('roles.index')->with('info', 'Perfil creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();

        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());

        switch($request->special) {
            case 'all-access':
                $role->syncPermissions(Permission::all());//Acceso total
            break;

            case 'no-access':
                $role->syncPermissions([]);//Ningún acceso
            break;

            default:
                $role->syncPermissions($request->permissions);//Permisos asignados
        }

        return redirect()->route('roles.index')->with('info', 'Perfil actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')->with('info', 'Perfil eliminado exitosamente');
    }
}
