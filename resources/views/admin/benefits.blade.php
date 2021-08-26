@extends('layouts.app')

@section('content')
<div class="container-xl">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 d-flex align-items-center">
                            <span class="me-2">{{ __('Listado de Beneficios por proyecto') }}</span>
                            <select name="select_project_id" id="select_project_id" class="form-select w-auto" onchange="changeProjectId(event)">
                                @foreach ($projects as $project)
                                <option value="{{ $project->id }}" {{ $project->id == $current_project_id ? 'selected' : ''}}>{{ $project->name }}</option>
                                @endforeach
                            </select>
                            <form id="form-index" method="GET"></form>
                        </h4>
                        <div>
                            <x-button-new text="Nuevo Beneficio"></x-button-new>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('partials.validations_errors')
                    @include('partials.single_messages')
                    <div class="row">
                        @forelse ($benefits as $benefit)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <div class="text-center pt-3">
                                    @if ($benefit->icon2 != null)
                                    <span class="fa-stack" style="font-size: 2rem">
                                        <i class="{{ $benefit->icon }} fa-stack-2x"></i>
                                        <i class="{{ $benefit->icon2 }} fa-stack-1x {{ $benefit->icon_rotate }}"
                                            @if (Str::lower($benefit->name) === 'ascensores' || Str::lower($benefit->name) === 'zona de lavado de mascotas')
                                            style='margin-top: 8px'
                                        @endif
                                        ></i>
                                    </span>
                                    @else
                                        <i class="{{ $benefit->icon }} fa-4x"></i>
                                    @endif
                                </div>
                                <div class="card-body">
                                    <h6 class="small">{{ $benefit->name }}</h6>
                                    <form action="{{ route('benefitDestroy', [$current_project_id, $benefit]) }}" method="POST" class="m-0" onsubmit="dialogConfirm(event)">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p class="text-center mt-5 mb-5">No hay imagenes que mostrar</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
          <form action="{{ route('benefitStore', $current_project_id) }}" enctype="multipart/form-data" method="POST">
              @csrf
              <input type="hidden" name="project_id" id="project_id" value="{{ $current_project_id }}">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agregar Beneficio</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <div class="modal-body">
                    <p>Lista de iconos <a href="https://fontawesome.com/v5.15/icons?d=gallery&p=2&m=free" target="_blank">fontawesome.io</a>, copiar solo la clase css que genera el icono, ejem: fab fa-apple</p>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="icon" class="label-form">Icono</label>
                                <input type="text" class="form-control" id="icon" name="icon" placeholder="fab fa-apple">
                            </div>
                            <div class="mb-3">
                                <label for="icon2" class="label-form">Icono2</label>
                                <input type="text" class="form-control" id="icon2" name="icon2">
                                <div class="form-text">* Agregando otro icono se comporta como en <a href="https://fontawesome.com/v5.15/how-to-use/on-the-web/styling/stacking-icons" target="_blank">este ejemplo</a>.</div>
                            </div>
                            <div class="mb-3">
                                <label for="icon_rotate" class="label-form">Otros</label>
                                <input type="text" class="form-control" id="icon_rotate" name="icon_rotate" placeholder="fa-rotate-90 fa-inverse">
                                <div class="form-text">* Lista de clases opcionales como rotación, <a href="https://fontawesome.com/v5.15/how-to-use/on-the-web/styling/rotating-icons" target="_blank">ejemplos</a>.</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border border-secondary border-2 rounded h-100 p-4">
                                <div id="icon-preview" class="d-flex justify-content-center align-items-center h-100">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="label-form">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
          </form>
      </div>
    </div>
</div>
@endsection

@section('script')
<script>
    function dialogConfirm(e) {
        if (!confirm('Seguro(a) de eliminar este plano?')) {
            e.preventDefault();
        }
    }

    function changeProjectId(e) {
        let url_action = "{{ route('benefitsIndex', 'ID') }}";
        url_action = url_action.replace('ID', e.target.value);
        const formIndex = document.getElementById('form-index');
        formIndex.setAttribute('action', url_action);
        formIndex.submit();
    }

    let icon_preview = document.getElementById('icon-preview');
    let icon1 = document.getElementById('icon');
    let icon2 = document.getElementById('icon2');
    let otros = document.getElementById('icon_rotate');

    icon1.addEventListener('keyup', (e) => {
        icon_preview.innerHTML = `<i class="${e.target.value} fa-5x"></i>`;
    });
    icon2.addEventListener('keyup', (e) => {
        if (e.target.value != '') {
            icon_preview.innerHTML = `<span class="fa-stack fa-3x">
                        <i class="${ icon1.value } fa-stack-2x"></i>
                        <i class="${ e.target.value } fa-stack-1x"></i>
                    </span>`;
        } else {
            icon_preview.innerHTML = `<i class="${icon1.value} fa-5x"></i>`;
        }
    });

    otros.addEventListener('keyup', (e) => {
        if (e.target.value != '' && icon2.value != '') {
            icon_preview.innerHTML = `<span class="fa-stack fa-3x">
                        <i class="${ icon1.value } fa-stack-2x"></i>
                        <i class="${ icon2.value } fa-stack-1x ${e.target.value}"></i>
                    </span>`;
        } else {
            icon_preview.innerHTML = `<i class="${icon1.value} ${e.target.value} fa-5x"></i>`;
        }
    });
</script>
@endsection
