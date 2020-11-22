@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Componentes</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Componentes') }}</div>
                <div class="card-body">
                    <form action="">
                        <div class="row">
                            <div class="input-group mb-3 col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Titulo del Componente</span>
                                </div>
                                <input type="text" name="title_contract" class="form-control" placeholder="Titulo del contracto" aria-label="title_contract" aria-describedby="basic-addon1" />
                            </div>
                            <div class="input-group mb-3 col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Contenido del Componente</span>
                                </div>
                                <textarea class="form-control ckeditor" name="editor1" id="editor1" rows="5"></textarea>
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
@endsection
