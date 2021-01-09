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
            <div class="card-header">{{ __('Contratos') }} <span style="float: right;"><a href="{{ route("contracts.create")}}" class="btn btn-outline-danger btn-sm">{{ __("Crear Contrato")}}</a></span></div>
                <div class="card-body">
                    <div class="row">
                        <table class="table table-hover table-sm">
                            <thead>
                              <tr>
                                <th scope="col">Titulo</th>
                                <th scope="col">Componentes Aplicados</th>
                                <th scope="col">Opciones</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($contracts as $contract)
                                <tr>
                                    <td>{{ $contract->title}}</td>
                                    <td>{{ $contract->description }}</td>
                                    <td>
                                        {{ count($contract->components )}}
                                    </td>
                                    <td>
                                            <a href="{{ url("contracts/$contract->slug/edit") }}" class="btn btn-outline-danger btn-sm">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.134 13.134 0 0 0 1.66 2.043C4.12 11.332 5.88 12.5 8 12.5c2.12 0 3.879-1.168 5.168-2.457A13.134 13.134 0 0 0 14.828 8a13.133 13.133 0 0 0-1.66-2.043C11.879 4.668 10.119 3.5 8 3.5c-2.12 0-3.879 1.168-5.168 2.457A13.133 13.133 0 0 0 1.172 8z"/>
                                                <path fill-rule="evenodd" d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                            </svg></a>
                                            <a href="{{ url("downloadpdf", ["contract" => $contract->id]) }}" target="_blank" class="btn btn-outline-danger btn-sm">
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-word" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                                                <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                                                <path fill-rule="evenodd" d="M4.879 6.515a.5.5 0 0 1 .606.364l1.036 4.144.997-3.655a.5.5 0 0 1 .964 0l.997 3.655 1.036-4.144a.5.5 0 0 1 .97.242l-1.5 6a.5.5 0 0 1-.967.01L8 9.402l-1.018 3.73a.5.5 0 0 1-.967-.01l-1.5-6a.5.5 0 0 1 .364-.606z"/>
                                            </svg></a>

                                    </td>
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
