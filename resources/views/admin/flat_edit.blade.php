@extends('layouts.app')

@section('content')
<div class="container-xl">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 d-flex align-items-center">
                            {{ __('Plano ' . $flat->name) }}
                        </h4>
                    </div>
                </div>

                <div class="card-body">
                    @include('partials.validations_errors')
                    @include('partials.single_messages')

                    <form action="{{ route('flatUpdate', [$flat->project_id, $flat]) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <input type="hidden" name="project_id" id="project_id" value="{{ $flat->project_id }}">
                        <div class="mb-3">
                            <img src="{{ asset('images/proyectos/planos/' . $flat->picture) }}" alt="Imagen Plano" class="img-fluid mb-3">
                            <input type="file" class="form-control" id="picture" name="picture">
                            <div class="form-text small">Recomendado 580 x 480 pixeles</div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="label-form">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $flat->name) }}">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label for="size_meters" class="label-form">Metros</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="size_meters" name="size_meters" value="{{ old('size_meters', $flat->size_meters) }}">
                                        <div class="input-group-text">m<sup>2</sup></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="room" class="label-form">Cuartos</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="fas fa-bed"></i>
                                        </div>
                                        <input type="num" class="form-control" id="room" name="room" value="{{ old('room', $flat->room) }}">
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="bath" class="label-form">Baños</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <i class="fas fa-bath"></i>
                                        </div>
                                        <input type="num" class="form-control" id="bath" name="bath" value="{{ old('bath', $flat->bath) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label for="typology" class="label-form">Tipología</label>
                                    <input type="text" class="form-control" id="typology" name="typology" value="{{ old('typology', $flat->typology) }}">
                                </div>
                                <div class="col">
                                    <label for="price" class="label-form">Precio</label>
                                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $flat->price) }}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <a href="{{ route('flatsIndex', $flat->project_id) }}" class="btn btn-secondary btn-sm">Cancelar</a>
                        <button type="submit" class="btn btn-success btn-sm">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
