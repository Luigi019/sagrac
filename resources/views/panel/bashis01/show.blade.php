@extends("panel.layouts.master")
@section('title', 'Mostrar Historia' )

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Historia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.historica.index') }}"> Volver</a>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $data->citizen->nombre_ciudadano }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $data->citizen->apellido_ciudadano }}
                        </div>
                        <div class="form-group">
                            <strong>Cédula:</strong>
                            {{ $data->citizen->cedula_ciudadano }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $data->citizen->correo_ciudadano }}
                        </div>
                        <div class="form-group">
                            <strong>Nacionalidad:</strong>
                            {{ $data->citizen->nacionalidad_ciudadano }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $data->citizen->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Avenida:</strong>
                            {{ $data->citizen->avenida }}
                        </div>
                        <div class="form-group">
                            <strong>Calle:</strong>
                            {{ $data->citizen->calle }}
                        </div>
                        <div class="form-group">
                            <strong>Urbanismo:</strong>
                            {{ $data->citizen->urbanismo }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $data->citizen->ciudad }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Tipo de Vivienda:</strong>
                            {{ $data->citizen->tipo_vivienda }}
                        </div>
                        <div class="form-group">
                            <strong>Número de Vivienda:</strong>
                            {{ $data->citizen->nro_vivienda }}
                        </div>
                        <div class="form-group">
                            <strong>Historia:</strong>
                            {{ $data->Historia_reclamo }}
                        </div>
                        <div class="form-group">
                            <strong>Planteamiento:</strong>
                            {{ $data->planteamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha incidente:</strong>
                            {{ $data->fecha_incidente }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
