@extends('layouts.masterpage')

@section('body')
<link rel="stylesheet" href="css/splide-core.min.css">
<div id="carousel-home" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators justify-content-start flex-column">
        <button type="button" data-bs-target="#carousel-home" data-bs-slide-to="0" class="active rounded-circle" aria-current="true" aria-label="Banner 1"></button>
        <button type="button" data-bs-target="#carousel-home" data-bs-slide-to="1" class="rounded-circle" aria-label="Banner 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/home_banner-01.jpg" class="d-block w-100" alt="Banner alferza 1">
      </div>
      <div class="carousel-item">
          <img src="images/home_banner-02.jpg" class="d-block w-100" alt="banner alferza 2">
      </div>
    </div>
</div>
<div class="home">
    <div class="position-relative home-whatsapp">
        <div class="position-relative home-whatsapp__fill">
            <a href="#"><i class="fab fa-whatsapp fa-3x"></i></a>
        </div>
        <div class="position-absolute home-whatsapp__contact">¡Contáctanos aquí!</div>
    </div>
    <div class="container-xl home-trayectoria">
        <h2 class="text-center">TRAYECTORIA INMOBILIARIA</h2>
        <div class="d-flex justify-content-end home-links d-none d-lg-flex">
            <div class="home-trayectoria__alferza d-none d-xl-block">
                <strong class="fs-2">ALFERZA</strong>
            </div>
            @foreach ($projects as $project)
            <div class="home-links__box">
                <a href="#" id="project_{{ $project->id }}">
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
            {{-- <div class="home-links__box">
                <a href="#">
                    <div class="home-links__inner">
                        <img src="images/proyectos/proyecto_2.jpg" class="img-fluid" alt="Proyecto 2">
                        <div class="text-center home-links__inner-title">
                            <h3 class="mb-0" style="background-image: url('images/proyectos/img_prada.png')"></h3>
                            <h4 class="mb-0">OTROS</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="home-links__box">
                <a href="#">
                    <div class="home-links__inner">
                        <img src="images/proyectos/proyecto_3.png" class="img-fluid" alt="Proyecto 3">
                        <div class="text-center home-links__inner-title">
                            <h3 class="mb-0" style="background-image: url('images/proyectos/img_santamaria.png')"></h3>
                            <h4 class="mb-0">EN DESARROLLO</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="home-links__box">
                <a href="#">
                    <div class="home-links__inner">
                        <img src="images/proyectos/proyecto_4.png" class="img-fluid" alt="Proyecto 4">
                        <div class="text-center home-links__inner-title">
                            <h3 class="mb-0" style="background-image: url('images/proyectos/img_emmel.png')"></h3>
                            <h4 class="mb-0">EN DESARROLLO</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="home-links__box">
                <a href="#">
                    <div class="home-links__inner">
                        <img src="images/proyectos/proyecto_5.png" class="img-fluid" alt="Proyecto 5">
                        <div class="text-center home-links__inner-title">
                            <h3 class="mb-0" style="background-image: url('images/proyectos/img_aurora.png')"></h3>
                            <h4 class="mb-0">EN DESARROLLO</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="home-links__box">
                <a href="#">
                    <div class="home-links__inner">
                        <img src="images/proyectos/proyecto_6.jpg" class="img-fluid" alt="Proyecto 6">
                        <div class="text-center home-links__inner-title">
                            <h3 class="mb-0" style="background-image: url('images/proyectos/img_emmel_2.png')"></h3>
                            <h4 class="mb-0">EN DESARROLLO</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="home-links__box">
                <a href="#">
                    <div class="home-links__inner">
                        <img src="images/proyectos/proyecto_7.jpg" class="img-fluid" alt="Proyecto 7">
                        <div class="text-center home-links__inner-title">
                            <h3 class="mb-0" style="background-image: url('images/proyectos/img_la_recoleta.png')"></h3>
                            <h4 class="mb-0">EN DESARROLLO</h4>
                        </div>
                    </div>
                </a>
            </div> --}}
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
                    {{-- <li class="splide__slide">
                        <img src="images/proyectos/proyecto_2.jpg" class="img-fluid" alt="Proyecto 2">
                        <div class="text-center home-links__inner-title d-block">
                            <h3 class="mb-0 w-75 mx-auto pt-3">RECOLETA</h3>
                            <span>RESIDENCIAL</span>
                            <h4 class="mb-0 position-static">EN DESARROLLO</h4>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="images/proyectos/proyecto_3.png" class="img-fluid" alt="Proyecto 3">
                        <div class="text-center home-links__inner-title d-block">
                            <h3 class="mb-0 w-75 mx-auto pt-3">RECOLETA</h3>
                            <span>RESIDENCIAL</span>
                            <h4 class="mb-0 position-static">EN DESARROLLO</h4>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="images/proyectos/proyecto_4.png" class="img-fluid" alt="Proyecto 4">
                        <div class="text-center home-links__inner-title d-block">
                            <h3 class="mb-0 w-75 mx-auto pt-3">RECOLETA</h3>
                            <span>RESIDENCIAL</span>
                            <h4 class="mb-0 position-static">EN DESARROLLO</h4>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="images/proyectos/proyecto_5.png" class="img-fluid" alt="Proyecto 5">
                        <div class="text-center home-links__inner-title d-block">
                            <h3 class="mb-0 w-75 mx-auto pt-3">RECOLETA</h3>
                            <span>RESIDENCIAL</span>
                            <h4 class="mb-0 position-static">EN DESARROLLO</h4>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="images/proyectos/proyecto_6.jpg" class="img-fluid" alt="Proyecto 6">
                        <div class="text-center home-links__inner-title d-block">
                            <h3 class="mb-0 w-75 mx-auto pt-3">RECOLETA</h3>
                            <span>RESIDENCIAL</span>
                            <h4 class="mb-0 position-static">EN DESARROLLO</h4>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="images/proyectos/proyecto_7.jpg" class="img-fluid" alt="Proyecto 7">
                        <div class="text-center home-links__inner-title d-block">
                            <h3 class="mb-0 w-75 mx-auto pt-3">RECOLETA</h3>
                            <span>RESIDENCIAL</span>
                            <h4 class="mb-0 position-static">EN DESARROLLO</h4>
                        </div>
                    </li> --}}
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
});
</script>
@endsection
