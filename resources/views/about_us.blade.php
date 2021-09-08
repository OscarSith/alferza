@extends('layouts.masterpage')

@section('title', 'Nosotros')

@section('body')
<div class="about-us">
    <img src="images/{{ $page->banner }}" class="d-block w-100" alt="Banner principal nosotros">
    @include('partials.whatsapp')
    <div class="container about-content">
        <h1 class="text-center">
            <img src="images/logo-alferza.png" alt="Logo Alferza" class="img-fluid" style="height: 80px">
        </h1>
        <div class="col-xl-10 mx-auto about-content__first-lead">
            <section class="row">
                <div class="col-12 col-md-7">
                    <p class="pe-0 pe-md-3 pe-xl-5 first-p">{{ $page->main_text }}</p>
                </div>
                <div class="col-12 col-md-5">
                    <p class="second-p">{{ $page->alter_text }}</p>
                </div>
                <div class="col-12">
                    <p class="first-p mt-3">{{ $page->other_text }}</p>
                </div>
                <div class="col-12 col-md-10 col-xl-8 mx-auto text-center mt-5 mb-5">
                    <p class="mb-1 exp">{{ $page->small_text }}</p>
                    <p class="mb-1 new-generation">SOMOS UNA INMOBILIARIA DE NUEVA GENERACIÓN,</p>
                    <p class="proy">especializada en proyectos multifamiliares</p>
                </div>
                <div class="col-12 col-md-6">
                    <h6>MISIÓN: Desarrollar acogedores espacios de vida.</h6>
                    <p class="pe-3 pe-xl-5 first-p">{{ $page->mision }}</p>
                </div>
                <div class="col-12 col-md-6">
                    <h6 class="text-md-end">VISIÓN: Mejorar el urbanismo de nuestra sociedad.</h6>
                    <p class="second-p">{{ $page->vision }}</p>
                </div>
            </section>
            <hr class="mb-5 mt-5">
            <div class="accordion accordion-flush" id="accordionPoliticaIntegrada">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="btn-secondary alferza-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <span class="mostrar">Mostrar</span> <span class="ocultar">Ocultar</span> política integrada
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionPoliticaIntegrada">
                    <div class="accordion-body">
                        <section class="row justify-content-around mt-3 politica-integrada">
                            <div class="col-12">
                                <h2 class="text-center fw-bold mb-5">Política Integrada</h2>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6>ALFERZA</h6>
                                <p class="pe-3 pe-xl-5 first-p">
                                    Empresa que desarrolla proyectos inmobiliarios brindando trabajos de diseño de proyectos, construcción de edificaciones en general, gestión inmobiliaria y venta de proyectos, asume la responsabilidad en desarrollar sus actividades de acuerdo a su sistema integrado de gestión, compuesto por los sistemas de gestión de la calidad, medio ambiente, seguridad y salud en el trabajo basados en normas ISO, con el fin de lograr la plena satisfacción de nuestras partes interesadas.
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <h6 class="text-md-end">NOS COMPROMETEMOS A:</h6>
                                <ul class="list-unstyled second-p fs-6">
                                    <li class="mb-2 small">– Satisfacer las necesidades y expectativas de nuestros clientes cumpliendo sus requisitos y otros no especificados, pero necesarios para su ejecución.</li>
                                    <li class="mb-2 small">– Cumplir con la normativa legal vigente relacionada con los esquemas de calidad, medio ambiente, seguridad y salud en el trabajo, y aquellas que la empresa vea por conveniente.</li>
                                    <li class="mb-2 small">– Mantener y promover la mejora continua de nuestro sistema integrado de gestión. Proporcionar las condiciones de trabajo seguras y saludables para la prevención de lesiones y deterioro de la salud, así como, eliminar los peligros, reducir los riesgos y aprovechar las oportunidades.</li>
                                    <li class="mb-2 small">– Promover la consulta y participación de los trabajadores con respecto al sistema integrado de gestión, así como, la de sus representantes.</li>
                                    <li class="mb-2 small">– Proteger el medio ambiente y prevenir la contaminación ambiental.</li>
                                </ul>
                            </div>
                        </section>
                    </div>
                  </div>
                </div>
            </div>
            <hr class="mb-5 mt-5">
            <section class="row justify-content-around mt-5 staff">
                <div class="col-lg-5">
                    <div class="d-flex mb-3">
                        <img src="{{ asset('images/'  . $page->profile_picture_1) }}" alt="Imagen {{ $page->profile_name_1 . ' ' . $page->profile_lastname_1 }}" style="width: 110px">
                        <h4 class="mt-auto mb-0 ms-3">
                            <span class="fs-3 d-block mb-2">{{ $page->profile_name_1 }}</span>
                            <strong class="fw-bold">{{ $page->profile_lastname_1 }}</strong>
                        </h4>
                    </div>
                    {!! $page->profile_text_1 !!}
                    <span class="badge px-3">
                        <strong class="fs-4 dw-bold">M</strong><sup>2</sup>
                        <small>DESARROLLADOS</small>
                        &nbsp;
                        <span class="fs-4 fw-light">{{ $page->profile_extra_1 }}</span>
                    </span>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex mb-3 justify-content-end mt-2">
                        <h4 class="mt-auto mb-0 me-3 text-end">
                            <span class="fs-3 d-block mb-2">{{ $page->profile_name_2 }}</span>
                            <strong class="fw-bold">{{ $page->profile_lastname_2 }}</strong>
                        </h4>
                        <img src="{{ asset('images/' . $page->profile_picture_2 ) }}" alt="Imagen {{ $page->profile_name_2 . ' ' . $page->profile_lastname_2 }}" style="width: 110px">
                    </div>
                    {!! $page->profile_text_2 !!}

                    <span class="badge px-3 mb-3">
                        <strong class="fs-4 fw-bold">M</strong><sup>2</sup>
                        <small>PROYECTADOS</small>
                        &nbsp;
                        <span class="fs-4 fw-light">{{ $page->profile_extra_2 }}</span>
                    </span>
                    <span class="badge px-3">
                        <span class="d-inline-block">
                            <strong class="fs-4 fw-bold">M</strong><sup>2</sup>
                            <small class="d-inline-block me-2">EJECUTADOS <br>SUPERVISADOS <br>EN JEFATURAS</small>
                        </span>
                        <span class="fs-4 fw-light">{{ $page->profile_extra_3 }}</span>
                    </span>
                </div>
            </section>
            <hr class="mb-5 mt-5">
            <section class="row justify-content-around mt-5 politica-integrada">
                <div class="col-12">
                    <div class="col-12 mb-5 mt-4">
                        <h2 class="text-center fw-bold">STAFF</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-7 mb-3">
                            <img src="{{ asset('images/nosotros_1.jpg') }}" alt="Imagen varios" class="img-fluid">
                        </div>
                        <div class="col-md-5 mb-3">
                            <img src="{{ asset('images/imagen_mujer_3.jpeg') }}" alt="Imagen mujer 2" class="img-fluid">
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('images/imagen_mujer_02.jpeg') }}" alt="Imagen varios 2" class="img-fluid">
                        </div>
                        <div class="col-md-6 mb-3">
                            <img src="{{ asset('images/nosotros_2.jpg') }}" alt="Imagen mujer 3" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5 text-center">
                    <a href="{{ env('URL_BROCHURE') }}" target="_blank" class="btn btn-secondary alferza-btn">
                        BROCHURE
                    </a>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
