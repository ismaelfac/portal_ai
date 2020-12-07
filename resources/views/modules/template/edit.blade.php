@extends('layouts.app')
@section('title','Crear Plantilla')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href="{{ route('templates.index')}}">Plantilla</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Editar</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Plantilla') }}</div>
                <div id="contract" class="card-body">
                    <form action="{{ route('templates.store') }}" method="POST">
                        @include('modules.template.form_crud')
                        <div class="input-group mb-3 col-md-12">
                            <button type="submit" class="btn btn-outline-danger">Crear Plantilla</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
