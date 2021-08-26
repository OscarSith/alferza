@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('consultantIndex') }}" class="small">Volver a listado</a>
                    <h4 class="text-center">{{ __('Actualizar Asesor') }}</h4>
                </div>

                <div class="card-body">
                    @include('partials.errors_form_messages')
                    @include('partials.single_messages')

                    <form action="{{ route('consultantUpdate', $consultant) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <img src="{{ asset('images/asesores/' . $consultant->picture)}}" alt="Avatar" class="img-fluid mx-auto d-flex" style="height: 220px">
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $consultant->name) }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname', $consultant->lastname) }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="bio" class="form-label">Biografía</label>
                            <textarea name="bio" id="bio" class="form-control" rows="5">{{ old('bio', $consultant->bio) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Correo</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $consultant->email) }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="cellphone" class="form-label">Celular</label>
                                    <input type="tel" class="form-control" name="cellphone" value="{{ old('cellphone', $consultant->cellphone) }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="picture" class="form-label">Avatar</label>
                            <input class="form-control" type="file" id="picture" name="picture">
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
