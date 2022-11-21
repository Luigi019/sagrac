@extends("panel.layouts.master")
@section('title',' Actualizar Queja ')


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Queja y/o Reclamo</span>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('admin.quejas.update',$basqyr01->id) }}"  role="form" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            @include('panel.basqyr01.form')

                            

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
