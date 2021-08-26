@extends('layouts.masterpage')

@section('title', 'Trabaja con nosotros')

@section('body')
<div class="work-us">
    <img src="images/banner_trabaja_con_nosotros.jpg" alt="Imagen Trabaja con nosotros" class="d-block w-100">
    @include('partials.whatsapp')
    <div>
        <div class="container">
            <div class="col-lg-7 mx-auto">
                <h2 class="text-center main-title">¡TÚ PONES EL TALENTO, <br> <span>NOSOTROS LA OPORTUNIDAD</span>!</h2>
                <p>Te invitamos a que te registres para formar parte de nuestro equipo, con nosotros tendrás la oportunidad de realizarte como profesional y lo que es aún más importante como persona.
                    <br>
                    ¡Gracias por tu interés!
                </p>
            </div>
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <img src="{{ asset('images/trabaja_2_Ximena.jpg') }}" alt="Imagen mujer 1" class="img-fluid">
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="{{ asset('images/imagen_varios.jpeg') }}" alt="Imagen 2 hombres con traje de obrero completo" class="img-fluid">
                    </div>
                    {{-- <div class="col-md-4 mb-3">
                        <img src="{{ asset('images/imagen_mujer_04.jpeg') }}" alt="Imagenes Mujer 4" class="img-fluid">
                    </div> --}}
                    <div class="col-md-6 mb-3">
                        <img src="{{ asset('images/trabaja_1.jpg') }}" alt="Imagenes varios 2" class="img-fluid">
                    </div>
                    <div class="col-md-6 mb-3">
                        <img src="{{ asset('images/trabaja_3_Oswaldo 3.jpg') }}" alt="Imagen varios 3" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
        {{-- <section class="mt-2 work-us__why">
            <h2 class="text-center sub-title mb-0">¿POR QUE TRABAJAR CON NOSOTROS?</h2>
            <div class="work-us__container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 d-none d-lg-block"></div>
                        <div class="col-12 col-lg-8">
                            <ul class="list-unstyled work-us__list pt-2">
                                <li>
                                    <span class="number me-3">1</span>
                                    Vendemos rápido, en promedio 8 departamentos por mes.<br>
                                    (Procesos de cierre basados en mejora continua).
                                </li>
                                <li style="margin-left: 2rem">
                                    <span class="number me-3">2</span>
                                    Evolucionamos el marketing digital con tasas de conversión por encima del mercado.
                                </li>
                                <li style="margin-left: 4rem">
                                    <span class="number me-3">3</span>
                                    Desarrollamos nuestros propios estudios de mercado.
                                </li>
                                <li style="margin-left: 6rem">
                                    <span class="number me-3">4</span>
                                    9 proyectos en 9 años.
                                </li>
                                <li style="margin-left: 8rem">
                                    <span class="number me-3">5</span>
                                    Procesos mapeados al 100%
                                </li>
                                <li style="margin-left: 10rem">
                                    <span class="number me-3">6</span>
                                    <span>
                                        Contamos con profesionales altamente capacitados y con una experiencia de 434,895 m<sup>2</sup> construidos
                                    </span>
                                </li>
                                <li style="margin-left: 12rem">
                                    <span class="number me-3">7</span>
                                    Aplicamos auditorías contables, tributarias, financieras, administrativas y de procesos.
                                </li>
                                <li style="margin-left: 14rem">
                                    <span class="number me-3">8</span>
                                    Reinvertimos el 95% de nuestras utilidades
                                </li>
                                <li style="margin-left: 16rem">
                                    <span class="number me-3">9</span>
                                    Mas de 372 mejoras de nuestro SAC (Sistema de Administración de Conocimiento) implementadas
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="mt-2 pb-5 work-us__info">
            <h2 class="text-center sub-title">DEJANOS TUS DATOS</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-lg-11 col-xl-8 mx-auto mt-3">
                        @include('partials.errors_form_messages')
                        <form id="form-work-with-us" class="alferza-form" method="POST" action="{{ route('sendCV') }}" enctype="multipart/form-data" novalidate>
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mb-3">
                                        <label class="fw-bold label" for="nombre">Nombre:</label>
                                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" minlength="2" required>
                                        <div class="invalid-feedback">
                                            El nombre es requerido
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <label class="fw-bold label" for="telefono">Teléfono:</label>
                                                <input type="tel" class="form-control form-control-sm" id="telefono" name="telefono" minlength="7" maxlength="15" required>
                                                <div class="invalid-feedback">
                                                    El teléfono es requerido
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="area-interes" class="fw-bold label">Área de Interés</label>
                                                <input type="text" class="form-control form-control-sm" id="area-interes" name="area-interes" minlength="2" required>
                                                <div class="invalid-feedback">
                                                    Indicanos su área de interes
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="fw-bold label" for="correo">Correo electrónico:</label>
                                        <input type="email" class="form-control form-control-sm" id="correo" name="correo" minlength="4" required>
                                        <div class="invalid-feedback">
                                            Debe ser un correo válido
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="rubro" class="fw-bold label">¿Porqué te apasiona el rubro?</label>
                                        <input type="text" class="form-control form-control-sm" id="rubro" name="rubro" minlength="2" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="cv" class="fw-bold label">Adjuntar CV</label>
                                        <input type="file" class="form-control form-control-sm" id="cv" name="cv" required>
                                        <div class="invalid-feedback">
                                            Su CV es requerido
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="autorizar" required>
                                            <label class="form-check-label" for="autorizar">
                                              Autorizo a Alferza Desarrolladora inmobiliaria para que realice las actividades de prospección comercial y marketing descritas en la Política de Privacidad <strong>(*)</strong>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary alferza-btn">ENVIAR <i class="fas fa-envelope"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-5 ps-md-5 text-center text-sm-start d-flex align-items-center">
                                    <img src="images/logo-alferza.png" alt="Logo Alferza" class="img-fluid d-none d-sm-block" style="height: 65px">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('#form-work-with-us')

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
