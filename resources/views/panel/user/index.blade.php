@extends("panel.layouts.master")

@section('title','Usuarios')

@section('content')
<div class="container-fluid">
    <div class="row">
        <form method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="{{ route('admin.users.search') }}">
            @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                aria-label="Search" aria-describedby="basic-addon2" name="data">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
       </form>
        <div class="col-sm-12">
             <!-- Topbar Search -->

            <div class="card">
                <div class="card-header">
                    <div  class="div-panel-justify">

                        <span id="card_title">
                            {{ __('Usuario') }}
                        </span>

                         <div class="float-right">
                            <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                              {{ __('Crear Nuevo') }}
                            </a>
                          </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                 <th>ID</th>
                                    
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Cédula</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->cedula }}</td>

                                        <td>
                                            <form action="{{ route('admin.users.destroy',$user->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('admin.users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('admin.users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $users->links() !!}
        </div>
    </div>
</div>
@endsection


   
