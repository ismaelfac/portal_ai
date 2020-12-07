@extends('layouts.app')
@section('title','Diligenciar Plantilla')
@section('content')
<div class="card">
    @include('modules.template.form_crud')
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
@endsection
