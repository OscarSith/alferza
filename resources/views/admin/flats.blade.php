@extends('layouts.app')

@section('content')
<div class="container-xl">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 d-flex align-items-center">
                            <span class="me-2">{{ __('Listado de planos por proyecto') }}</span>
                            <select name="select_project_id" id="select_project_id" class="form-select w-auto" onchange="changeProjectId(event)">
                                @foreach ($projects as $project)
                                <option value="{{ $project->id }}" {{ $project->id == $current_project_id ? 'selected' : ''}}>{{ $project->name }}</option>
                                @endforeach
                            </select>
                            <form id="form-index" method="GET"></form>
                        </h4>
                        <div>
                            <x-button-new text="Nuevo Plano" />
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('partials.validations_errors')
                    @include('partials.single_messages')
                    <div class="row">
                        @forelse ($flats as $flat)
                        <div class="col-md-6 mb-3">
                            <div class="card">
                                <img src="{{ asset('images/proyectos/planos/' . $flat->picture) }}" class="card-img-top" alt="Plano {{ $loop->index }}">
                                <div class="card-body">
                                    <h6>{{ $flat->name }}</h6>
                                    <div class="row cols-3 mb-2">
                                        <div class="col">{{ $flat->size_meters}}m<sup>2</sup></div>
                                        <div class="col">
                                            <strong>Cuartos:</strong> {{ $flat->room}} <i class="fas fa-bed"></i>
                                        </div>
                                        <div class="col">
                                            <strong>Baños:</strong> {{ $flat->bath}} <i class="fas fa-bath"></i>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <strong>Tipología:</strong> {{ $flat->typology }}
                                        </div>
                                        <div class="col">
                                            S/ {{ $flat->price }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{ route('flatDestroy', $flat) }}" method="POST" class="m-0" onsubmit="dialogConfirm(event)">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                            </form>
                                        </div>
                                        <div class="col text-end">
                                            <a href="{{ route('flatsEdit', [$current_project_id, $flat]) }}" class="btn btn-sm btn-success">Editar</a>
                                        </div>
                                    </div>
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
          <form action="{{ route('flatStore') }}" enctype="multipart/form-data" method="POST">
              @csrf
              <input type="hidden" name="project_id" id="project_id" value="{{ $current_project_id }}">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Adjuntar nuevo plano</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="file" class="form-control" id="picture" name="picture">
                        <div class="form-text small">Recomendado 580 x 480 pixeles</div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="label-form">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="size_meters" class="label-form">Metros</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="size_meters" name="size_meters" value="{{ old('size_meters') }}">
                                    <div class="input-group-text">m<sup>2</sup></div>
                                </div>
                            </div>
                            <div class="col">
                                <label for="room" class="label-form">Cuartos</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fas fa-bed"></i>
                                    </div>
                                    <input type="num" class="form-control" id="room" name="room" value="{{ old('room') }}">
                                </div>
                            </div>
                            <div class="col">
                                <label for="bath" class="label-form">Baños</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="fas fa-bath"></i>
                                    </div>
                                    <input type="num" class="form-control" id="bath" name="bath" value="{{ old('bath') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col">
                                <label for="typology" class="label-form">Tipología</label>
                                <input type="text" class="form-control" id="typology" name="typology" value="{{ old('typology') }}">
                            </div>
                            <div class="col">
                                <label for="price" class="label-form">Precio</label>
                                <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                            </div>
                        </div>
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
        let url_action = "{{ route('flatsIndex', 'ID') }}";
        url_action = url_action.replace('ID', e.target.value);
        const formIndex = document.getElementById('form-index');
        formIndex.setAttribute('action', url_action);
        formIndex.submit();
    }
</script>
@endsection
