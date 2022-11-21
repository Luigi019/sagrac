@extends("panel.layouts.master")

@section('title','Show User')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('admin.users.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $user->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Rol:</strong>
                            {{ $user->role }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
