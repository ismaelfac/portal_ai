<ul class="list-group list-group-flush">
    @foreach ($components as $component)
        @if ($component->component_type_id === $componentType->id)
        <li class="list-group-item">
            <div class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{ $component->title}}</h5>
                  <small>
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck{{ $component->id }}" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btncheck{{ $component->id }}">Aplicar</label>

                      </div>
                  </small>
                </div>
                <p class="mb-1"><div style="text-align: justify">{!! $component->content !!}</div></p>
                <small>Precione el boton aplicar y seleccione el orden dentro del documento</small>
            </div>
        </li>
        @endif
    @endforeach
    @forelse ($componentTypes as $componentType)
        <div class="accordion accordion-flush" id="accordionFlush{{ $componentType->id }}">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading{{ $componentType->id }}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $componentType->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                        {{ $componentType->title}}
                    </button>
                </h2>
                <div id="flush-collapse{{ $componentType->id }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $componentType->id }}" data-bs-parent="#accordionFlush{{ $componentType->id }}">
                    <div class="accordion-body">
                        @include('modules.contract.formListComponent')
                    </div>
                </div>
            </div>
        </div>
    @empty
        <h2>Sin Componentes Disponibles o posibles problemas de conexión</h2>
    @endforelse
</ul>
