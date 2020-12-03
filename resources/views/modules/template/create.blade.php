@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href="/contracts">Plantilla</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Crear</li>
                </ol>
            </nav>
            <div class="card">
                @forelse ($contentTemplate[0]->components as $item)
                    <div class="accordion" id="contract{{ $item->id }}">
                        <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne{{ $item->id }}" aria-expanded="true" aria-controls="collapseOne{{ $item->id }}">
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
                    @include('modules.template.info_template')
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection
