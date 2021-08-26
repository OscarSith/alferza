@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    {{ __('Listado de Proyectos') }}
                    <x-button-new text="Nuevo Proyecto" url="{{ route('projectCreate') }}" class="float-end" />
                </div>

                <div class="card-body">
                    @include('partials.single_messages')

                    <div class="col">
                        @foreach ($proyects as $project)
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-3 d-flex align-items-center">
                                    <img src="{{ asset('images/proyectos/' . $project->logo_picture) }}" class="img-fluid p-3" alt="Logo {{ $project->name }}">
                                </div>
                                <div class="col-md-9">
                                    <div class="card-body d-flex flex-column h-100">
                                        <div class="card-title mb-0">
                                            <h5 class="float-start">{{ $project->name }}</h5>
                                            <div class="btn-group float-end">
                                                <button type="button" class="btn p-0 ps-2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-cog"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item small" href="{{ route('picturesIndex', $project->id) }}">Ver galería de imagenes</a></li>
                                                    <li><a class="dropdown-item small" href="{{ route('flatsIndex', $project->id) }}">Ver planos</a></li>
                                                    <li><a class="dropdown-item small" href="{{ route('benefitsIndex', $project->id) }}">Ver beneficios</a></li>
                                                    <li>
                                                    @if ($project->status)
                                                        @php
                                                            $text = 'Inactivar';
                                                            $status = '0';
                                                        @endphp
                                                    @else
                                                        @php
                                                            $text = 'Activar';
                                                            $status = '1';
                                                        @endphp
                                                    @endif
                                                        <a class="dropdown-item small" href="#" onclick="event.preventDefault();
                                                            document.getElementById('form-status-{{ $project->id }}').submit();">{{ $text }}</a>
                                                        <form id="form-status-{{ $project->id }}" action="{{ route('changeStatus') }}" method="POST" class="d-none">
                                                            @csrf
                                                            @method('put')
                                                            <input type="hidden" name="id" value="{{ $project->id }}">
                                                            <input type="hidden" name="status" value="{{ $status }}">
                                                        </form>
                                                    </li>
                                                    @if ($project->vendidas == 0)
                                                        <hr class="dropdown-divider">
                                                        <li>
                                                            <a class="dropdown-item small" href="#" onclick="event.preventDefault();
                                                                document.getElementById('change-vendidos-{{ $project->id }}').submit();">Cambiar estado 'AGOTADOS'</a>
                                                            <form id="change-vendidos-{{ $project->id }}" action="{{ route('setToVendidos', $project->id) }}" method="POST" class="d-none">
                                                                @csrf
                                                                @method('put')
                                                            </form>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="card-text mb-0">
                                            <span class="badge bg-info text-dark rounded-pill small">{{ $project->build_status }}</span>
                                            @if ($project->vendidas == 1)
                                                &nbsp; <span class="badge bg-danger rounded-pill small">VENDIDAS</span>
                                            @endif
                                            <br>
                                            {{ $project->address }}
                                            <br>
                                            {{ $project->location }}
                                            <br>
                                            {{ $project->quantity }} <small>{{ $project->build_type }}</small>
                                            <br>
                                            <small class="text-muted">Creado {{ $project->created_at->diffForHumans() }}</small>
                                        </p>
                                        <div class="d-flex justify-content-end mt-auto align-items-center">
                                            @if ($project->status)
                                                <span class="badge bg-success rounded-pill small me-3">Activo</span>
                                            @else
                                            <span class="badge bg-danger rounded-pill small me-3">Inactivo</span>
                                            @endif
                                            <a href="{{ route('projectEdit', $project) }}" class="btn btn-warning btn-sm">Editar <i class="fas fa-pencil-alt"></i></a>
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
