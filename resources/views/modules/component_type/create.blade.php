@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href="/component_types">Tipo de Componentes</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Crear</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Crear Componentes') }}</div>
                <div class="card-body">
                    <form action="{{ route('component_types.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-group mb-3 col-md-6 col-sm-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Titulo</span>
                                </div>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Tipo de componente" aria-label="title_type_component" aria-describedby="basic-addon1" />
                            </div>
                            <div class="input-group mb-3 col-md-12">
                                <button type="submit" class="btn btn-outline-danger">Crear Componente</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="">
    CKEDITOR.replace('content');
</script>
@endsection
