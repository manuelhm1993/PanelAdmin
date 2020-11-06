<div class="form-group">
    {!! Form::label('name', 'Nombre del producto') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripción del producto') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>