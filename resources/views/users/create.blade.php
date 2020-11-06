@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-left text-uppercase">Producto</h3>
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'products.store']) !!}
                        @include('products.includes.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
