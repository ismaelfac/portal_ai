@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href="/contracts">Contratos</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Crear</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Contratos') }}</div>
                <div id="contract" class="card-body">
                    <form action="{{ route('contracts.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-group mb-3 col-md-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Titulo</span>
                                </div>
                                <input type="text" name="title_contract" class="form-control" placeholder="Titulo del contracto" aria-label="title_contract" aria-describedby="basic-addon1" />
                            </div>
                            <div class="input-group mb-3 col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Descripcion del contrato</span>
                                </div>
                                <input type="text" name="description_contract" class="form-control" placeholder="Titulo del contracto" aria-label="description_contract" aria-describedby="basic-addon1" />
                            </div>
                            @forelse ($componentTypes as $componentType)
                                <div class="accordion accordion-flush" id="accordionFlush{{ $componentType->id }}">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-heading{{ $componentType->id }}">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $componentType->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                                                {{ $componentType->title}}
                                            </button>
                                        </h2>
                                        <div id="flush-collapse{{ $componentType->id }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $componentType->id }}" data-bs-parent="#accordionFlush{{ $componentType->id }}">
                                            <div class="accordion-body">
                                                @include('modules.contract.componentsList')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h2>Sin Componentes Disponibles o posibles problemas de conexión</h2>
                            @endforelse

                            <div class="input-group mb-3 col-md-12">
                                <button type="submit" class="btn btn-outline-danger">Crear Contrato</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
