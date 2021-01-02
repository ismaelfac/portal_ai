@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item" aria-current="page"><a href="/contracts">Contratos</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Crear</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Contratos') }}</div>
                <div id="contract" class="card-body">
                    <form action="{{ route('contracts.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="input-group mb-3 col-md-6">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Titulo</span>
                                </div>
                                <input type="text" name="title_contract" class="form-control" placeholder="Titulo del contracto" aria-label="title_contract" aria-describedby="basic-addon1" />
                            </div>
                            <div class="input-group mb-3 col-md-12">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Descripcion del contrato</span>
                                </div>
                                <input type="text" name="description_contract" class="form-control" placeholder="Titulo del contracto" aria-label="description_contract" aria-describedby="basic-addon1" />
                            </div>
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                      Encabezados
                                    </button>
                                  </h2>
                                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="list-group">
                                            @forelse ($components as $component)
                                                <li class="list-group-item">
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                          <h5 class="mb-1">{{ $component->title}}</h5>
                                                          <small>
                                                            <div class="btn-group btn-group-sm" role="group">
                                                                <button class="btn btn-outline-danger">Aplicar</button>
                                                                    <div class="input-group-prepend">
                                                                      <label class="input-group-text" for="inputGroupSelect01">Orden</label>
                                                                    </div>
                                                                    <select class="custom-select" id="inputGroupSelect01">
                                                                      <option selected>0</option>
                                                                      <option value="1">1</option>
                                                                      <option value="2">2</option>
                                                                      <option value="3">3</option>
                                                                    </select>
                                                                  </div>
                                                          </small>
                                                        </div>
                                                        <p class="mb-1">{{ $component->content }}</p>
                                                        <small>Donec id elit non mi porta.</small>
                                                    </a>
                                                </li>
                                            @empty
                                            <li class="list-group-item">Sin Componentes para asignar</li>
                                            @endforelse
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                      Paragrafos
                                    </button>
                                  </h2>
                                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="list-group">
                                            @forelse ($components as $component)
                                                <li class="list-group-item">
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                          <h5 class="mb-1">{{ $component->title}}</h5>
                                                          <small>
                                                            <div class="btn-group btn-group-sm" role="group">
                                                                <button class="btn btn-outline-danger">Aplicar</button>
                                                                    <div class="input-group-prepend">
                                                                      <label class="input-group-text" for="inputGroupSelect01">Orden</label>
                                                                    </div>
                                                                    <select class="custom-select" id="inputGroupSelect01">
                                                                      <option selected>0</option>
                                                                      <option value="1">1</option>
                                                                      <option value="2">2</option>
                                                                      <option value="3">3</option>
                                                                    </select>
                                                                  </div>
                                                          </small>
                                                        </div>
                                                        <p class="mb-1">{{ $component->content }}</p>
                                                        <small>Donec id elit non mi porta.</small>
                                                    </a>
                                                </li>
                                            @empty
                                            <li class="list-group-item">Sin Componentes para asignar</li>
                                            @endforelse
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                      Pie de Pagina
                                    </button>
                                  </h2>
                                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="list-group list-group-flush">
                                            <div hidden>{{ $i = 1 }}</div>
                                            @forelse ($components as $component)
                                                <div hidden>{{ $i++ }}</div>
                                                <li class="list-group-item">
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="d-flex w-100 justify-content-between">
                                                          <h5 class="mb-1">{{ $component->title}}</h5>
                                                          <small>
                                                            <div class="btn-group btn-group-sm" role="group">
                                                                <button class="btn btn-outline-danger" id="btn_send_component_{{ $i }}" name="btn_send_component_{{$i }}">Aplicar</button>
                                                                    <div class="input-group-prepend">
                                                                      <label class="input-group-text" for="inputGroupSelect01">Orden</label>
                                                                    </div>
                                                                    <select class="custom-select" id="inputGroupSelect01">
                                                                      <option selected>0</option>
                                                                      <option value="1">1</option>
                                                                      <option value="2">2</option>
                                                                      <option value="3">3</option>
                                                                    </select>
                                                                  </div>
                                                          </small>
                                                        </div>
                                                        <p class="mb-1">{{ $component->content }}</p>
                                                        <small>Precione el boton aplicar y seleccione el orden dentro del documento</small>
                                                    </a>
                                                </li>
                                            @empty
                                            <li class="list-group-item">Sin Componentes para asignar</li>
                                            @endforelse
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <div class="input-group mb-3 col-md-12">
                                <button type="submit" class="btn btn-outline-danger">Crear Contrato</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
