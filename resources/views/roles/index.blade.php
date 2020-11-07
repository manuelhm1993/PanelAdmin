@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left text-uppercase">
                        Listado de perfiles
                    </h3>

                    @can('Crear perfil')
                        <a class="btn btn-primary float-right" href="{{ route('roles.create') }}">Crear</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Perfil</th>
                                <th scope="col" colspan="3">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td colspan="3">
                                        <div class="btn-group" role="group">
                                            @can('Ver perfil')
                                                <a class="btn btn-success btn-sm" href="{{ route('roles.show', $role->id) }}">
                                                    Ver
                                                </a>
                                            @endcan

                                            @can('Editar perfil')
                                                <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">
                                                    Editar
                                                </a>
                                            @endcan

                                            @can('Eliminar perfil')
                                            {!! Form::submit('Eliminar', ['form' => 'eliminar-' . $role->id, 'class' => 'btn btn-danger btn-sm']) !!}
                                            @endcan
                                        </div>

                                        {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete', 'id' => 'eliminar-' . $role->id]) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
