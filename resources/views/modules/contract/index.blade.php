@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contratos</li>
                </ol>
            </nav>
            <div class="card">
            <div class="card-header">{{ __('Contratos') }} <span style="float: right;"><a href="{{ route("contracts.create")}}" class="btn btn-outline-danger">{{ __("Crear Contrato")}}</a></span></div>
                <div class="card-body">
                    <div class="row">
                        <table class="table table-hover table-sm">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Componentes Aplicados</th>
                                <th scope="col">Opciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($contracts as $contract)
                                <tr>
                                    <th scope="row">1</th>
                                    <td style="text-align: center">{{ $contract->title }}</td>
                                    <td>
                                        <ul class="list-group">
                                            @foreach ($components as $component)
                                                <li class="list-group-item">{{ $component->name }}</li>
                                            @endforeach

                                        </ul>
                                    </td>
                                    <td><a href="{{ route("contracts.edit", ["contract" => $contract ])}}" class="btn btn-outline-danger">Editar</a></td>
                                </tr>
                              @empty
                                <tr>
                                    <th colspan="3"><div><p>No existen datos</p></div></th>
                                </tr>
                              @endforelse
                            </tbody>
                          </table>
                          {{ $contracts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
