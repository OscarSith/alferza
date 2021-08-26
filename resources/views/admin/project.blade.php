@extends('layouts.app')

@section('content')
<link href="{{ asset('css/quill.snow.css') }}" rel="stylesheet">
<div class="container-xl">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    {{ __('Nuevo Proyecto') }}
                </div>

                <div class="card-body">
                    @include('partials.validations_errors')
                    @include('partials.single_messages')
                    <form action="{{ route('projectStore') }}" method="POST" id="form" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="main_picture" class="form-label">Banner</label>
                            <input type="file" class="form-control" id="main_picture" name="main_picture">
                            <div class="form-text small">Recomendado 1800 x 480 pixeles</div>
                        </div>
                        <hr>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <label for="logo_picture" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="logo_picture" name="logo_picture">
                                <div class="form-text small">Recomendado 500 x 300 pixeles, que el logo ocupe exacto ese tamaño.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="mini_picture" class="form-label">Imagen de fondo</label>
                                <input type="file" class="form-control" name="mini_picture" id="mini_picture">
                                <div class="form-text small">Recomendado 400 x 400 pixeles y con transparencia (.png)</div>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-9">
                                    <label for="name" class="form-label">* Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="col-md-3">
                                    <label for="sperant_project_id" class="form-label">ID Proyecto Sperant</label>
                                    <input type="number" class="form-control" id="sperant_project_id" name="sperant_project_id" value="{{ old('sperant_project_id') }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">* Dirección</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                        </div>
                        <div class="mb-5">
                            <label for="description" class="form-label">* Descripción</label>
                            <input type="hidden" id="description" name="description" value="{{ old('description') }}">
                            <div id="quill-description" class="normal-height">
                                {!! old('description') !!}
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="start_price" class="form-label">Precio desde</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="icon-currency">S/</span>
                                        <input type="text" class="form-control" id="start_price" name="start_price" value="{{ old('start_price') }}" aria-describedby="icon-currency">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-label mb-2">* Tipo</div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="build_type_dpto" name="build_type" value="DPTOS" {{ old('build_type') == 'DPTOS' ? 'checked' : ''}}>
                                        <label class="form-check-label" for="build_type_dpto">DPTOS</label>
                                      </div>
                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" id="build_type_casas" name="build_type" value="CASAS" {{ old('build_type') == 'CASAS' ? 'checked' : ''}}>
                                        <label class="form-check-label" for="build_type_casas">CASAS</label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="quantity" class="form-label">* Cantidad</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity') }}">
                                </div>
                                <div class="col-md-3">
                                    <label for="typologies" class="form-label">* Tipología</label>
                                    <input type="text" class="form-control" id="typologies" name="typologies" value="{{ old('typologies') }}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <label for="rooms" class="form-label">* Cuartos</label>
                                    <input type="text" class="form-control" id="rooms" name="rooms" value="{{ old('rooms') }}">
                                </div>
                                <div class="col-md-2">
                                    <label for="baths" class="form-label">* Baños</label>
                                    <input type="text" class="form-control" id="baths" name="baths" value="{{ old('baths') }}">
                                </div>
                                <div class="col-md-8">
                                    <label for="brochure" class="form-label">Brochure</label>
                                    <input type="file" class="form-control" id="brochure" name="brochure">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mb-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="apartments_detail" class="form-label">Detalles de los departamentos</label>
                                    <input type="hidden" id="apartments_detail" name="apartments_detail" value="{{ old('apartments_detail') }}">
                                    <div id="quill-apartments_detail" class="medium-height">
                                        {!! old('apartments_detail') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="location" class="form-label">* Ubicación</label>
                                        <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="build_status" class="form-label">* Estado</label>
                                        <select class="form-select" id="build_status" name="build_status">
                                            <option value="PREVENTA" {{ old('build_status') == 'PREVENTA' ? 'selected' : '' }}>PREVENTA</option>
                                            <option value="CONSTRUCCION" {{ old('build_status') == 'CONSTRUCCION' ? 'selected' : '' }}>CONSTRUCCION</option>
                                            <option value="ENTREGADO" {{ old('build_status') == 'ENTREGADO' ? 'selected' : '' }}>ENTREGADO</option>
                                            <option value="LANZAMIENTO" {{ old('build_status') == 'LANZAMIENTO' ? 'selected' : '' }}>LANZAMIENTO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="google_map" class="form-label">* Google maps</label>
                            <input type="text" class="form-control" id="google_map" name="google_map" value="{{ old('google_map') }}">
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

    document.getElementById('form').addEventListener('submit', function(e) {
        document.getElementById('description').value = quillDesc.root.innerHTML;
        document.getElementById('apartments_detail').value = quillDetails.root.innerHTML;
        e.target.disabled = true;
    });
</script>
@endsection
