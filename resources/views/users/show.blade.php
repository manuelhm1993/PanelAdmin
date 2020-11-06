@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left text-uppercase">Usuario</h3>
                </div>

                <div class="card-body">
                    <p>
                        <strong>Nombre:</strong> {{ $user->name }}
                    </p>

                    <p>
                        <strong>Correo:</strong> {{ $user->email }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
