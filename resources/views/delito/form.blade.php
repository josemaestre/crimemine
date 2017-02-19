

<div class="form-group"> 
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::text('icon_name', null,  ['class' => 'form-control','placeholder' => 'Icono']) !!}
</div>

<div class="form-group"> 
{!! Form::label('description', 'Suceso:', ['class' => 'control-label']) !!}
    {!! Form::text('tx_delito', null, ['class' => 'form-control','placeholder' => 'Nombre del suceso']) !!}

</div>

{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}