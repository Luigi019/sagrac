<div class="mt-2"><a href="{{ URL::previous() }}" class="btn btn-primary"> Volver hacia atrás</a></div>
<div class="mb-4"></div>
<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre_ciudadano', $basqyr01->nombre_ciudadano, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_ciudadano') }}
            {{ Form::text('apellido_ciudadano', $basqyr01->apellido_ciudadano, ['class' => 'form-control' . ($errors->has('Apellido') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Apellido']) }}
            {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cédula') }}
            {{ Form::text('cedula_ciudadano', $basqyr01->cedula_ciudadano, ['class' => 'form-control' . ($errors->has('Cédula') ? ' is-invalid' : ''), 'maxlength' => '15', 'placeholder' => 'Cédula']) }}
            {!! $errors->first('Cédula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::email('correo_ciudadano',  $basqyr01->correo_ciudadano, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nacionalidad') }}
            {{ Form::text('nacionalidad_ciudadano',  $basqyr01->nacionalidad_ciudadano, ['class' => 'form-control' . ($errors->has('Nacionalidad') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Nacionalidad']) }}
            {!! $errors->first('Nacionalidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            <select name="estado" id="combobox" class="browser-default custom-select" onchange="comboxestados(event)">
                @foreach ($basest01 as $estado)
                <option value="{{$estado->id_estado}}">{{$estado->estado}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
                <div id="ciudades1" class="form-group"></div>
        </div>
        <div class="form-group">
            {{ Form::label('Municipio') }}
            <div id="municipios1" class="form-group"></div>
        </div>
        <div class="form-group">
            {{ Form::label('Parroquia') }}
            <div id="parroquias1" class="form-group"></div>
        </div>
        <div class="form-group">
            {{ Form::label('Urbanismos') }}
            {{ Form::text('urbanismo',  $basqyr01->urbanismos, ['class' => 'form-control' . ($errors->has('Urbanismos') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Urbanismos']) }}
            {!! $errors->first('Urbanismos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group">
                        {{ Form::label('Tipo de Vivienda') }}
            {{ Form::text('tipo_vivienda',  $basqyr01->tipo_vivienda, ['class' => 'form-control' . ($errors->has('Tipo de Vivienda') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Tipo de Vivienda']) }}
            {!! $errors->first('Tipo de Vivienda', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
                        {{ Form::label('Número de Vivienda') }}
            {{ Form::text('numero_vivienda',  $basqyr01->nro_vivienda, ['class' => 'form-control' . ($errors->has('Número de Vivienda') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Número de Vivienda']) }}
            {!! $errors->first('Número de Vivienda', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
                        {{ Form::label('Queja') }}
            {{ Form::text('queja',  $basqyr01->queja_reclamo, ['class' => 'form-control' . ($errors->has('Queja') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Queja']) }}
            {!! $errors->first('Queja', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
                        {{ Form::label('Planteamiento') }}
            {{ Form::textarea('planteamiento',  $basqyr01->planteamiento, ['class' => 'form-control' . ($errors->has('Planteamiento') ? ' is-invalid' : ''), 'placeholder' => 'Planteamiento']) }}
            {!! $errors->first('Planteamiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
                        {{ Form::label('Fecha incidente') }}
            {{ Form::date('fecha_incidente',  $basqyr01->fecha_incidente, ['class' => 'form-control' . ($errors->has('Fecha incidente') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Fecha incidente']) }}
            {!! $errors->first('Fecha incidente', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
<script>
    async function comboxestados(event){
        const id_estados = event.target.value;
            var rutaciudad = "{{ route('admin.getCiudadesEstado') }}?id_estado=" + id_estados;
            
            const response = await fetch(rutaciudad); 
            var data = (await response.json());
            var select = "<select id='ciudades' class='browser-default custom-select' name='ciudad'>";
            var selectMunicipios = "<select id='municipios' onchange='combomunicipios(event)' class='browser-default custom-select'>";
            for(element of data.ciudad){
                select +=`<option value="${element.id_ciudad}">${element.ciudad}</option>` 
            } 
            for(element of data.municipio){ 
                selectMunicipios +=`<option value="${element.id_municipio}">${element.municipio}</option>` 
            } 
            
            select += "</select>"
            selectMunicipios += "</select>"
            var mostrarCiudades = document.getElementById("ciudades1");
            mostrarCiudades.innerHTML = select;
            
            var mostrarMunicipios = document.getElementById("municipios1");
            mostrarMunicipios.innerHTML = selectMunicipios;
            
    }
    async function combomunicipios(event){
        const id_municipios = event.target.value;
        var rutaparroquia = "{{ route('admin.getParroquiasMuncipio') }}?id_municipio=" + id_municipios;
            const response = await fetch(rutaparroquia); 
            var data = (await response.json());
            var select = "<select id='parroquias' class='browser-default custom-select' name='parroquia_id'>";
            for(element of data){
                select +=`<option value="${element.id_parroquia}">${element.parroquia}</option>` 
            } 
            select += "</select>"
            var mostrarParroquias = document.getElementById("parroquias1");
            mostrarParroquias.innerHTML = select;

    }
</script>