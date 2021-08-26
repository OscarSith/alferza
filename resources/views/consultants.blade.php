@extends('layouts.masterpage')

@section('body')
<div class="consultant">
    <img src="images/banner_asesores.jpg" alt="Imagen Nuestros asesores" class="d-block w-100">
    @include('partials.whatsapp')
    <div class="container">
        <h1 class="text-center main-title">NUESTROS ASESORES</h1>
        <div class="row">
            <div class="col-12 col-md-10 col-xl-8 mx-auto">
                <p class="consultant__lead">Nuestro Equipo de asesores, comparten una pasión por la atención y las ventas. Por ende su compromiso es hacia los clientes y su satisfacción. Generar confianza es uno de nuestros principales pilares por este motivo te presentamos a cada miembro del equipo de Alferza, quienes  te ayudaran a tomar la mejor decisión inmobiliaria.</p>

                <div class="row mt-5 pb-5 consultant__list justify-content-center">
                    @foreach ($consultants as $consultant)
                    <div class="col-12 col-sm-4 mb-4">
                        <div class="consultant__list-block">
                            <div class="consultant__list-img" style="background-image: url('images/asesores/{{ $consultant->picture }}')"></div>
                            <div class="p-3 p-sm-3 pt-4 text-center consultant__list-profile">
                                <h4 class="mb-3">
                                    <span class="d-block">{{ $consultant->name }}</span>
                                    <small class="fs-6">{{ $consultant->lastname }}</small>
                                </h4>
                                <div class="small mb-1">
                                    @if ($consultant->cellphone != null)
                                        <i class="fas fa-phone-alt custom-icon custom-icon-sm me-1"></i> {{ $consultant->cellphone }}
                                    @endif
                                </div>
                                <p>{{ $consultant->bio }}</p>
                                @if ($consultant->email != null)
                                    <div class="small">
                                        <i class="far fa-envelope custom-icon custom-icon-sm me-1"></i>{{ $consultant->email }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
