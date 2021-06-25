@extends('layouts.masterpage')

@section('body')
<div class="consultant">
    <img src="images/banner_asesores.jpg" alt="Imagen Nuestros asesores" class="d-block w-100">
    <div class="container">
        <h1 class="text-center main-title">NUESTROS ASESORES</h1>
        <div class="row">
            <div class="col-12 col-md-10 col-xl-8 mx-auto">
                <p class="consultant__lead">Nuestro Equipo de asesores, comparten una pasión por la atención y las ventas. Por ende su compromiso es hacia los clientes y su satisfacción. Generar confianza es uno de nuestros principales pilares por este motivo te presentamos a cada miembro del equipo de Alferza, quienes  te ayudaran a tomar la mejor decisión inmobiliaria.</p>

                <div class="row mt-5 pb-5 consultant__list justify-content-center">
                    <div class="col-12 col-sm-4 mb-4">
                        <div class="consultant__list-block">
                            <div class="consultant__list-img" style="background-image: url('images/asesores/roy_jaramillo.jpeg')"></div>
                            <div class="p-3 p-sm-3 pt-4 text-center consultant__list-profile">
                                <h4 class="mb-3">
                                    <span class="d-block">Roy</span>
                                    <small class="fs-6">Jaramillo Guevara</small>
                                </h4>
                                <div class="small mb-1">
                                    <i class="fas fa-phone-alt custom-icon custom-icon-sm me-1"></i> 934 828 937
                                </div>
                                <p>Cuento con experiencia en relaciones comerciales a todo nivel y conocimiento de diversos productos inmobiliarios. He recorrido distintas ciudades del país realizando gestiones comerciales. Mi objetivo es asesorar y resolver la consulta de mis clientes para cerrar nuevos negocios.</p>
                                <div class="small">
                                    <i class="far fa-envelope custom-icon custom-icon-sm me-1"></i>ventas4@alferza.pe
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 mb-4">
                        <div class="consultant__list-block">
                            <div class="consultant__list-img" style="background-image: url('images/asesores/oswaldo_eguia.jpeg')"></div>
                            <div class="p-3 p-sm-3 pt-4 text-center consultant__list-profile">
                                <h4 class="mb-3">
                                    <span class="d-block">Oswaldo Ruben</span>
                                    <small class="fs-6">Eguia Rojas</small>
                                </h4>
                                <div class="small mb-1">
                                    <i class="fas fa-phone-alt custom-icon custom-icon-sm me-1"></i> 977 445 515
                                </div>
                                <p>Experto en relaciones comerciales, me gusta identificar las necesidades de mis clientes pera asesorarlos en su compra. Aprendo de cada caso y busco una manera dinámica de afrontar nuevos retos comerciales. Mi objetivo es guiar al cliente paso  a paso durante su proceso de compra.</p>
                                <div class="small">
                                    <i class="far fa-envelope custom-icon custom-icon-sm me-1"></i>ventas2@alferza.pe
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 mb-4">
                        <div class="consultant__list-block">
                            <div class="consultant__list-img" style="background-image: url('images/asesores/mauricio_fernandez.jpeg')"></div>
                            <div class="p-3 p-sm-3 pt-4 consultant__list-profile text-center">
                                <h4 class="mb-3">
                                    <span class="d-block">Mauricio Daniel</span>
                                    <small class="fs-6">Fernández Martínez</small>
                                </h4>
                                <div class="small mb-1">
                                    <i class="fas fa-phone-alt custom-icon custom-icon-sm me-1"></i> 981 596 039
                                </div>
                                <p>Tengo una amplia trayectoria de ventas presenciales en el rubro inmobiliario.  Siempre busco muy buenos resultados y como objetivo tengo ayudar a mis clientes a optar por la mejor decisión de compra.</p>
                                <div class="small">
                                    <i class="far fa-envelope custom-icon custom-icon-sm me-1"></i>ventas3@alferza.pe
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 mb-4">
                        <div class="consultant__list-block">
                            <div class="consultant__list-img" style="background-image: url('images/asesores/jennifer_silva.jpeg')"></div>
                            <div class="p-3 p-sm-3 pt-4 consultant__list-profile text-center">
                                <h4 class="mb-3">
                                    <span class="d-block">Jennifer</span>
                                    <small class="fs-6">Silva</small>
                                </h4>
                                <div class="small mb-1">
                                    <i class="fas fa-phone-alt custom-icon custom-icon-sm me-1"></i> 934 819 969
                                </div>
                                <p>Conocedora de sector inmobiliario, amplia experiencia en asesoramiento de compras con créditos hipotecarios y financiamientos. Ha recorrido las distintas áreas de la empresa, lo que le permite dar información completa y precisa al interesado.</p>
                                {{-- <div class="small d-none">
                                    <i class="far fa-envelope custom-icon custom-icon-sm me-1"></i>ventas3@alferza.pe
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
