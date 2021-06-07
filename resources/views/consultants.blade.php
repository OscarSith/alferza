@extends('layouts.masterpage')

@section('body')
<div class="consultant">
    <img src="images/banner_asesores.jpg" alt="Imagen Nuestros asesores" class="d-block w-100">
    <div class="container">
        <h1 class="text-center main-title">NUESTROS ASESORES</h1>
        <div class="row">
            <div class="col-12 col-md-10 col-xl-8 mx-auto">
                <p class="consultant__lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ad distinctio, omnis pariatur id, cupiditate temporibus iure et nisi ea non! Mollitia aspernatur iste excepturi voluptas esse quidem alias ut? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam animi ab voluptate! Eaque, velit quo. Maxime, quisquam culpa, nihil omnis consectetur sed sequi, facere quibusdam ab odio nulla delectus consequuntur.</p>

                <div class="row mt-5 consultant__list">
                    <div class="col-12 col-sm-4 mb-4">
                        <div class="consultant__list-block">
                            <div class="consultant__list-img" style="background-image: url('images/asesores/roy_jaramillo.jpeg')"></div>
                            <div class="p-3 p-sm-3 pt-4 text-center consultant__list-profile">
                                <h4 class="mb-3">
                                    <span class="d-block">Roy</span>
                                    <small class="fs-6">Jaramillo Guevara</small>
                                </h4>
                                <div class="small mb-2">
                                    <i class="fas fa-phone-alt custom-icon custom-icon-sm me-1"></i> 934 828 937
                                </div>
                                <p class="small text-start">Cuento con experiencia en relaciones comerciales a todo nivel y conocimiento de diversos productos inmobiliarios. He recorrido distintas ciudades del país realizando gestiones comerciales. Mi objetivo es asesorar y resolver la consulta de mis clientes para cerrar nuevos negocios.</p>
                                <div class="small mt-3">
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
                                <div class="small mb-2">
                                    <i class="fas fa-phone-alt custom-icon custom-icon-sm me-1"></i> 977 445 515
                                </div>
                                <p class="small text-start">Experto en relaciones comerciales, me gusta identificar las necesidades de mis clientes pera asesorarlos en su compra. Aprendo de cada caso y busco una manera dinámica de afrontar nuevos retos comerciales. Mi objetivo es guiar al cliente paso  a paso durante su proceso de compra.</p>
                                <div class="small mt-3">
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
                                <div class="small mb-2">
                                    <i class="fas fa-phone-alt custom-icon custom-icon-sm me-1"></i> 981 596 039
                                </div>
                                <p class="small text-start">Tengo una amplia trayectoria de ventas presenciales en el rubro inmobiliario.  Siempre busco muy buenos resultados y como objetivo tengo ayudar a mis clientes a optar por la mejor decisión de compra.</p>
                                <div class="small mt-3">
                                    <i class="far fa-envelope custom-icon custom-icon-sm me-1"></i>ventas3@alferza.pe
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
