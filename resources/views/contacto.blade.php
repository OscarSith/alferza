@extends('layouts.masterpage')

@section('title', 'Contacto')

@section('body')
<div class="contacto">
    <img src="images/contacto-silder.jpg" alt="Imagen Trabaja con nosotros" class="d-block w-100">
    @include('partials.whatsapp')
    <div class="container pt-5">
        <div class="col-xxl-10 mx-auto">
            <h1 class="text-center main-title mb-5">NUESTROS ASESORES SE <br class="d-none d-md-inline-block">COMUNICARÁN CONTIGO DE INMEDIATO</h1>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="p-2 p-lg-5 contacto-info">
                        <div class="contacto-info__imagen pb-4 text-center">
                            <img src="{{ asset('images/logo_first_load.png')}}" alt="Logo Alferza" class="img-fluid">
                        </div>
                        <div class="contacto-info__contact">
                            <ul class="list-unstyled fa-ul">
                                <li class="mb-2">
                                    <span class="fa-li">
                                        <i class="fas fa-lg fa-fw fa-home"></i>
                                    </span>
                                    Av. Trinidad Morán 100 (segundo piso), Cayma. Arequipa, 04000.
                                </li>
                                <li class="mb-2">
                                    <div class="fa-li">
                                        <i class="fas fa-lg fa-fw fa-mobile-alt"></i>
                                    </div>
                                    +51 934 819 969
                                </li>
                                <li class="mb-2">
                                    <span class="fa-li">
                                        <i class="fas fa-lg fa-fw fa-phone-alt"></i>
                                    </span>
                                    (054) 25 3792
                                </li>
                                <li>
                                    <span class="fa-li">
                                        <i class="fas fa-lg fa-fw fa-envelope"></i>
                                    </span>
                                    <a href="mailto:marketing@alferza.pe" target="_blank">informes@alferza.pe</a>
                                </li>
                            </ul>
                        </div>
                        <div class="contacto-info__redes pt-4">
                            <div class="text-center">
                                <a href="https://www.facebook.com/alferzainmobiliaria/" class="rounded facebook" target="_blank">
                                    <i class="fab fa-2x fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/alferzainmobiliria/" class="rounded instagram mx-2" target="_blank">
                                    <i class="fab fa-2x fa-instagram"></i>
                                </a>
                                <a href="https://web.whatsapp.com/send?phone=51962209447" class="rounded whatsapp" target="_blank">
                                    <i class="fab fa-2x fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    @include('partials.errors_form_messages')
                    <form action="{{ route('sendContact') }}" class="alferza-form" method="POST" id="form-contacto" novalidate>
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label class="label" for="nombre_completo">Nombre Completo</label>
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
                            <label class="label" for="correo">Correo Electrónico</label>
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
                                <label class="label" for="celular">Celular</label>
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
                            <label class="label" for="mensaje">Mensaje</label>
                            <textarea id="mensaje" name="mensaje" class="form-control" rows="6" required></textarea>
                            <div class="invalid-feedback">
                                Este campo es requerido
                            </div>
                        </div>
                        <div class="mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required="">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Autorizo a Alferza Desarrolladora Inmobiliaria para que realice las actividades de prospección comercial y marketing descritas en la Política de Privacidad
                                </label>
                                <div class="invalid-feedback">
                                    <i class="fas fa-ban fa-fw"></i> Tiene que autorizar nuestras policitas de privacidad
                                </div>
                            </div>
                        </div>
                        <div class="pb-5 text-center">
                            <button class="btn btn-secondary alferza-btn" type="submit">ENVIAR <i class="fas fa-envelope"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="maps ratio">
        <iframe loading="lazy" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Av.%20Trnidad%20Moran%20Nro%20100&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near" aria-label="Av. Trnidad Moran Nro 100" data-rocket-lazyload="fitvidscompatible" data-lazy-src="https://maps.google.com/maps?q=Av.%20Trnidad%20Moran%20Nro%20100&amp;t=m&amp;z=15&amp;output=embed&amp;iwloc=near" class="lazyloaded" data-was-processed="true"></iframe>
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
