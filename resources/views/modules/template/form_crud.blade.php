@csrf
<div class="row p-2">
    <div class="input-group mb-3 col-md-6 col-sm-12">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Contrato Base</label>
        </div>
        <select class="custom-select" id="inputGroupSelect01" name="contract_id">
            @forelse ($contracts as $contract)
                <option selected value="0">Escoja la base del contrato</option>
                <option value="{{ $contract->id }}">{{ $contract->title }}</option>
            @empty
                <option value="0">Sin Informacion</option>
            @endforelse
        </select>
    </div>
    <div class="input-group mb-3 col-md-6 col-sm-12">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Titulo</span>
        </div>
        <input type="text" name="title_template" value="{{ old('title')}}" class="form-control" placeholder="Titulo del Documento" aria-label="title_contract" aria-describedby="basic-addon1" />
    </div>
    <div class="input-group mb-3 col-md-4 col-sm-12">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Documento</span>
        </div>
        <input type="text" name="template_number" value="{{ old('number')}}" class="form-control" aria-label="template_number" aria-describedby="basic-addon1" />
    </div>
    <div class="input-group mb-3 col-md-8 col-sm-12">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Descripcion del contrato</span>
        </div>
        <input type="text" name="description_template" value="{{ old('description' )}}" class="form-control" placeholder="Descripcion del documento" aria-label="description_contract" aria-describedby="basic-addon1" />
    </div>
</div>
