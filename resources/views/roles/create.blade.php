@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left text-uppercase">Perfil</h3>
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'roles.store']) !!}
                        @include('roles.includes.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
