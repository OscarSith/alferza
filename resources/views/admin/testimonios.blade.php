@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    {{ __('Listado de testimonios') }}
                    <x-button-new text="Crear Testimonio" url="{{ route('testimonioView') }}" class="float-end" />
                </div>

                <div class="card-body">
                    @include('partials.single_messages')

                    <div class="col">
                        @foreach ($testimonies as $testimony)
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="{{ asset('images/testimonios/' . $testimony->avatar) }}" class="img-fluid rounded-start" alt="Avatar">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body d-flex flex-column h-100">
                                        <h5 class="card-title">{{ $testimony->name }}</h5>
                                        <p class="card-text">{{ $testimony->testimony }}</p>
                                        <p class="card-text">
                                            <small class="text-muted">Propietario: {{ $testimony->aparment_name }}</small>
                                        </p>
                                        <div class="d-flex justify-content-end mt-auto">
                                            <a href="{{ route('testimonioEdit', $testimony) }}" class="btn btn-success">Editar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
