@extends('layouts.app')
@section('title','Plantillas')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Plantilla</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Template') }}<span style="float: right;"><a href="{{ route("templates.create")}}" class="btn btn-outline-danger">{{ __("Generar Plantilla")}}</a></span></div>
                <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Contrato Base</th>
                            <th scope="col">Plantilla</th>
                            <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div hidden>{{ $i=1 }}</div>
                            @forelse ($templates as $template)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $template->contract->title }}</td>
                                <td>{!! $template->title !!}</td>
                                <td><a href="{{ url("templates/{$template->slug}/edit")}}" class="btn btn-outline-danger btn-sm">Editar</a></td>
                                <td><a href="{{ url("components_template_id/{$template->slug}") }}" class="btn btn-outline-danger btn-sm">Sin Diligenciar</a></td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="3"><div><p>No existen datos</p></div></th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $templates->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
