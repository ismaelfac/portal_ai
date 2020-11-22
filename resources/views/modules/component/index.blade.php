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
                    <div class="row">
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
                                    <th scope="row">1</th>
                                    <td>{{ $component->title }}</td>
                                    <td>{{ $component->content }}</td>
                                    <td><a href="{{ route("components.edit", ["component" => $component ])}}" class="btn btn-outline-danger">Editar</a></td>
                                </tr>
                              @empty
                                <tr>
                                    <th colspan="3"><div><p>No existen datos</p></div></th>
                                </tr>
                              @endforelse
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
