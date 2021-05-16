@extends('layouts.masterpage')

@section('body')
<link rel="stylesheet" href="{{ asset('css/iSlider.min.css') }}">
<div class="detail-project pb-3">
    <img src="{{ asset('images/proyectos/banner_proyecto_1.jpg') }}" alt="Imagen Proyectos Alferza" class="d-block w-100">
    <div class="container">
        <div class="col-12 col-xl-10 col-xxl-9 mx-auto">
            <div class="row">
                <div class="text-center mt-5 mb-5">
                    <img src="{{ asset('images/proyectos/' . $project->logo_picture) }}" alt="Logo {{ $project->name }}" class="img-fluid" style="height: 110px">
                </div>
                <div class="detail-project__description">
                    <h5 class="text-center pt-1 pb-1">DEPARTAMENTOS EN VENTA Y EN ETAPA DE CONSTRUCCIÓN</h5>
                    <p class="mt-4">Posee una ubicación privilegiada, se encuentra entre el centro histórico de la ciudad y  el límite del distrito de Yanahuara, a tan sólo 5 cuadras de la Plaza de Armas y a un paso de las principales vías de circulación como la Av. Ejército y la Av. Emmel.</p>

                    <p class="mt-4">Su diseño muestra que la tradición y modernidad trabajan de la mano, acentuando el concepto de cambio. Residencial Emmel mantiene parte de la arquitectura arequipeña colonial conservando bellos elementos tallados en sillar en su fachada original y lobby de recepción.</p>

                    <div class="mt-5 position-relative table-description">
                        <div class="row">
                            <div class="col-12 col-md-4 bor ms-lg-4">
                                <div class="position-absolute bg-left"></div>
                                <div class="pt-3 pb-3 pe-2 pe-md-0 d-flex justify-content-end">
                                    <img src="{{ asset('images/proyectos/icono_departamentos.jpg') }}" alt="Icono Proyectos" class="me-3" style="height: 34px">
                                    <div class="small">
                                        {!! $project->aparments_detail !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 col-lg-7">
                                <div class="row">
                                    <div class="col-6 col-md-4 bot-xs">
                                        <div class="pt-3 pb-3 ps-2 ps-md-0 d-flex">
                                            <i class="fas fa-ruler-combined fa-fw fa-2x me-2"></i>
                                            <span class="align-self-center">{{ number_format($project->meters, 2) }} m<sup>2</sup></span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 borl bot-xs">
                                        <div class="pt-3 pb-3 d-flex">
                                            <i class="far fa-calendar-check fa-fw fa-2x me-2"></i>
                                            <span class="align-self-center" style="white-space: nowrap">{{ $project->build_time_months }} MESES</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-5 bot-xs">
                                        <div class="pt-3 pb-3 ps-2 ps-md-0 d-flex">
                                            <i class="fas fa-tag fa-fw fa-2x me-2"></i>
                                            <span class="align-self-center" style="white-space: nowrap">US$ {{ number_format($project->build_price, 2) }} </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col bot">
                                        <div class="pt-3 pb-3 ps-1 ps-md-0 d-flex">
                                            <i class="fas fa-map-marker-alt fa-fw fa-2x me-2"></i>
                                            <span class="align-self-center">Calle Beaterio No 271, Cercado - Arequipa</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute bg-right"></div>
                    </div>
                </div>
                <div class="detail-project__gallery pb-5">
                    <div class="position-relative">
                        <div class="position-absolute d-flex align-items-center slider-arrow arrow-left">
                            <img src="images/proyectos/arrow_left.png" alt="">
                        </div>
                        <div class="images" id="iSlider-wrapper">
                        </div>
                        <div class="position-absolute d-flex align-items-center slider-arrow arrow-right">
                            <img src="images/proyectos/arrow_right.png" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center benefits flex-wrap">
                        <div class="benefits-block mb-4 mb-md-0">
                            <i class="fas fa-shield-alt fa-2x fa-fw"></i>
                            <span class="d-block mt-auto">Seguridad</span>
                        </div>
                        <div class="benefits-block mb-4 mb-md-0">
                            <img src="images/proyectos/icon_elevator.png" alt="">
                            <span class="d-block mt-auto">Ascensores</span>
                        </div>
                        <div class="benefits-block mb-4 mb-md-0">
                            <img src="images/proyectos/icon_kids_games.png" alt="">
                            <span class="d-block mt-auto">Juegos infantiles</span>
                        </div>
                        <div class="benefits-block mb-4 mb-md-0">
                            <i class="fas fa-parking fa-2x fa-fw"></i>
                            <span class="d-block mt-auto">Estacionamientos</span>
                        </div>
                        <div class="benefits-block mb-4 mb-md-0">
                            <i class="fas fa-swimming-pool fa-2x fa-fw"></i>
                            <span class="d-block mt-auto">Piscinas</span>
                        </div>
                        <div class="benefits-block mb-4 mb-md-0">
                            <i class="fas fa-cocktail fa-2x fa-fw"></i>
                            <span class="d-block mt-auto">Sum</span>
                        </div>
                        <div class="benefits-block mb-4 mb-md-0">
                            <img src="images/proyectos/icon_parrilla.png" alt="">
                            <span class="d-block mt-auto">Zona de parrilla</span>
                        </div>
                    </div>
                </div>
                <div class="detail-project__apartment-plans pt-3 pb-4">
                    <div id="carouselExampleIndicators" class="carousel slide pb-4" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/proyectos/planos/planos_emme2_01.jpg') }}" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h6>TIPOLOGÍA</h6>
                                    <h4>1</h4>
                                    <div>
                                        <span>área total</span>
                                    </div>
                                    <span class="meters">90,37 m<sup>2</sup></span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/proyectos/planos/planos_emme2_02.jpg') }}" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h6>TIPOLOGÍA</h6>
                                    <h4>2</h4>
                                    <div>
                                        <span>área total</span>
                                    </div>
                                    <span class="meters">90,37 m<sup>2</sup></span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/proyectos/planos/planos_emme2_03.jpg') }}" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h6>TIPOLOGÍA</h6>
                                    <h4>3</h4>
                                    <div>
                                        <span>área total</span>
                                    </div>
                                    <span class="meters">90,37 m<sup>2</sup></span>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/proyectos/planos/planos_emme2_04.jpg') }}" class="d-block w-100" alt="">
                                <div class="carousel-caption d-none d-md-block">
                                    <h6>TIPOLOGÍA</h6>
                                    <h4>4</h4>
                                    <div>
                                        <span>área total</span>
                                    </div>
                                    <span class="meters">90,37 m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-indicators mt-4">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="rounded-circle active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="rounded-circle" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="rounded-circle" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="rounded-circle" aria-label="Slide 4"></button>
                        </div>
                    </div>
                </div>
                {{-- EN CONSTRUCCION --}}
                <div class="detail-project__sponsor pt-5 pb-5">
                    <div class="row">
                        <div class="col-12 col-md-4 d-flex flex-row flex-md-column flex-lg-row justify-content-around financing">
                            <div class="me-lg-1 text-center">
                                <h6 class="text-center">FINANCIA</h6>
                                <img src="{{ asset('images/proyectos/interbank_sponsor.jpg') }}" alt="" srcset="">
                            </div>
                            <div class="mt-0 mt-md-4 mt-lg-0 text-center">
                                <h6 class="text-center">OPORTUNIDAD</h6>
                                <img src="{{ asset('images/proyectos/airbnb.jpg') }}" alt="" srcset="">
                            </div>
                        </div>
                        <div class="col-12 col-md-4 d-flex align-items-center justify-content-center mt-5 mb-5 mt-md-0 mb-md-0">
                            <img src="{{ asset('images/proyectos/vive_centrico.png') }}" alt="Vive centrico" class="img-fluid">
                        </div>
                        <div class="col-12 col-md-4 d-flex flex-column justify-content-around justify-content-lg-between pt-4 ps-4">
                            <button type="button" class="btn btn-sm alferza-btn type-2">Ver avanze de obra</button>
                            <button type="button" class="btn btn-sm alferza-btn type-2 mt-4 mb-4 mt-md-0 mb-md-0">Descargar brochure</button>
                            <button type="button" class="btn btn-sm alferza-btn type-2">Pedir cotización</button>
                        </div>
                    </div>
                </div>
                {{--  --}}

                {{-- EN PREVENTA --}}
                <div class="detail-project__sponsor pt-5 pb-5 d-none">
                    <div class="row">
                        <div class="col-4 d-flex flex-column justify-content-center">
                            <button type="button" class="btn btn-sm alferza-btn type-1">Descargar brochure</button>
                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center">
                            <img src="images/proyectos/ubicacion_que_mereces.png" alt="Vive centrico" class="img-fluid" style="height: 56px">
                        </div>
                        <div class="col-4 d-flex flex-column justify-content-center">
                            <button type="button" class="btn btn-sm alferza-btn type-1">Pedir cotización</button>
                        </div>
                    </div>
                </div>
                {{--  --}}

                {{-- ENTREGADO --}}
                <div class="detail-project__sponsor pt-5 pb-5 d-none">
                    <div class="row">
                        <div class="col-4 d-flex flex-column justify-content-center">
                            <button type="button" class="btn btn-sm alferza-btn type-1">Hablar con un consultor</button>
                        </div>
                        <div class="col-4 d-flex align-items-center justify-content-center">
                            <img src="images/proyectos/logo_alferza_02.png" alt="Vive centrico" class="img-fluid">
                        </div>
                        <div class="col-4 d-flex flex-column justify-content-center">
                            <button type="button" class="btn btn-sm alferza-btn type-1">Ver nuevos proyectos</button>
                        </div>
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </div>
    <div class="maps">
        <img src="{{ asset('images/proyectos/maps.jpg') }}" alt="Google maps" class="d-block w-100">
    </div>
</div>
<script src="{{ asset('js/iSlider.min.js') }}"></script>
<script src="{{ asset('js/iSlider.animate.min.js') }}"></script>
<script>
    var data = [
        {content: "{{ asset('images/img_1.jpeg') }}"},
        {content: "{{ asset('images/img_2.jpg') }}"},
        {content: "{{ asset('images/img_3.jpg') }}"},
        // {content: 'images/img_4.jpg'},
    ];
    var S = new iSlider(document.getElementById('iSlider-wrapper'), data, {
        isLooping: 1,
        isOverspread: 1,
        isAutoplay: 1,
        // fillSeam: 1,
        animateTime: 1000,
        animateType: 'flow'
    });

    document.querySelector('.slider-arrow.arrow-left').addEventListener('click', function() {
        S.slidePrev();
    });
    document.querySelector('.slider-arrow.arrow-right').addEventListener('click', function() {
        S.slideNext();
    });
    // S.slidePrev();
    // S.slideNext();
</script>
@endsection
