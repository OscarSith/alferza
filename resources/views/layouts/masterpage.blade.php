<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Alferza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div>
        <header class="container position-relative">
            <nav class="navbar navbar-light pb-0 pt-0">
                <div class="container-fluid g-0">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logo-alferza.png') }}" alt="Logo Alferza" class="img-fluid main-logo">
                    </a>
                    <button class="navbar-toggler pe-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu" aria-controls="nav-menu" aria-expanded="false" aria-label="Toggle navigation">
                        Menu <i class="fas fa-bars fa-lg"></i>
                    </button>
                    <div class="main-navbar">
                        <div class="collapse navbar-collapse" id="nav-menu">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-end">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('about') }}">NOSOTROS</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ route('projects') }}">PROYECTOS</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ route('workWithUs')}}">TRABAJA CON NOSOTROS</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="{{ route('consultants')}}">NUESTROS ASESORES</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" href="#">BLOG</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" href="#">INVIERTE</a>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <main>
        @yield('body')
    </main>

    <div id="footer-widgets">
        <div class="overlay pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-3">
                        <img src="{{ asset('images/logo-footer.png') }}" class="img-fluid logo-footer mb-5 mb-xl-0" alt="Logo pie de pagina">
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <address class="mb-5 mb-xl-0">
                            <ul class="list-unstyled contact-info">
                                <li class="mb-3">
                                    <i class="fa fa-home fa-fw"></i> Av. Trinidad Morán 100 (segundo piso), Cayma. Arequipa.<br>
                                </li>
                                <li class="mb-3">
                                    <i class="fas fa-phone-alt fa-fw"></i> 25 3792 - 934 819 969
                                </li>
                                <li class="mb-3">
                                    <i class="far fa-envelope fa-fw"></i> <a href="mailto: informes@alferza.pe"> informes@alferza.pe</a>
                                </li>
                            </ul>
                            <ul class="contact-social"></ul>
                        </address>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <ul class="list-unstyled menu-footer mb-5 mb-xl-0">
                            <li class="w-100">
                                <a href="/">Inicio</a>
                            </li>
                            <li class="w-100">
                                <a href="{{ route('projects') }}">Proyectos</a>
                            </li>
                            <li class="w-100">
                                <a href="{{ route('workWithUs')}}">Trabaja con nosotros</a>
                            </li>
                            <li class="w-100">
                                <a href="{{ route('about') }}">Nosotros</a>
                            </li>
                            <li class="w-100">
                                <a href="{{ route('consultants')}}">Nuestros asesores</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-lg-3 brands-socials">
                        <h5 class="text-center text-xl-start">SÍGUENOS</h5>
                        <ul class="list-unstyled d-flex text-center justify-content-center justify-content-xl-start">
                            <li class="facebook me-2">
                                <a href="https://www.facebook.com/alferzainmobiliaria/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="instagram">
                                <a href="https://www.instagram.com/alferzainmobiliaria/" target="_blank">
                                    <i class="fab fa-instagram-square"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <nav class="navbar navbar-expand">
                        <ul class="navbar-nav small flex-wrap justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('projects') }}">Proyectos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('workWithUs')}}">Trabaja con nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('consultants')}}">Nuestros asesores</a>
                            </li>
                            <li class="nav-item d-none">
                                <a class="nav-link disabled" href="#">BLOG</a>
                            </li>
                            <li class="nav-item d-none">
                                <a class="nav-link disabled" href="#">INVIERTE</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-5 d-flex align-items-center justify-content-center pt-1">
                    <span>© 2020 Alferza. Todos los derechos reservados.</span>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
