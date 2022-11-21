@extends("panel.layouts.master")
@section('title',' Actualizar Historia ')


@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Historia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.historica.update', $bashis01->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('panel.bashis01.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
