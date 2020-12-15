@extends('layouts.app')
@section('title','Tipos de Componentes')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tipo de Componente</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Tipos de Componente') }}<span style="float: right;"><a href="{{ route("component_types.create")}}" class="btn btn-outline-danger">{{ __("Crear Tipo de Componente")}}</a></span></div>
                <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($component_types as $component_type)
                            <tr>
                                <th scope="row">{{ $component_type->id }}</th>
                                <td>{{ $component_type->title }}</td>
                                <td><a href="{{ route("component_types.edit", ["component_type" => $component_type->id ])}}" class="btn btn-outline-danger btn-sm">Editar</a></td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="3"><div><p>No existen datos</p></div></th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $component_types->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
