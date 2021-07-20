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
    <link rel="stylesheet" href="{{ asset('css/baguetteBox.min.css') }}">
</head>
<body>
    <div class="container-full landing">
        <section class="form-section pb-4">
            <div class="col-md-10 col-lg-8 col-xl-6 mx-auto">
                <div class="form-section__container">
                    <div class="text-center pt-4">
                        <img src="{{ asset('images/logo-alferza.png') }}" alt="Logo alferza" class="img-fluid">
                        <div class="mt-4">
                            <p>Conoce más sobre este maravilloso y exclusivo proyecto residencial. <br>Uno de nuestros asesores se comunicará contigo...</p>
                        </div>
                    </div>
                    <div class="elementor-widget-container">
                        <div class="px-3">
                            @include('partials.errors_form_messages')
                        </div>
                        <form method="post" action="{{ route('landingForm') }}">
                            {{ csrf_field() }}
                            <div class="p-3">
                                <div class="mb-3">
                                    <label for="form-field-project">Proyecto</label>
                                    <select name="proyecto" id="form-field-project" class="form-select">
                                        <option value="">Seleccione</option>
                                        @foreach ($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="nombre">Nombre completo</label>
                                    <input type="text" name="nombre_completo" id="nombre" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <label for="correo">Correo electrónico</label>
                                            <input type="email" name="correo" id="correo" class="form-control" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="celular">Teléfono / Celular</label>
                                            <input type="tel" name="celular" id="form-field-field_3" class="form-control" required pattern="[0-9()#&amp;+*-=.]+">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="mensaje">Consulta</label>
                                    <textarea class="form-control" name="mensaje" id="mensaje" rows="3"></textarea>
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-secondary alferza-btn">
                                        <span class="elementor-button-text">Enviar petición</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery">
            <div class="gallery-title">
                <h2 class="text-center mt-5">Disfruta de un recorrido virtual</h2>
            </div>
            <div class="row g-0 galeria">
                @foreach ($images as $image)
                    <a href="{{ asset('images/proyectos/galeria/' . $image->picture) }}" class="col-sm-6 col-lg-4 col-xxl-3 gallery-item">
                        <div class="gallery-item__img" style="background-image: url({{ asset('images/proyectos/galeria/' . $image->picture) }});"></div>
                        <div class="overlay"></div>
                    </a>
                @endforeach
            </div>
        </section>
        <footer>
            <p class="text-center mb-0 pt-3 pe-2 ps-2">
                <small>* Todas las imágenes son referenciales y están sujetas a cambios y o modificaciones a discreción de la empresa. No incluye mobiliario.</small>
            </p>
        </footer>
    </div>

    <script src="{{ asset('js/baguetteBox.min.js') }}"></script>
    <script>
        baguetteBox.run('.galeria');
    </script>
</body>
</html>
