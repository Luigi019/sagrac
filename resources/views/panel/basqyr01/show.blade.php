@extends("panel.layouts.master")
@section('title', 'Mostrar Queja y/o reclamo' )

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Queja y/o Reclamo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.quejas.index') }}"> Volver</a>
                        </div>
                    </div>


                    <div class="card-body">
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $basqyr01->citizen->nombre_ciudadano }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $basqyr01->citizen->apellido_ciudadano }}
                        </div>
                        <div class="form-group">
                            <strong>Cédula:</strong>
                            {{ $basqyr01->citizen->cedula_ciudadano }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $basqyr01->citizen->correo_ciudadano }}
                        </div>
                        <div class="form-group">
                            <strong>Nacionalidad:</strong>
                            {{ $basqyr01->citizen->nacionalidad_ciudadano }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $basqyr01->direccion->parroquia->municipio->estado->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $basqyr01->direccion->ciudad->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $basqyr01->direccion->parroquia->municipio->municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Parroquia:</strong>
                            {{ $basqyr01->direccion->parroquia->parroquia }}
                        </div>
                        <div class="form-group">
                            <strong>Urbanismo:</strong>
                            {{ $basqyr01->direccion->urbanismo->urbanismo }}
                        </div>                        
                        <div class="form-group">
                            <strong>Tipo de Vivienda:</strong>
                            {{ $basqyr01->direccion->tipo_vivienda }}
                        </div>
                        <div class="form-group">
                            <strong>Número de Vivienda:</strong>
                            {{ $basqyr01->direccion->nro_vivienda }}
                        </div>
                        <div class="form-group">
                            <strong>Queja:</strong>
                            {{ $basqyr01->queja->queja_reclamo }}
                        </div>
                        <div class="form-group">
                            <strong>Planteamiento:</strong>
                            {{ $basqyr01->planteamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha incidente:</strong>
                            {{ $basqyr01->fecha_incidente }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
