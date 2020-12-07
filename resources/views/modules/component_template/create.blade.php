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
            <div class="card">
                @foreach ($template as $template)
                @include('modules.template.form_crud')
                @endforeach
            </div>
            <div class="card">
                @forelse ($componentTemplate as $item)
                    <div class="accordion" id="contract{{ $item->id }}">
                        <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne{{ $item->id }}" aria-expanded="false" aria-controls="collapseOne{{ $item->id }}">
                                {!! $item->title !!}
                            </button>
                            </h2>
                        </div>

                        <div id="collapseOne{{ $item->id }}" class="collapse show" aria-labelledby="headingOne" data-parent="#contract{{ $item->id }}">
                            <div class="card-body">
                                {!! $item->content !!}
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
