<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alferza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div>
        <header class="container position-relative">
            <nav class="navbar navbar-light pb-0 pt-0">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/logo-alferza.png') }}" alt="Logo Alferza" class="img-fluid main-logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu" aria-controls="nav-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars fa-lg"></i>
                    </button>
                    <div class="main-navbar">
                        <div class="collapse navbar-collapse" id="nav-menu">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-end">
                              <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('about') }}">NOSOTROS</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="collapse" data-bs-target="#sub-nav-menu" aria-expanded="false">
                                  PROYECTOS
                                </a>
                                <ul class="collapse navbar-collapse list-unstyled pb-3 sub-nav-menu" id="sub-nav-menu" aria-labelledby="navbarDropdown">
                                  {{-- <li><a href="{{ route('projects') }}">Proyectos</a></li> --}}
                                    @foreach ($projects as $project)
                                  <li><a href="{{ route('detail-project', $project->url_slug ) }}" class="nav-link">{{ $project->name }}</a></li>
                                  @endforeach
                                </ul>
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
    <footer>
        <div class="container">
            <div class="row justify-content-md-between">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-xl-9 d-flex align-items-center">
                            <address class="mb-0">
                                <span>
                                    <i class="fas fa-map-marker-alt custom-icon me-2"></i> Av. Trinidad Morán 100 (segundo piso), Cayma. Arequipa
                                </span>
                                <span class="ps-4 pe-4">
                                    <i class="far fa-envelope custom-icon me-2"></i> <a href="mailto:informes@alferza.pe">informes@alferza.pe</a>
                                </span>
                                <span>
                                    <i class="fas fa-phone-alt custom-icon me-2"></i> 054 + 25 3792 / 934 819 969
                                </span>
                            </address>
                        </div>
                        <div class="col-12 col-xl-3 d-flex d-xl-block justify-content-center mt-5 mt-xl-0">
                            <div class="d-flex align-items-center justify-content-end brands-socials">
                                <span class="d-inline-block fs-2 me-2 footer-alferza">ALFERZA</span>
                                <div class="brand-icon">
                                    <a href="https://www.facebook.com/alferzainmobiliaria/" title="Facebook" target="_blank">
                                        <i class="fab fa-facebook-f custom-icon"></i>
                                    </a>
                                </div>
                                <div class="brand-icon">
                                    <a href="https://www.instagram.com/alferzainmobiliaria/" title="Instagram" target="_blank">
                                        <i class="fab fa-instagram-square custom-icon"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
