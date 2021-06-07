@extends('layouts.masterpage')

@section('title', 'Trabaja con nosotros')

@section('body')
<div class="work-us">
    <img src="images/banner_trabaja_con_nosotros.jpg" alt="Imagen Trabaja con nosotros" class="d-block w-100">
    <div>
        <h1 class="text-center main-title">TRABAJA CON NOSOTROS</h1>
        <div class="container">
            <div class="col col-lg-10 col-xl-8 mx-auto">
                <p class="first-lead">
                    Te invitamos a ser parte de nuestros asociados, ya sea CAPITAL, TERRENOS O INMUEBLES. Con 10 años de experiencia, estamos en la constante búsqueda de inversionistas para desarrollar proyectos inmobiliarios. Te ofrecemos aumentar tu patrimonio con una rentabilidad superior a la del mercado financiero.
                </p>
                <p class="text-center second-lead mt-4">¡DÉJANOS TUS DATOS!, TENEMOS VARIAS ALTERNATIVAS DE INVERSIÓN.</p>
            </div>
        </div>
        <div class="col mt-5">
            <div class="accordion accordion-flush" id="accordionWorkUs">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed show text-center flex-column projects" type="button" data-bs-toggle="collapse" data-bs-target="#projects" aria-expanded="false" aria-controls="projects">
                      <span>Gestión</span>
                      <span>PROYECTOS INMOVILIARIOS</span>
                    </button>
                  </h2>
                  <div id="projects" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionWorkUs">
                    <div class="accordion-body">
                        <div class="container">
                            <div class="col col-lg-9 mx-auto pb-5">
                                <p>Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed text-center flex-column construction" type="button" data-bs-toggle="collapse" data-bs-target="#construction" aria-expanded="false" aria-controls="construction">
                        <span>Gestión</span>
                        <span>CONSTRUCCIÓN</span>
                    </button>
                  </h2>
                  <div id="construction" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionWorkUs">
                    <div class="accordion-body">
                        <div class="container">
                            <div class="col col-lg-9 mx-auto pb-5">
                                <p>Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div></p>
                            </div>
                        </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button text-center flex-column marketing" type="button" data-bs-toggle="collapse" data-bs-target="#marketing" aria-expanded="false" aria-controls="marketing">
                        <span>Gestión</span>
                        <span>COMERCIAL Y MARKETING</span>
                    </button>
                  </h2>
                  <div id="marketing" class="accordion-collapse collapse show" aria-labelledby="flush-headingThree" data-bs-parent="#accordionWorkUs">
                    <div class="accordion-body marketing">
                        <div class="container">
                            <div class="col col-lg-9 mx-auto pb-5">
                                <h5 class="mt-3 mt-md-5">Consultoría estratégica comercial</h5>
                                <p>Desde la identificación y contacto con los clientes, presentación de ofertas, cierre de ventas hasta la postventa. Definimos los objetivos, estrategias, calendarios y las acciones a realizar.</p>

                                <h5 class="mt-4">Marketing digital</h5>
                                <p>Desarrollo de Facebook ADS, Funnel de ventas, Customer journey, Retargeting, Community Manager, Google Analytics, copywriting, diseño gráfico, gestión y transformación de Leads.</p>

                                <h5 class="mt-4">Plan de Marketing y Estudios de Mercado</h5>
                                <p>Desarrollamos estructura de precios (PRICING), planes de crecimiento, diseño de estrategias y la integración entre el marketing y ventas. Nos adaptamos a las necesidades de cada propuesta arquitectónica y desarrollamos herramientas necesarias para implementar campañas.</p>

                                <h5 class="mt-4">Tercerización de fuerza de ventas</h5>
                                <p>Contamos con un equipo preparado y en constante capacitación para la venta de diversos proyectos inmobiliarios.  Las herramientas que utilizamos  son cierres de ventas, técnicas de negociación y de ventas, speech de ventas y protocolos de atención al cliente.</p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <section class="mt-2 work-us__why">
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
        </section>
        <section class="mt-2 mb-5 work-us__info">
            <h2 class="text-center sub-title">QUIERO RECIBIR MAYOR INFORMACIÓN</h2>
            <div class="container">
                <div class="row">
                    <div class="col col-lg-11 col-xl-8 mx-auto mt-3">
                        <form>
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="mb-3">
                                        <label class="fw-bold label" for="nombre">Nombre:</label>
                                        <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" minlength="2">
                                    </div>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col">
                                                <label class="fw-bold label" for="telefono">Teléfono:</label>
                                                <input type="tel" class="form-control form-control-sm" id="telefono" name="telefono" minlength="7" maxlength="15">
                                            </div>
                                            <div class="col">
                                                <label class="fw-bold label" for="correo">Correo electrónico:</label>
                                                <input type="mail" class="form-control form-control-sm" id="correo" name="correo" minlength="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="area-interes" class="fw-bold label">Área de Interés</label>
                                        <input type="text" class="form-control form-control-sm" id="area-interes" name="area-interes" minlength="2">
                                    </div>
                                    <div class="mb-3">
                                        <label for="rubro" class="fw-bold label">¿Porqué te apasiona el rubro?</label>
                                        <input type="text" class="form-control form-control-sm" id="rubro" name="rubro" minlength="2">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="autorizar">
                                            <label class="form-check-label" for="autorizar">
                                              Autorizo a Alferza Desarrolladora inmobiliaria para que realice las actividades de prospección comercial y marketing descritas en la Política de Privacidad <strong>(*)</strong>
                                            </label>
                                          </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary alferza-btn">Enviar</button>
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
@endsection
