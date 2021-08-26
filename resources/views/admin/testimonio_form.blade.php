@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar testimonio') }}</div>

                <div class="card-body">
                    @include('partials.errors_form_messages')
                    @include('partials.single_messages')

                    <form action="{{ route('testimonioUpdate', $testimony->id)}}" enctype="multipart/form-data" method="POST" id="formBlog">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <img src="{{ asset('images/testimonios/' . $testimony->avatar)}}" alt="Avatar" class="img-fluid mx-auto d-flex" style="height: 220px">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $testimony->name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="aparment_name" class="form-label">Propietario de</label>
                            <input type="text" class="form-control" id="aparment_name" name="aparment_name" value="{{ old('aparment_name', $testimony->aparment_name) }}">
                        </div>
                        <div class="mb-3">
                            <label for="testimony" class="form-label">Testimonio</label>
                            <textarea name="testimony" id="testimony" class="form-control" rows="5">{{ old('testimony', $testimony->testimony) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Genero</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="M" {{ old('gender', $testimony->gender) == 'M' ? 'selected' : ''}}>Masculino</option>
                                        <option value="F" {{ old('gender', $testimony->gender) == 'F' ? 'selected' : ''}}>Femenino</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Estrellas</label>
                                    <input type="number" class="form-control" min="1" max="5" name="stars" value="{{ old('stars', $testimony->stars) }}">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="avatar" class="form-label">Avatar</label>
                            <input class="form-control" type="file" id="avatar" name="avatar">
                        </div>
                        <hr>
                        <button type="submit" id="prueba" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
