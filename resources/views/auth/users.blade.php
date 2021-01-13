@extends('layouts.app')
@section('title','Usuarios')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Usuarios') }}<span style="float: right;"><a href="{{ route("users.create")}}" class="btn btn-outline-danger">{{ __("Crear Usuario")}}</a></span></div>
                <table class="table table-hover table-sm">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Email</th>
                            <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div hidden>{{ $i=1 }}</div>
                            @forelse ($users as $user)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{!! $user->email !!}</td>
                                <td><a href="{{ url("users/{$user->slug}/edit")}}" class="btn btn-outline-primary btn-sm">Editar</a>
                                    <a href="{{ url("users/{$user->slug}/edit")}}" class="btn btn-outline-danger btn-sm">Inactivar</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="3"><div><p>No existen datos</p></div></th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
