@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear Asesor') }}</div>

                <div class="card-body">
                    @include('partials.errors_form_messages')
                    @include('partials.single_messages')

                    <form action="{{ route('consultantStore') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="bio" class="form-label">Biografía</label>
                            <textarea name="bio" id="bio" class="form-control" rows="5">{{ old('bio') }}</textarea>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Correo</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                                </div>
                                <div class="col-md-6">
                                    <label for="cellphone" class="form-label">Celular</label>
                                    <input type="tel" class="form-control" name="cellphone" value="{{ old('cellphone') }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="picture" class="form-label">Avatar</label>
                            <input class="form-control" type="file" id="picture" name="picture">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
