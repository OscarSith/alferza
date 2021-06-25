@extends('layouts.masterpage')

@section('title', 'Contacto')

@section('body')
<div class="contacto container pt-5">
    <div class="col-lg-7 mx-auto">
        <h1 class="text-center main-title mb-5">Nuestros asesores se comunicarán contigo de inmediato</h1>
        @include('partials.errors_form_messages')
        <form action="{{ route('sendContact') }}" method="POST" id="form-contacto" class="col-lg-8 mx-auto" novalidate>
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="nombre_completo">Nombre Completo</label>
                <div class="input-group">
                    <span class="input-group-text" id="moneda">
                        <i class="far fa-address-card"></i>
                    </span>
                    <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" required>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="correo">Correo</label>
                <div class="input-group">
                    <span class="input-group-text" id="moneda">
                        <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" id="correo" name="correo" class="form-control" required>
                    <div class="invalid-feedback">
                        Este campo es requerido
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-7">
                    <label for="celular">Celular</label>
                    <div class="input-group">
                        <span class="input-group-text" id="moneda">
                            <i class="fas fa-phone"></i>
                        </span>
                        <input type="tel" id="celular" name="celular" class="form-control" maxlength="13" required>
                        <div class="invalid-feedback">
                            Este campo es requerido
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" class="form-control" rows="6" required></textarea>
                <div class="invalid-feedback">
                    Este campo es requerido
                </div>
            </div>
            <div class="pb-5">
                <button class="btn btn-secondary alferza-btn" type="submit">ENVIAR <i class="fas fa-envelope"></i></button>
            </div>
        </form>
    </div>
</div>
<script>
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('#form-contacto')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated');
            }, false)
        })
    })()
</script>
@endsection
