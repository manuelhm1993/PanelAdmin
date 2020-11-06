@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left text-uppercase">
                        Listado de usuarios
                    </h3>
                </div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col" colspan="3">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td colspan="3">
                                        <div class="btn-group" role="group">
                                            @can('Ver usuario')
                                                <a class="btn btn-success btn-sm" href="{{ route('users.show', $user->id) }}">
                                                    Ver
                                                </a>
                                            @endcan

                                            @can('Editar usuario')
                                                <a class="btn btn-primary btn-sm" href="{{ route('users.edit', $user->id) }}">
                                                    Editar
                                                </a>
                                            @endcan

                                            @can('Eliminar usuario')
                                            {!! Form::submit('Eliminar', ['form' => 'eliminar-' . $user->id, 'class' => 'btn btn-danger btn-sm']) !!}
                                            @endcan
                                        </div>

                                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete', 'id' => 'eliminar-' . $user->id]) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
