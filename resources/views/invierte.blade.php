@extends('layouts.masterpage')

@section('title', 'Invierte')

@section('body')
<div class="container invierte">
    <h2 class="text-center fw-bold pt-5 mb-5">
        INVIERTE <span>en el rubro inmobiliario</span>
    </h2>
    <div class="col-xxl-10 mx-auto pb-5">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex flex-column">
                <div class="position-relative">
                    <img src="{{ asset('images/invierte.jpeg') }}" alt="Invierte" class="img-fluid">
                    <div class="position-absolute invierte-caption rounded">
                        <p class="mb-0 p-3 fs-xl-4 fs-5">El mercado inmobiliario peruano mueve actualmente más de 4.5 mil millones de soles al año.</p>
                    </div>
                </div>
                <div class="text-center mt-4 mt-xl-auto mb-3">
                    <a href="{{ env('URL_BROCHURE') }}" class="btn btn-secondary alferza-btn">
                        BROCHURE
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-5 mt-xl-0 invierte-ganancias">
                <h3 class="mb-4">¿Quieres multiplicar tus ganancias?</h3>
                <p>Te invitamos a ser parte de nuestros asociados, ya sea con CAPITAL, TERRENOS O INMUEBLES. Con 10 años de experiencia, estamos en la constante búsqueda de inversionistas para desarrollar proyectos inmobiliarios. Te ofrecemos incrementar tu patrimonio con una rentabilidad superior a la del mercado financiero. ¡Déjanos tus datos!, tenemos varias alternativas de inversión. </p>
                <form action="#" class="mt-4">
                    <div class="mb-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email">Correo electrónico</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <div class="col-5">
                            <label for="telefono">Teléfono</label>
                            <div class="input-group">
                                <span class="input-group-text" id="moneda">
                                    <i class="fas fa-phone"></i>
                                </span>
                                <input type="tel" id="telefono" name="telefono" class="form-control" maxlength="13">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="mb-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Autorizo a Alferza Desarrolladora Inmobiliaria para que realice las actividades de prospección comercial y marketing descritas en la Política de Privacidad
                            </label>
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-secondary alferza-btn" type="submit">ENVIAR <i class="fas fa-envelope"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
