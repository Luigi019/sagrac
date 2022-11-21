{{-- @extends('layouts.app') --}}
@extends('panel.layouts.master')
@section('title',' Crear Queja')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Queja y/o Reclamo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.quejas.store') }}"  role="form" >
                            @csrf
                            @method("POST")

                            @include('panel.basqyr01.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


