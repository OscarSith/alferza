@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    {{ __('Lista de Asesores') }}
                    <x-button-new :text="'Agregar Asesor'" url="{{ route('consulantCreate') }}" class="float-end" />
                </div>

                <div class="card-body">
                    @include('partials.single_messages')

                    <div class="col">
                        @foreach ($consultants as $consultant)
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-3">
                                    <img src="{{ asset('images/asesores/' . $consultant->picture) }}" class="img-fluid rounded-start" alt="Avatar">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body d-flex flex-column h-100">
                                        <h5 class="card-title">{{ $consultant->name }} {{ $consultant->lastname }}</h5>
                                        <p class="card-text">{{ $consultant->bio }}</p>
                                        <p class="card-text">
                                            <small class="text-muted">{{ $consultant->email }} | {{ $consultant->cellphone }}</small>
                                        </p>
                                        <div class="d-flex justify-content-end mt-auto">
                                            <a href="{{ route('consultantEdit', $consultant) }}" class="btn btn-success">Editar</a>
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
