@extends('layouts.masterpage')

@section('title', 'Alferza Desarrolladora Inmobiliaria')

@section('body')
<link rel="stylesheet" href="css/splide-core.min.css">
<div id="carousel-home" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators justify-content-start flex-column">
        <button type="button" data-bs-target="#carousel-home" data-bs-slide-to="0" class="active rounded-circle" aria-current="true" aria-label="Banner 3"></button>
        <button type="button" data-bs-target="#carousel-home" data-bs-slide-to="1" class="rounded-circle" aria-label="Banner 4"></button>
        <button type="button" data-bs-target="#carousel-home" data-bs-slide-to="2" class="rounded-circle" aria-label="Banner 5"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="images/home_banner-03.jpg" class="d-block w-100" alt="Banner alferza 3">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="images/home_banner-04.jpg" class="d-block w-100" alt="banner alferza 4">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="images/home_banner-05.jpg" class="d-block w-100" alt="banner alferza 5">
        </div>
    </div>
</div>
<div class="home">
    @include('partials.whatsapp')
    <div class="container-xxl home-trayectoria">
        <h2 class="text-center main-title">TRAYECTORIA INMOBILIARIA</h2>
        <div class="d-flex justify-content-end home-links d-none d-lg-flex" style="background-image: none">
            @foreach ($projects as $project)
            <div class="home-links__box">
                <a href="{{ route('detail-project', $project->url_slug) }}" id="project_{{ $project->id }}">
                    <div class="home-links__inner">
                        <img src="images/proyectos/{{ $project->mini_picture }}" class="img-fluid" alt="{{ $project->name }}">
                        <div class="text-center home-links__inner-title">
                            <h3 class="mb-0 {{ $project->url_slug }}" style="background-image: url('images/proyectos/{{ $project->mini_logo_picture }}'); {{ $loop->last ? 'height: 40px' : ''}}"></h3>
                            <h4 class="mb-0 first-item">
                                {{ $project->build_status === 'CONSTRUCCION' ? 'EN DESARROLLO' : $project->build_status }}
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="row mt-5 splide d-block d-lg-none">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($projects as $project)
                        <li class="splide__slide">
                            <img src="images/proyectos/{{ $project->mini_picture }}" class="img-fluid" alt="{{ $project->name }}">
                            <div class="text-center home-links__inner-title d-block">
                                <h3 class="mb-0 w-75 mx-auto pt-3" style="background-image: url('images/proyectos/{{ $project->mini_logo_picture }}')"></h3>
                                <h4 class="mb-0 position-static">{{ $project->build_status === 'CONSTRUCCION' ? 'EN DESARROLLO' : $project->build_status }}</h4>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="familias pt-5 pt-lg-0">
        <div class="container-lg">
            <div class="col-xl-10 mx-auto">
                <div class="row">
                    <div class="col-lg-5 d-flex justify-content-center align-items-center">
                        <div class="text-center familias__info">
                            <h3 class="fw-bold">FAMILIAS FELICES</h3>
                            <p>Te ayudamos a construir tus sueños<br><strong>¡Contáctanos!</strong></p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row splide splide-testimonios mt-5 mb-5">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <div class="testimonial">
                                            <div class="position-relative mb-4">
                                                <div class="testimonial__content">
                                                    <p class="text-center mb-0">Este saludo es para agradecerles por la venta de los departamentos en Emmel I y Emmel II, por la promesa de venta, precio justo, superficie perfecta, ubicación, comuna y tipo de propiedad. Yo radico muchos años en el extranjero y con el apoyo de uds. de ofrecerme buen servicio y cumplimiento logré mi objetivo. Cordialmente, Héctor del Carpio.</p>
                                                </div>
                                                <i></i>
                                            </div>
                                            <div class="testimonial__footer d-flex">
                                                <div class="testimonial__footer-image me-4">
                                                    <img src="{{ asset('images/testimonios/Captura_testimonio_01.jpeg') }}" alt="Testimonio 1" class="img-fluid rounded-pill">
                                                </div>
                                                <div class="testimonial__footer-cite align-self-center">
                                                    <h6 class="fw-bold mb-1">Héctor del carpio</h6>
                                                    <p class="mb-0 small">Propietario | Residencial Emmel y Emmel II</p>
                                                    <ul class="list-unstyled d-flex">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="testimonial">
                                            <div class="position-relative mb-4">
                                                <div class="testimonial__content">
                                                    <p class="text-center mb-0">El departamento es muy bonito, cuenta con mucha iluminación natural y una vista espectacular, además de tener muy buena ubicación.</p>
                                                </div>
                                                <i></i>
                                            </div>
                                            <div class="testimonial__footer d-flex">
                                                <div class="testimonial__footer-image me-4">
                                                    <img src="{{ asset('images/testimonios/avatar_mujer.png') }}" alt="Testimonio 1" class="img-fluid rounded-pill">
                                                </div>
                                                <div class="testimonial__footer-cite align-self-center">
                                                    <h6 class="fw-bold mb-1">Saturnina Quispe</h6>
                                                    <p class="mb-0 small">Propietaria | Residencial Emmel II</p>
                                                    <ul class="list-unstyled d-flex">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="splide__slide">
                                        <div class="testimonial">
                                            <div class="position-relative mb-4">
                                                <div class="testimonial__content">
                                                    <p class="text-center mb-0">Me gusta mucho el diseño de la casa, los acabados son elegantes y de primera calidad. Alferza tiene un equipo de trabajo muy proactivo y capacitado.</p>
                                                </div>
                                                <i></i>
                                            </div>
                                            <div class="testimonial__footer d-flex">
                                                <div class="testimonial__footer-image me-4">
                                                    <img src="{{ asset('images/testimonios/avatar_hombre.png') }}" alt="Testimonio 1" class="img-fluid rounded-pill">
                                                </div>
                                                <div class="testimonial__footer-cite align-self-center">
                                                    <h6 class="fw-bold mb-1">Franco Jiménez</h6>
                                                    <p class="mb-0 small">Propietario | Residencial Aurora</p>
                                                    <ul class="list-unstyled d-flex">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid socios pb-5 pt-5">
        <h3 class="text-center fw-bold">LOS MEJORES SOCIOS PARA LOS MEJORES PROYECTOS</h3>
        <div class="row mt-5 splide splide-socios pb-5">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ asset('images/socios/aceros-arequipa-logo.png') }}" alt="Aceros Arequipa logo" class="img-fluid">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('images/socios/decor-center-logo.png') }}" alt="Decor center logo" class="img-fluid">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('images/socios/schindler-logo.png') }}" alt="Schindler logo" class="img-fluid">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('images/socios/vainsa-logo.png') }}" alt="Vainsa logo" class="img-fluid">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('images/socios/yura-logo.png') }}" alt="Yura logo" class="img-fluid">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script src="js/splide.min.js"></script>
<script>
document.addEventListener( 'DOMContentLoaded', function () {
	new Splide( '.splide', {
        arrows: false,
        padding: {
            right: '9rem',
            left : '9rem',
	    },
        focus: 'center',
        breakpoints: {
            '575': {
                padding: {
                    right: '3rem',
                    left : '3rem',
                },
            },
        }
    } ).mount();

    new Splide('.splide-socios', {
        arrows: false,
        perPage: 4,
        perMove: 1,
        autoplay: true,
        type: 'loop',
        interval: 3000,
        pauseOnHover: false,
        // autoWidth: true,
        breakpoints: {
            890: {
                perPage: 2,
            },
            575: {
                perPage: 1,
                focus: 'center',
            },
        }
    }).mount();

    new Splide('.splide-testimonios', {
        arrows: false,
        perPage: 1,
        perMove: 1,
        autoplay: true,
        type: 'loop',
        padding: {
            right: '.8rem',
            left : '.8rem',
	    },
        speed: 4000,
        interval: 6000
    }).mount();
});
</script>
@endsection
