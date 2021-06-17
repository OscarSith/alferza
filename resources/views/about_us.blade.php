@extends('layouts.masterpage')

@section('title', 'Nosotros')

@section('body')
<div class="about-us">
    <img src="images/banner_nosotros.jpg" class="d-block w-100" alt="Nosotros alferza">
    <div class="container about-content">
        <h1 class="text-center">
            <img src="images/logo-alferza.png" alt="Logo Alferza" class="img-fluid" style="height: 80px">
        </h1>
        <div class="col-xl-9 mx-auto about-content__first-lead">
            <div class="row">
                <div class="col-12 col-md-7">
                    <p class="pe-0 pe-md-3 pe-xl-5 first-p">Somos una empresa arequipeña de los sectores construcción e inmobiliario, nos caracterizamos por la innovación en el planteamiento de nuestros proyectos. En menos de una década nos hemos posicionado en la ciudad de Arequipa con Proyectos de calidad y de fácil acceso para la población. Somos una empresa con el dinamismo y agilidad para adaptarse a las necesidades del cliente y las características del mercado.</p>
                </div>
                <div class="col-12 col-md-5">
                    <p class="second-p">Trabajamos para crear espacios que mejoren la calidad de vida de las personas. Cuidamos de los detalles y hacemos obras de calidad. Buscamos la forma de progresar continuamente para que nuestros proyectos estén siempre por delante.</p>
                </div>
                <div class="col-12">
                    <p class="first-p mt-3">Fundada por Luis Delgado A., se da inicio a nuestra trayectoria en el negocio inmobiliario de la ciudad de Arequipa. Empezamos con edificios multifamiliares de 9 unidades, y año tras año hemos ido creciendo y ejecutando proyectos cada vez más grandes.</p>
                </div>
                <div class="col-12 col-md-10 col-xl-8 mx-auto text-center mt-5 mb-5">
                    <p class="mb-1 exp">Con 9 años de experiencia,</p>
                    <p class="mb-1 new-generation">SOMOS UNA INMOBILIARIA DE NUEVA GENERACIÓN,</p>
                    <p class="proy">especialidad en proyectos multifamiliares</p>
                </div>
                <div class="col-12 col-md-7">
                    <h6>MISIÓN</h6>
                    <p class="pe-3 pe-xl-5 first-p">Gestionamos recursos con la mayor eficiencia para crear viviendas de calidad, siendo la satisfacción de nuestros clientes y accionistas nuestra mayor recompensa, apoyándonos en el mejor staff de profesionales y técnicos.</p>
                </div>
                <div class="col-12 col-md-5">
                    <h6 class="text-md-end">VISIÓN</h6>
                    <p class="second-p">Consolidarnos como una empresa con altos estándares de calidad arquitectónica, promoviendo el crecimiento y desarrollo de Arequipa.</p>
                </div>
            </div>
            <hr class="mb-5 mt-5">
            <div class="row justify-content-around mt-5 staff">
                <div class="col-lg-5">
                    <div class="d-flex mb-3">
                        <img src="{{ asset('images/staff_luis_delgado.jpg') }}" alt="Imagen luis delgado" style="width: 110px">
                        <h4 class="mt-auto mb-0 ms-3">
                            <span class="fs-3 d-block mb-2">Luis</span>
                            <strong class="fw-bold">Delgado Arróspide</strong>
                        </h4>
                    </div>
                    <p>Fundador y principal accionista de Alferza Desarrolladora inmobiliaria, cuenta con más de 10 años de experiencia en el sector inmobiliario, desarrollando una variedad de proyectos de gran envergadura en la ciudad de Arequipa, generando desarrollo y empleo para la región. Es actualmente gerente General y Director de Negocios</p>
                    <p>Se desempeñó como oficial de inteligencia de la Fuerza Aérea del Perú durante ocho años, con estudios de Ciencias Políticas en la Universidad Nacional Federico Villareall de Lima, así mismo cuenta con estudios de Derecho en la Universidad Católica Santa maría de Arequipa, cuenta con una Maestría en Administración de Negocios por la Universidad Católica Santa María, y cursos de Administración y Finanzas por la Universidad Católica San Pablo</p>
                    <span class="badge px-3">
                        <strong class="fs-4 dw-bold">M</strong><sup>2</sup>
                        <small>DESARROLLADOS</small>
                        &nbsp;
                        <span class="fs-4 fw-light">23,400.00</span>
                    </span>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex mb-3 justify-content-end mt-2">
                        <h4 class="mt-auto mb-0 me-3 text-end">
                            <span class="fs-3 d-block mb-2">Daniel</span>
                            <strong class="fw-bold">Paredes Contreras</strong>
                        </h4>
                        <img src="{{ asset('images/staff_daniel_paredes.jpg') }}" alt="Imagen Daniel Paredes" style="width: 110px">
                    </div>
                    <p>Jefe de Proyectos de Alferza Desarrolladora Inmobiliaria, cuenta con más de 10 años de experiencia en el desarrollo y dirección de proyectos inmobiliarios, es miembro de comisiones calificadoras de proyectos en el Centro Histórico de Arequipa.</p>
                    <p>Con título de Arquitecto por la universidad Nacional de San Agustín, además cuenta con estudios de alta especialización y Posgrado en Derecho Registral y Notarial; estudios de Posgrado en Planificación Urbana y Construcción Sostenible. Especialista en metodología BIM y enfoque PMI. Máster en administradión y Dirección de Proyectos por la universidad Peruana de Ciencias Aplicadas de Lima. Ha laborado en prestigiosas empresas del sector innmobiliario como Marcan, Edifica, entre otras.</p>

                    <span class="badge px-3 mb-3">
                        <strong class="fs-4 fw-bold">M</strong><sup>2</sup>
                        <small>PROYECTADOS</small>
                        &nbsp;
                        <span class="fs-4 fw-light">31,177.00</span>
                    </span>
                    <span class="badge px-3">
                        <span class="d-inline-block">
                            <strong class="fs-4 fw-bold">M</strong><sup>2</sup>
                            <small class="d-inline-block me-2">EJECUTADOS <br>SUPERVISADOS <br>EN JEFATURAS</small>
                        </span>
                        <span class="fs-4 fw-light">46,618.00</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
