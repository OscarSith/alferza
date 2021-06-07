@extends('layouts.masterpage')

@section('title', 'Proyectos')

@section('body')
<link rel="stylesheet" href="css/splide-core.min.css">
<div class="projects">
    <div class="projects-bg"></div>
    <img src="images/banner_proyectos.jpg" alt="Imagen Proyectos Alferza" class="d-block w-100">
    <div class="container-xl">
        <h1 class="text-center main-title">PROYECTOS</h1>
        <div class="col-11 col-lg-8 mx-auto">
            <p class="first-lead">Estamos posicionados en la ciudad de Arequipa, desarrollando los mercados del sur peruano, innovando en el producto inmobiliario para los diferentes consumidores y, por sobre todo, estamos incursionando en el uso de tecnología como la Domótica, lo que generará valor diferenciado para nuestros clientes y nos permitirá competir frente a las principales empresas del sector. En la actualidad contamos con 6 proyectos ejecutados y 3 proyectos en fase de diseño, una sólida experiencia en el rubro que nos permite enfocarnos en proyectos masivos.</p>
        </div>
        <section class="home-trayectoria">
            <h2 class="text-center">TRAYECTORIA INMOBILIARIA</h2>
            <div class="d-flex justify-content-end home-links d-none d-lg-flex">
                <div class="home-trayectoria__alferza d-none d-xl-block">
                    <strong class="fs-2">ALFERZA</strong>
                </div>
                @foreach ($projects as $project)
                <div class="home-links__box">
                    <a href="{{ route('detail-project', $project->url_slug) }}" id="project_{{ $project->id }}">
                        <div class="home-links__inner">
                            <img src="images/proyectos/{{ $project->mini_picture }}" class="img-fluid" alt="{{ $project->name }}">
                            <div class="text-center home-links__inner-title">
                                <h3 class="mb-0" style="background-image: url('images/proyectos/{{ $project->mini_logo_picture }}')"></h3>
                                <h4 class="mb-0 first-item">
                                    {{ $project->build_status === 'CONSTRUCCION' ? 'EN DESARROLLO' : $project->build_status }}
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="d-flex mt-5 d-none d-lg-flex nuevo">
                <div class="d-none d-xl-block nuevo-headers" style="width: 152px">
                    <h5>
                        <span class="fs-2">&nbsp;</span>
                    </h5>
                    <p class="ms-2">UBICACIÓN</p>
                    <p class="ms-3">AREA CONSTRUIDA</p>
                    <p class="ms-4">COSTO DEL PROYECTO</p>
                </div>
                @foreach ($projects as $project)
                    <div class="col">
                        <h5 class="mb-1">
                            <span class="fs-2">{{ str_pad($project->quantity, 2, '0', STR_PAD_LEFT) }}</span>
                            <small>{{ $project->build_type }}</small>
                        </h5>
                        <p class="mb-1 ms-2 nuevo-location">{{ $project->location }}</p>
                        <p class="mb-1 ms-3">{{ number_format($project->build_area, 0) }} m<sup>2</sup></p>
                        <p class="ms-4 nuevo-price">US${{ number_format($project->build_price, 2) }}</p>
                    </div>
                @endforeach
                <div style="width: 96px" class="d-none d-xl-block"></div>
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
        </section>
    </div>
    <div class="container-fluid g-0 testimonios">
        <section class="pt-5">
            <div class="container">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <h2 class="mb-3 mb-md-0">TESTIMONIOS</h2>
                        <h2 class="mb-0 d-flex align-items-center">
                            Más de <strong class="fs-1 mx-1">300</strong> clientes satisfechos
                        </h2>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="col-12 col-xl-10 col-xxl-9 mx-auto pt-5 testimonios-list">
                    <div class="row mb-3 testimonios-item">
                        <div class="col-12 col-md-4 mb-3 mb-md-0 position-relative">
                            <h5>SR. FRANCO JIMENEZ</h5>
                            <span>Propietario residencial aurora</span>
                            <div class="d-none d-lg-block testimonios-item__separator"></div>
                        </div>
                        <div class="col-12 col-md-8">
                            <p class="mb-0">"Me gusta mucho el diseño de la casa, los acabados son de primera y elegantes. ALFERZA tiene un equipo de trabajo muy proactivo y capacitado"</p>
                        </div>
                    </div>
                    <div class="row mb-3 testimonios-item">
                        <div class="col-12 col-md-4 mb-3 mb-md-0 position-relative">
                            <h5>SR. SATURNINA QUISPE</h5>
                            <span>Propietaria Residencial Emmel I</span>
                            <div class="d-none d-lg-block testimonios-item__separator"></div>
                        </div>
                        <div class="col-12 col-md-8">
                            <p class="mb-0">"El departamento es muy bonito, cuenta con mucha iluminación natural  y una vista espectacular, además de tener una muy buena ubicación"</p>
                        </div>
                    </div>
                    <div class="row mb-3 testimonios-item">
                        <div class="col-12 col-md-4 mb-3 mb-md-0 position-relative">
                            <h5>SR. FRANCO JIMENEZ</h5>
                            <span>Propietario residencial aurora</span>
                            <div class="d-none d-lg-block testimonios-item__separator"></div>
                        </div>
                        <div class="col-12 col-md-8">
                            <p class="mb-0">“Me gusta mucho el diseño de la casa, los acabados son de primera y elegantes. ALFERZA tiene un equipo de trabajo muy proactivo y capacitado"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
});
</script>
@endsection
