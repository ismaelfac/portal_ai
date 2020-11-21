@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Contratos') }}</div>
                <div class="card-body">
                        <form action="">
                            <div class="row">
                                <div class="input-group mb-3 col-md-12">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">Titulo</span>
                                    </div>
                                    <input type="text" name="title_contract" class="form-control" placeholder="Titulo del contracto" aria-label="title_contract" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3 col-md-12">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">Descripcion del contrato</span>
                                    </div>
                                    <input type="text" name="title_contract" class="form-control" placeholder="Titulo del contracto" aria-label="title_contract" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group mb-3 col-md-12">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">Titulo</span>
                                    </div>
                                    <input type="text" name="title_contract" class="form-control" placeholder="Titulo del contracto" aria-label="title_contract" aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
