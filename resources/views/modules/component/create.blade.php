@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href="/components">Componentes</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Crear</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Crear Componentes') }}</div>
                <div class="card-body">
                    <form action="{{ route('components.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-group mb-3 col-md-6 col-sm-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Titulo del Componente</span>
                                </div>
                                <input type="text" name="title" id="title" class="form-control" placeholder="Titulo del contracto" aria-label="title_contract" aria-describedby="basic-addon1" />
                            </div>
                            <div class="input-group mb-3 col-md-6 col-sm-12">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Tipo de Componente</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01" name="contract_id">
                                    <option selected value="0">Escoja la base del contrato</option>
                                    @forelse ($component_types as $component_type)
                                        <option value="{{ $component_type->id }}">{{ $component_type->title }}</option>
                                    @empty
                                        <option value="0">Sin Informacion</option>
                                    @endforelse
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Contenido del Componente</span>
                                </div>
                                <textarea class="form-control ckeditor" name="content" id="content" rows="5" cols="10"></textarea>
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
