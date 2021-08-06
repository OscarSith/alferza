@extends('layouts.masterpage')

@section('title', $project->name)

@section('body')
<link rel="stylesheet" href="{{ asset('css/iSlider.min.css') }}">
<div class="detail-project {{ Str::lower($project->build_status) }}">
    <img src="{{ asset('images/proyectos/' . $project->main_picture) }}" alt="Banner {{ $project->name }}" class="d-block w-100">
    @include('partials.whatsapp')
    <div class="container">
        <div class="col-12 col-xl-10 col-xxl-9 mx-auto">
            <div class="row">
                <div class="text-center mt-5 mb-5">
                    <img src="{{ asset('images/proyectos/' . $project->logo_picture) }}" alt="Logo {{ $project->name }}" class="img-fluid" style="height: 130px">
                </div>
                <div class="detail-project__description">
                    <h5 class="text-center pt-1 pb-1">
                        @switch($project->build_status)
                            @case('CONSTRUCCION')
                                DEPARTAMENTOS EN VENTA Y EN ETAPA DE CONSTRUCCIÓN
                                @break
                            @case('PREVENTA')
                            @case('LANZAMIENTO')
                                DEPARTAMENTOS EN LANZAMIENTO
                                @break
                            @case('ENTREGADO')
                                @if ($project->vendidas)
                                    VIVIENDAS VENDIDAS Y ENTREGADAS
                                @else
                                    DEPARTAMENTOS EN VENTA Y ENTREGA INMEDIATA
                                @endif
                                @break
                        @endswitch
                    </h5>
                    {!! $project->description !!}
                    <div class="mt-5 position-relative table-description">
                        <div class="row">
                            <div class="col-12 col-md-4 bor ms-lg-4">
                                <div class="position-absolute bg-left"></div>
                                <div class="pt-3 pb-1 pe-2 pe-md-0 d-flex justify-content-end">
                                    <img src="{{ asset('images/proyectos/icono_departamentos.jpg') }}" alt="Icono Proyectos" class="me-3" style="height: 34px">
                                    <div class="apartment-detail">
                                        {!! $project->aparments_detail !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-8 col-lg-7">
                                <div class="row">
                                    <div class="col-6 col-md-4 bot-xs">
                                        <div class="pt-3 pb-3 ps-2 ps-md-0 d-flex h-100 align-items-center">
                                            <strong class="fw-bold d-inline-block me-2">Tipología:</strong>
                                            <span>{{ $project->typologies }}</span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-4 borl bot-xs">
                                        <div class="pt-3 pb-3 d-flex">
                                            <i class="fas fa-bed fa-fw fa-2x me-2"></i>
                                            <span class="align-self-center" style="white-space: nowrap">{{ $project->rooms }} Dormitorios</span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 bot-xs">
                                        <div class="pt-3 pb-3 ps-2 ps-md-0 d-flex">
                                            <i class="fas fa-bath fa-fw fa-2x me-2"></i>
                                            <span class="align-self-center" style="white-space: nowrap">{{ $project->baths }} Baños</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col bot">
                                        <div class="pt-3 pb-3 ps-1 ps-md-0 d-flex">
                                            <i class="fas fa-map-marker-alt fa-fw fa-2x me-2"></i>
                                            <span class="align-self-center">{{ $project->address }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute bg-right"></div>
                    </div>
                </div>
                <div class="detail-project__gallery pb-5">
                    <div class="position-relative">
                        <div class="position-absolute d-flex align-items-center slider-arrow arrow-left">
                            <img src="{{ asset('images/proyectos/arrow_left.png') }}" alt="">
                        </div>
                        <div class="images" id="iSlider-wrapper">
                        </div>
                        <div class="position-absolute d-flex align-items-center slider-arrow arrow-right">
                            <img src="{{ asset('images/proyectos/arrow_right.png') }}" alt="">
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center benefits flex-wrap">
                        @foreach ($project->benefits as $benefit)
                            <div class="benefits-block mb-4 mb-md-0">
                                @if ($benefit->icon2 != null)
                                <span class="fa-stack">
                                    <i class="{{ $benefit->icon }} fa-stack-2x"></i>
                                    <i class="{{ $benefit->icon2 }} fa-stack-1x {{ $benefit->icon_rotate }}"
                                        @if (Str::lower($benefit->name) === 'ascensores' || Str::lower($benefit->name) === 'zona de lavado de mascotas')
                                            style='margin-top: 6px'
                                        @endif
                                        ></i>
                                </span>
                                @else
                                    <i class="{{ $benefit->icon }} fa-2x fa-fw"></i>
                                @endif
                                <span class="d-block mt-auto benefits-title">{{ $benefit->name }}</span>
                            </div>
                        @endforeach
                        {{-- <div class="benefits-block mb-4 mb-md-0">
                            <span class="fa-stack">
                                <i class="fas fa-calendar fa-stack-2x"></i>
                                <i class="fas fa-exchange-alt fa-stack-1x fa-inverse fa-rotate-90" style="margin-top: 5px;"></i>
                            </span>
                            <span class="d-block mt-auto benefits-title">Ascensores</span>
                        </div>
                        <div class="benefits-block mb-4 mb-md-0">
                            <img src="{{ asset('images/proyectos/icon_kids_games.png') }}" alt="">
                            <span class="d-block mt-auto benefits-title">Juegos infantiles</span>
                        </div>
                        <div class="benefits-block mb-4 mb-md-0">
                            <i class="fas fa-parking fa-2x fa-fw"></i>
                            <span class="d-block mt-auto benefits-title">Estacionamientos</span>
                        </div>
                        <div class="benefits-block mb-4 mb-md-0">
                            <i class="fas fa-swimming-pool fa-2x fa-fw"></i>
                            <span class="d-block mt-auto benefits-title">Piscinas</span>
                        </div>
                        <div class="benefits-block mb-4 mb-md-0">
                            <i class="fas fa-cocktail fa-2x fa-fw"></i>
                            <span class="d-block mt-auto benefits-title">Sum</span>
                        </div>
                        <div class="benefits-block mb-4 mb-md-0">
                            <img src="{{ asset('images/proyectos/icon_parrilla.png') }}" alt="">
                            <span class="d-block mt-auto benefits-title">Zona de parrilla</span>
                        </div> --}}
                    </div>
                </div>
                @if ($project->build_status !== 'ENTREGADO')
                    <div class="detail-project__apartment-plans pt-4 pb-4">
                        <div id="carouselExampleIndicators" class="carousel slide pb-4" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @php
                                    $totalFlats = 0;
                                @endphp
                                @foreach ($project->flats as $flat)
                                @php
                                    $totalFlats = $loop->count;
                                @endphp
                                    <div class="carousel-item {{ $loop->first ? 'active' : ''}}">
                                        <img src="{{ asset('images/proyectos/planos/' . $flat->picture) }}" class="d-block w-100" alt="{{ $flat->name }}">
                                        @if ($project->build_status === 'CONSTRUCCION')
                                            <div class="carousel-caption d-none d-md-block">
                                                <h6>TIPOLOGÍA</h6>
                                                <h4>{{ $flat->typology }}</h4>
                                                <div>
                                                    <span>área total</span>
                                                </div>
                                                <span class="meters">{{ number_format($flat->size_meters, 2)}} m<sup>2</sup></span>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <div class="carousel-indicators mt-4">
                                @if ($totalFlats > 1)
                                    @for ($i = 0; $i < $totalFlats; $i++)
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}" class="rounded-circle {{ $i == 0 ? 'active' : ''}}" aria-current="true" aria-label="Slide {{ $i+1 }}"></button>
                                    @endfor
                                @endif
                            </div>
                        </div>
                    </div>
                @endif
                {{-- EN CONSTRUCCION --}}
                @switch($project->build_status)
                    @case('CONSTRUCCION')
                        <div class="detail-project__sponsor pt-5 pb-5">
                            <div class="row">
                                <div class="col-12 col-md-4 d-flex flex-row flex-md-column flex-lg-row justify-content-around financing">
                                    <div class="me-lg-1 text-center">
                                        <h6 class="text-center">FINANCIA</h6>
                                        <img src="{{ asset('images/proyectos/' . $project->financing) }}" alt="{{ $project->financing }}" class="img-fluid">
                                    </div>
                                    <div class="mt-0 mt-md-4 mt-lg-0 text-center">
                                        <h6 class="text-center">OPORTUNIDAD</h6>
                                        <img src="{{ asset('images/proyectos/airbnb.jpg') }}" alt="Airbnb">
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 d-flex align-items-center justify-content-center mt-5 mb-5 mt-md-0 mb-md-0">
                                    <img src="{{ asset('images/proyectos/vive_centrico.png') }}" alt="Vive centrico" class="img-fluid">
                                </div>
                                <div class="col-12 col-md-4 d-flex flex-column justify-content-around justify-content-lg-around pt-4 ps-4">
                                    {{-- <button type="button" class="btn btn-sm alferza-btn type-2">Ver avanze de obra</button> --}}
                                    <a href="{{ asset('images/proyectos/brochures/' . $project->brochure) }}" target="_blank" class="btn btn-sm alferza-btn type-2 mt-4 mb-4 mt-md-0 mb-md-0">Descargar brochure</a>
                                    <a href="{{ route('contacto') }}" class="btn btn-sm alferza-btn type-2">Pedir cotización</a>
                                </div>
                            </div>
                        </div>
                    @break
                    @case('PREVENTA')
                    @case('LANZAMIENTO')
                        <div class="detail-project__sponsor pt-5 pb-5">
                            <div class="row">
                                <div class="col-md-4 d-flex flex-column justify-content-center order-md-1 mt-3 mb-3 mb-md-0 mt-md-0">
                                    @if ($project->brochure)
                                        <a href="{{ asset('images/proyectos/brochures/' . $project->brochure) }}" target="_blank" class="btn btn-sm alferza-btn type-1">Descargar brochure</a>
                                    @endif
                                </div>
                                <div class="col-md-4 d-flex align-items-center justify-content-center order-first order-md-2">
                                    <img src="{{ asset('images/proyectos/ubicacion_que_mereces.png') }}" alt="Vive centrico" class="img-fluid" style="height: 56px">
                                </div>
                                <div class="col-md-4 d-flex flex-column justify-content-center order-md-3">
                                    <a href="{{ route('contacto') }}" class="btn btn-sm alferza-btn type-1">Pedir cotización</a>
                                </div>
                            </div>
                        </div>
                    @break
                    @case('ENTREGADO')
                        <div class="detail-project__sponsor pt-5 pb-5">
                            <div class="row">
                                <div class="col-md-4 d-flex flex-column justify-content-center order-md-1 mt-3 mb-3 mb-md-0 mt-md-0">
                                    <a href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}" target="_blank" class="btn btn-sm alferza-btn">Hablar con un asesor</a>
                                </div>
                                <div class="col-md-4 d-flex align-items-center justify-content-center order-first order-md-2">
                                    <img src="{{ asset('images/proyectos/logo_alferza_02.png') }}" alt="Vive centrico" class="img-fluid">
                                </div>
                                <div class="col-md-4 d-flex flex-column justify-content-center order-md-3">
                                    <a href="{{ route('projects') }}" class="btn btn-sm alferza-btn">Ver nuevos proyectos</a>
                                </div>
                            </div>
                        </div>
                    @break
                @endswitch
            </div>
        </div>
    </div>
    <div class="maps ratio">
        {!! $project->google_map !!}
    </div>
</div>
<script src="{{ asset('js/iSlider.min.js') }}"></script>
<script src="{{ asset('js/iSlider.animate.min.js') }}"></script>
<script>
    var data = [
        @foreach ($project->pictures as $picture)
            {content: "{{ asset('images/proyectos/galeria/' . $picture->picture) }}"},
        @endforeach
    ];
    var S = new iSlider(document.getElementById('iSlider-wrapper'), data, {
        isLooping: 1,
        isOverspread: 1,
        isAutoplay: 1,
        // fillSeam: 1,
        animateTime: 1000,
        animateType: 'flow'
    });

    document.querySelector('.slider-arrow.arrow-left').addEventListener('click', function() {
        S.slidePrev();
    });
    document.querySelector('.slider-arrow.arrow-right').addEventListener('click', function() {
        S.slideNext();
    });
    // S.slidePrev();
    // S.slideNext();
</script>
@endsection
