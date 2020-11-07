<div class="form-group">
    {!! Form::label('name', 'Nombre del usuario') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<hr>

<h3>Lista de roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach ($roles as $rol)
            <li>
                <label>
                    {{-- {!! Form::checkbox('roles[]', $rol->id, null) !!} --}}
                    
                    @if($user->hasRole($rol->name))
                        <input type="radio" name="roles" value="{{ $rol->name }}" checked>
                    @else
                        <input type="radio" name="roles" value="{{ $rol->name }}">
                    @endif
                    
                    {{ $rol->name }} | <em>({{ $rol->description ?: 'Sin descripción' }})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>

<div class="form-group">
    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
</div>