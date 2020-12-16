@extends('layouts.app')
@section('title','Diligenciar Plantilla')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href="{{ route('templates.index')}}">Plantilla</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Componentes de Plantilla</li>
                </ol>
            </nav>
            <div class="card mb-4">
                @foreach ($template as $template)
                    @include('modules.template.form_crud')
                @endforeach
            </div>
            <div class="card">
                @forelse ($template->component_templates as $component)
                    <div class="accordion" id="contract{{ $component->component_id }}">
                        <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                            <div class="btn-group group-sm" role="group" aria-label="Basic example">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne{{ $component->component_id }}" aria-expanded="true" aria-controls="collapseOne{{ $component->component_id }}">
                                {!! $component->title_component !!}
                            </button>
                            <button class="btn btn-outline-danger">Salvar</button>
                                </div>
                            </h2>
                        </div>
                        <div id="collapseOne{{ $component->component_id }}" class="collapse" aria-labelledby="headingOne" data-parent="#contract{{ $component->component_id }}">
                            <div class="card-body">
                                {!! $component->content !!}
                            </div>
                        </div>
                        </div>
                    </div>
                @empty
                    <h2>Sin Componentes definidos</h2>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
