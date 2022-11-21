<div class="mt-2"><a href="{{ URL::previous() }}" class="btn btn-primary"> Volver hacia atrás</a></div>
<div class="mb-4"></div>
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre_ciudadano', $data->citizen->nombre_ciudadano, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_ciudadano') }}
            {{ Form::text('apellido_ciudadano', $data->citizen->apellido_ciudadano, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Apellido']) }}
            {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('Cédula') }}
            {{ Form::text('cedula_ciudadano', $data->citizen->cedula_ciudadano, ['class' => 'form-control' . ($errors->has('Cédula') ? ' is-invalid' : ''), 'placeholder' => 'Cédula', 'maxlength' => '15']) }}
            {!! $errors->first('Cédula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::email('correo_ciudadano',  $data->citizen->correo_ciudadano, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nacionalidad') }}
            {{ Form::text('nacionalidad_ciudadano',  $data->citizen->nacionalidad_ciudadano, ['class' => 'form-control' . ($errors->has('Nacionalidad') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Nacionalidad']) }}
            {!! $errors->first('Nacionalidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('estado',  $data->citizen->estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Avenida') }}
            {{ Form::text('avenida',  $data->citizen->avenida, ['class' => 'form-control' . ($errors->has('Avenida') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Avenida']) }}
            {!! $errors->first('Avenida', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Calle') }}
            {{ Form::text('calle',  $data->citizen->calle, ['class' => 'form-control' . ($errors->has('Calle') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Calle']) }}
            {!! $errors->first('Calle', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Urbanismo') }}
            {{ Form::text('urbanismo',  $data->citizen->urbanismo, ['class' => 'form-control' . ($errors->has('Urbanismo') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Urbanismo']) }}
            {!! $errors->first('Urbanismo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('ciudad',  $data->citizen->ciudad, ['class' => 'form-control' . ($errors->has('Ciudad') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('Ciudad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group">
                        {{ Form::label('Tipo de Vivienda') }}
            {{ Form::text('tipo_vivienda',  $data->citizen->tipo_vivienda, ['class' => 'form-control' . ($errors->has('Tipo de Vivienda') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Tipo de Vivienda']) }}
            {!! $errors->first('Tipo de Vivienda', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
                        {{ Form::label('Número de Vivienda') }}
            {{ Form::text('numero_vivienda',  $data->citizen->nro_vivienda, ['class' => 'form-control' . ($errors->has('Número de Vivienda') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Número de Vivienda']) }}
            {!! $errors->first('Número de Vivienda', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
                        {{ Form::label('Historia') }}
            {{ Form::text('Historia',  $data->historia_reclamo, ['class' => 'form-control' . ($errors->has('Historia') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Historia']) }}
            {!! $errors->first('Historia', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
                        {{ Form::label('Planteamiento') }}
            {{ Form::textarea('planteamiento',  $data->planteamiento, ['class' => 'form-control' . ($errors->has('Planteamiento') ? ' is-invalid' : ''), 'placeholder' => 'Planteamiento']) }}
            {!! $errors->first('Planteamiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
                        {{ Form::label('Fecha incidente') }}
            {{ Form::date('fecha_incidente',  $data->citizen->fecha_incidente, ['class' => 'form-control' . ($errors->has('Fecha incidente') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Fecha incidente']) }}
            {!! $errors->first('Fecha incidente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
