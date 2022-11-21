@extends('panel.layouts.master')

@section('title', 'Perfil')

@section('content')
    <div>

        <form method="post" action="{{ route('admin.profile.update') }}">
            @csrf
          <div class="col-md-6">

            <div class='mb-3'>
                <label>Nombre</label>
                <input required type="text" class="form-control" placeholder="Nombre" name='name' value='{{ auth()->user()->name }}'/>
            </div>
            <div class='mb-3'>
                <label>Cedula</label>
                <input required type="text" class="form-control" placeholder="Cedula" name='cedula' maxlength="15" value='{{ auth()->user()->cedula }}'/>
            </div>
            <div class='mb-3'>
                <label>Correo Electronico</label>
                <input required type="email" class="form-control" placeholder="Correo Electronico" name='email' value='{{ auth()->user()->email }}'/>
            </div>
            <div>
                <label>Clave</label>
                <input type="password" class="form-control" placeholder="Clave" name='clave' />
            </div>

            <div class='mt-3'>
                <input type="submit" class="btn btn-primary" value='Enviar' />
            </div>

          </div>
        </form>
            </div>
@endsection
