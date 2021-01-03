<ul class="list-group list-group-flush">
    @forelse ($components as $component)
        <li class="list-group-item">
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">{{ $component->title}}</h5>
                  <small>
                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                        <input type="checkbox" class="btn-check" id="btncheck{{ $component->id }}" autocomplete="off">
                        <label class="btn btn-outline-primary" for="btncheck{{ $component->id }}">Aplicar</label>

                      </div>
                  </small>
                </div>
                <p class="mb-1">{!! $component->content !!}</p>
                <small>Precione el boton aplicar y seleccione el orden dentro del documento</small>
            </a>
        </li>
    @empty
    <li class="list-group-item">Sin Componentes para asignar</li>
    @endforelse
</ul>
