@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left text-uppercase">
                        Listado de productos
                    </h3>

                    @can('Crear producto')
                        <a class="btn btn-primary float-right" href="{{ route('products.create') }}">Crear</a>
                    @endcan
                </div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col" colspan="3">Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td colspan="3">
                                        <div class="btn-group" role="group">
                                            @can('Ver producto')
                                                <a class="btn btn-success btn-sm" href="{{ route('products.show', $product->id) }}">
                                                    Ver
                                                </a>
                                            @endcan

                                            @can('Editar producto')
                                                <a class="btn btn-primary btn-sm" href="{{ route('products.edit', $product->id) }}">
                                                    Editar
                                                </a>
                                            @endcan

                                            @can('Eliminar producto')
                                            {!! Form::submit('Eliminar', ['form' => 'eliminar-' . $product->id, 'class' => 'btn btn-danger btn-sm']) !!}
                                            @endcan
                                        </div>

                                        {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete', 'id' => 'eliminar-' . $product->id]) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
