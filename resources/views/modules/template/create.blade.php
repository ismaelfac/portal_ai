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
                <div class="card-header">{{ __('Plantilla') }}</div>
                <div id="contract" class="card-body">
                    <form action="{{ route('templates.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-group mb-3 col-md-6 col-sm-12">
                                <div class="input-group-prepend">
                                  <label class="input-group-text" for="inputGroupSelect01">Contrato Base</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                  @forelse ($contracts as $contract)
                                <option selected>{{ $contract->title }}</option>
                                  @empty
                                    <option value="0">Sin Informacion</option>
                                  @endforelse
                                </select>
                            </div>
                            <div class="input-group mb-3 col-md-6 col-sm-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Número de Documento</span>
                                </div>
                                <input type="text" name="template_number" class="form-control" aria-label="template_number" aria-describedby="basic-addon1" />
                            </div>
                            <div class="input-group mb-3 col-md-6 col-sm-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Titulo</span>
                                </div>
                                <input type="text" name="title_template" class="form-control" placeholder="Titulo del Documento" aria-label="title_contract" aria-describedby="basic-addon1" />
                            </div>
                            <div class="input-group mb-3 col-md-6 col-sm-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Descripcion del contrato</span>
                                </div>
                                <input type="text" name="description_template" class="form-control" placeholder="Descripcion del documento" aria-label="description_contract" aria-describedby="basic-addon1" />
                            </div>
                            <div class="input-group mb-3 col-md-12">
                                <button type="submit" class="btn btn-outline-danger">Crear Plantilla</button>
                            </div>
                        </div>
                    </form>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                        </li>
                        <li class="nav-item" role="presentation">
                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
