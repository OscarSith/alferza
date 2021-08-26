@extends('layouts.app')

@section('content')
<link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet">
<div class="container-xl">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    {{ __('Editar Proyecto') }}
                </div>

                <div class="card-body">
                    @include('partials.validations_errors')
                    @include('partials.single_messages')
                    <form action="{{ route('projectUpdate', $project) }}" method="POST" id="form" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <img src="{{ asset('images/proyectos/' . $project->main_picture) }}" alt="Banner Principal" class="w-100 mb-3">
                        <div class="mb-4">
                            <button type="button" class="btn btn-sm btn-warning" id="btn-change-banner">Cambiar banner</button>
                            <div class="input-group d-none" id="control-file-banner">
                                <input type="file" class="form-control" id="main_picture" name="main_picture" aria-describedby="addonCancel">
                                <button class="btn btn-outline-danger" type="button" id="addonCancel">Cancelar</button>
                            </div>
                            <div class="form-text small">Recomendado 1800 x 480 pixeles</div>
                        </div>
                        <hr>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <div class="d-flex flex-column h-100 border rounded p-3">
                                    @if ($project->logo_picture)
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <img src="{{ asset('images/proyectos/' . $project->logo_picture) }}" alt="Logo" class="img-fluid mx-auto d-block" style="max-width: 230px">
                                        <button type="button" class="btn btn-sm btn-warning mt-4" id="btn-change-logo">Cambiar logo</button>
                                    </div>
                                    @endif
                                    <div id="logo-fileinput-content" class="mt-auto {{ $project->logo_picture ? 'd-none' : ''}}">
                                        <label for="logo_picture" class="form-label">Logo</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="logo_picture" name="logo_picture" aria-describedby="addonCancelLogo">
                                            <button class="btn btn-outline-danger" type="button" id="addonCancelLogo">Cancelar</button>
                                        </div>
                                        <div class="form-text small">Recomendado 500 x 300 pixeles, que el logo ocupe exacto ese tamaño.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="h-100 border rounded p-3">
                                    @if ($project->mini_picture)
                                        <div class="d-flex flex-column align-items-center">
                                            <img src="{{ asset('images/proyectos/' . $project->mini_picture) }}" alt="Logo" class="img-fluid mx-auto d-block" style="max-width: 240px">
                                            <button type="button" class="btn btn-sm btn-warning mt-3" id="btn-change-minipicture">Cambiar imagen</button>
                                        </div>
                                    @endif
                                    <div id="minipicture-fileinput-content" class="mt-2 {{ $project->mini_picture ? 'd-none' : ''}}">
                                        <label for="mini_picture" class="form-label">Imagen de fondo</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="mini_picture" id="mini_picture" aria-describedby="addonCancelMiniPicture">
                                            <button class="btn btn-outline-danger" type="button" id="addonCancelMiniPicture">Cancelar</button>
                                        </div>
                                        <div class="form-text small">Recomendado 400 x 400 pixeles y con transparencia (.png)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="name" class="form-label">* Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
                                </div>
                                <div class="col-md-3">
                                    <label for="sperant_project_id" class="form-label">ID Proyecto Sperant</label>
                                    <input type="number" class="form-control" id="sperant_project_id" name="sperant_project_id" value="{{ old('sperant_project_id', $project->sperant_project_id) }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">* Dirección</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $project->address) }}">
                        </div>
                        <div class="mb-5">
                            <label for="description" class="form-label">* Descripción</label>
                            <input type="hidden" id="description" name="description" value="{{ old('description', $project->description) }}">
                            <div id="quill-description" class="normal-height">
                                {!! old('description', $project->description) !!}
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="start_price" class="form-label">Precio desde</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="icon-currency">S/</span>
                                        <input type="text" class="form-control" id="start_price" name="start_price" value="{{ old('start_price', $project->start_price) }}" aria-describedby="icon-currency">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label mb-2">* Tipo</div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="build_type_dpto" name="build_type" value="DPTOS" {{ old('build_type', $project->build_type) == 'DPTOS' ? 'checked' : ''}}>
                                        <label class="form-check-label" for="build_type_dpto">DPTOS</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="build_type_casas" name="build_type" value="CASAS" {{ old('build_type', $project->build_type) == 'CASAS' ? 'checked' : ''}}>
                                        <label class="form-check-label" for="build_type_casas">CASAS</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="quantity" class="form-label">* Cantidad</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $project->quantity) }}">
                                </div>
                                <div class="col-md-3">
                                    <label for="typologies" class="form-label">* Tipología</label>
                                    <input type="text" class="form-control" id="typologies" name="typologies" value="{{ old('typologies', $project->typologies) }}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="rooms" class="form-label">* Cuartos</label>
                                    <input type="text" class="form-control" id="rooms" name="rooms" value="{{ old('rooms', $project->rooms) }}">
                                </div>
                                <div class="col-md-2">
                                    <label for="baths" class="form-label">* Baños</label>
                                    <input type="text" class="form-control" id="baths" name="baths" value="{{ old('baths', $project->baths) }}">
                                </div>
                                <div class="col-md-8">
                                    <label for="brochure" class="form-label">Brochure</label>
                                    @if ($project->brochure != null)
                                    <div id="brochure-content">
                                        <a href="{{ asset('brochures/' . $project->brochure) }}" class="small d-block mb-2" target="_blank">{{ $project->brochure }}</a>
                                        <button type="button" id="btn-change-brochure" class="btn btn-sm btn-warning">Cambiar brochure</button>
                                    </div>
                                    @endif
                                    <div class="input-group {{ $project->brochure ? 'd-none' : ''}}" id="control-file-brochure">
                                        <input type="file" class="form-control" id="brochure" name="brochure" aria-describedby="addonCancelBrochure">
                                        @if ($project->brochure)
                                            <button class="btn btn-outline-danger" type="button" id="addonCancelBrochure">Cancelar</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="apartments_detail" class="form-label">Detalles de los departamentos</label>
                                    <input type="hidden" id="apartments_detail" name="apartments_detail" value="{{ old('apartments_detail', $project->apartments_detail) }}">
                                    <div id="quill-apartments_detail" class="medium-height">
                                        {!! old('apartments_detail', $project->apartments_detail) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="location" class="form-label">* Ubicación</label>
                                        <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $project->location) }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="build_status" class="form-label">* Estado</label>
                                        <select class="form-select" id="build_status" name="build_status">
                                            <option value="PREVENTA" {{ old('build_status', $project->build_status) == 'PREVENTA' ? 'selected' : '' }}>PREVENTA</option>
                                            <option value="CONSTRUCCION" {{ old('build_status', $project->build_status) == 'CONSTRUCCION' ? 'selected' : '' }}>CONSTRUCCION</option>
                                            <option value="ENTREGADO" {{ old('build_status', $project->build_status) == 'ENTREGADO' ? 'selected' : '' }}>ENTREGADO</option>
                                            <option value="LANZAMIENTO" {{ old('build_status', $project->build_status) == 'LANZAMIENTO' ? 'selected' : '' }}>LANZAMIENTO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="google_map" class="form-label">* Google maps</label>
                            <input type="text" class="form-control" id="google_map" name="google_map" value="{{ old('google_map', $project->google_map) }}">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    let quillDesc = new Quill('#quill-description', {
      theme: 'snow'
    });

    let quillDetails = new Quill('#quill-apartments_detail', {
      theme: 'snow'
    });

    const handlerChangeInputFile = (btnChangeText, btnCancelText, contentElemText) => {
        const btnChange = document.getElementById(btnChangeText);
        if (btnChange) {
            btnChange.addEventListener('click', (e) => {
                e.target.classList.add('d-none');
                document.getElementById(contentElemText).classList.remove('d-none');
            });
            document.getElementById(btnCancelText).addEventListener('click', (e) => {
                e.target.previousElementSibling.value = '';
                document.getElementById(btnChangeText).classList.remove('d-none');
                e.target.closest('#' + contentElemText).classList.add('d-none');
            });
        }
    };

    // Banner
    handlerChangeInputFile('btn-change-banner', 'addonCancel', 'control-file-banner');

    // Logo
    handlerChangeInputFile('btn-change-logo', 'addonCancelLogo', 'logo-fileinput-content');

    // Brochure
    handlerChangeInputFile('btn-change-brochure', 'addonCancelBrochure', 'control-file-brochure');

    // Mini picture
    handlerChangeInputFile('btn-change-minipicture', 'addonCancelMiniPicture', 'minipicture-fileinput-content');

    document.getElementById('form').addEventListener('submit', function(e) {
        document.getElementById('description').value = quillDesc.root.innerHTML;
        document.getElementById('apartments_detail').value = quillDetails.root.innerHTML;
        e.target.disabled = true;
    });
</script>
@endsection
