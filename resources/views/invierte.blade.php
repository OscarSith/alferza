@extends('layouts.masterpage')

@section('title', 'Invierte')

@section('body')
<div class="invierte">
    <img src="{{ asset('images/' . $page->banner) }}" alt="Banner Principal Invierte" class="d-block w-100">
    @include('partials.whatsapp')
    <div class="container" id="form-invierte">
        <h1 class="text-center main-title pt-1 mb-5">
            {{ $page->title }} <span>{{ $page->title_2 }}</span>
        </h2>
        <div class="col-xxl-10 mx-auto pb-5">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column">
                    <div class="position-relative">
                        <img src="{{ asset('images/' . $page->picture) }}" alt="Invierte" class="img-fluid">
                        <div class="position-absolute invierte-caption rounded">
                            <p class="mb-0 p-3 fs-xl-4 fs-5">{!! nl2br($page->small_text) !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-5 mt-xl-0 invierte-ganancias">
                    <h5 class="mb-4">¿QUIERES MULTIPLICAR TUS GANANCIAS?</h5>
                    <p>{!! nl2br($page->main_text) !!}</p>
                    @include('partials.errors_form_messages')
                    <form action="{{ route('sendInvierte') }}" method="POST" class="mt-4 alferza-form" id="form-invierte" novalidate>
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label class="label" for="nombre">Nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}" required>
                            <div class="invalid-feedback">
                                Este campo es requerido
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="label" for="correo">Correo electrónico</label>
                            <input type="email" id="correo" name="correo" class="form-control" value="{{ old('correo') }}" required>
                        </div>
                        <div class="mb-3">
                            <div class="col-5">
                                <label for="celular" class="label">Celular</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="moneda">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                    <input type="tel" id="celular" name="celular" class="form-control" maxlength="13" value="{{ old('celular') }}" required>
                                    <div class="invalid-feedback">
                                        Este campo es requerido
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="label" for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="mensaje" rows="5" class="form-control" required>{{ old('mensaje') }}</textarea>
                            <div class="invalid-feedback">
                                Este campo es requerido
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Autorizo a Alferza Desarrolladora Inmobiliaria para que realice las actividades de prospección comercial y marketing descritas en la Política de Privacidad
                                </label>
                                <div class="invalid-feedback">
                                    <i class="fas fa-ban fa-fw"></i> Tiene que autorizar nuestras policitas de privacidad
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 text-center">
                            <button class="btn btn-secondary alferza-btn" type="submit">ENVIAR <i class="fas fa-envelope"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('#form-invierte')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endsection
