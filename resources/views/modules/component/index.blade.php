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
            <div class="card-header">{{ __('Componentes') }} <span style="float: right;"><a href="{{ route("components.create")}}" class="btn btn-outline-danger">{{ __("Crear Componente")}}</a></span></div>
                <div class="card-body">
                    <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Contenido</th>
                            <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($components as $component)
                            <tr>
                                <th scope="row">{{ $component->id }}</th>
                                <td style="text-align: center">{{ $component->title }}</td>
                                <td style="text-align: justify">{!! $component->content !!}</td>
                                <td><a href="{{ url("components/$component->slug/edit ") }}" class="btn btn-outline-danger">Editar</a></td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="3"><p style="text-align: center">Sin componentes creados</p></th>
                            </tr>
                            @endforelse
                        </tbody>
                        </table>
                        {{ $components->links() }}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
