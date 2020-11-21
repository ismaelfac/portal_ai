@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div className="card-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Componentes</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="/components" class="btn btn-primary">Entrar</a>
                                  </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                              <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Contratos</h5>
                                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                  <a href="/contracts" class="btn btn-primary">Entrar</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                                <div class="card">
                                  <div class="card-body">
                                    <h5 class="card-title">Plantilla</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="/templates" class="btn btn-primary">Entrar</a>
                                  </div>
                                </div>
                              </div>
                        </div>
                        <div class="row">
                            <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Plantilla</th>
                                    <th scope="col">Documento</th>
                                    <th scope="col">Opciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Contrato Arriendo Sin Admin</td>
                                    <td>Aliados - Pedro Perez</td>
                                    <td><a href="#" class="btn btn-outline-danger">Editar</a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">2</th>
                                    <td>Contrato de Administracion</td>
                                    <td>Aliados - Comercializadora</td>
                                    <td><a href="#" class="btn btn-outline-danger">Editar</a></td>
                                  </tr>
                                  <tr>
                                    <th scope="row">3</th>
                                    <td>Contrato de Arriendo con Admin</td>
                                    <td>Aliados - Banco ABC</td>
                                    <td><a href="#" class="btn btn-outline-danger">Editar</a></td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
