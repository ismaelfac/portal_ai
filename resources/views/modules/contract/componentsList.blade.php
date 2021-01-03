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
</ul>
