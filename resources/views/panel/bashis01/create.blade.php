{{-- @extends('layouts.app') --}}
@extends('panel.layouts.master')
@section('title',' Crear Historia')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Historia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.historica.store') }}"  role="form" >
                            @csrf
                            @method("POST")

                            @include('panel.bashis01.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


