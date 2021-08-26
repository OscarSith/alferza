@extends('layouts.app')

@section('content')
<div class="container-xl">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 d-flex align-items-center">
                            <span class="me-2">{{ __('Listado de imagenes por proyecto') }}</span>
                            <select name="select_project_id" id="select_project_id" class="form-select w-auto" onchange="changeProjectId(event)">
                                @foreach ($projects as $project)
                                <option value="{{ $project->id }}" {{ $project->id == $current_project_id ? 'selected' : ''}}>{{ $project->name }}</option>
                                @endforeach
                            </select>
                            <form id="form-index" method="GET"></form>
                        </h4>
                        <div>
                            <x-button-new text="Nueva Imagen" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('partials.validations_errors')
                    @include('partials.single_messages')
                    <div class="row">
                        @forelse ($pictures as $picture)
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <img src="{{ asset('images/proyectos/galeria/' . $picture->picture) }}" class="card-img-top" alt="Imagen galeria {{ $loop->index }}">
                                <div class="card-body">
                                    <form action="{{ route('pictureDestroy', $picture) }}" method="POST" class="m-0" onsubmit="dialogConfirm(event)">
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
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <form action="{{ route('pictureStore') }}" enctype="multipart/form-data" method="POST">
              @csrf
              <input type="hidden" name="project_id" id="project_id" value="{{ $current_project_id }}">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Adjuntar nueva imagen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <input type="file" class="form-control" id="picture" name="picture">
                <div class="form-text small">Recomendado 580 x 480 pixeles</div>
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
        if (!confirm('Seguro(a) de eliminar este imagen?')) {
            e.preventDefault();
        }
    }

    function changeProjectId(e) {
        let url_action = "{{ route('picturesIndex', 'ID') }}";
        url_action = url_action.replace('ID', e.target.value);
        const formIndex = document.getElementById('form-index');
        formIndex.setAttribute('action', url_action);
        formIndex.submit();
    }
</script>
@endsection
