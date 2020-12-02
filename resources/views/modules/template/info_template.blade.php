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

    </div>
</div>
