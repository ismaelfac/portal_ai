@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href="/contracts">Contratos</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contratos - Componente</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Componentes') }}</div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table table-hover table-sm">
                                <thead>
                                  <tr>
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Contenido</th>
                                    <th scope="col">Opciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @forelse ($components as $component)
                                    <tr>
                                        <td>{{ $component->id}}</td>
                                        <td style="text-align: center">{{ $component->title }}</td>
                                        <td style="text-align: center">{!! $component->content !!}</td>
                                        <td>
                                            <a href="/contract_components" class="btn btn-outline-danger">Asignar Componente</a>
                                        </td>
                                    </tr>
                                  @empty
                                    <tr>
                                        <th colspan="3"><div><p>No existen datos</p></div></th>
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
</div>
@endsection
