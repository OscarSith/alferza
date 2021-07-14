@extends('layouts.masterpage')

@section('title', 'Calculadora hipotecaria')

@section('body')
<div class="container-md calculator pt-5">
    <h1 class="text-center main-title mb-4">CALCULA TU CRÉDITO <span>HIPOTECARIO</span></h1>
    <div class="col-xl-7 mx-auto">
        <div class="accordion pb-5" id="accordionForm">
            <div class="accordion-item">
                <div class="accordion-collapse collapse {{ $m == 0 ? 'show' : ''}}" id="collapseForm">
                    <div class="accordion-body">
                        <form action="{{ route('calculatorPost') }}" class="alferza-form" method="POST" id="form-calculator" novalidate>
                            {{ csrf_field() }}
                            @method('post')
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="nombre" class="form-label label">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control" aria-label="nombre" aria-describedby="nombre" required>
                                    <div class="invalid-feedback">
                                        Este campo es requerido
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="apellido" class="form-label label">Apellido</label>
                                    <input type="text" id="apellido" name="apellido" class="form-control" aria-label="apellido" aria-describedby="apellido" required>
                                    <div class="invalid-feedback">
                                        Este campo es requerido
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="numero" class="form-label label">Numero</label>
                                    <input type="text" id="numero" name="numero" class="form-control" aria-label="numero" aria-describedby="numero" maxlength="9" required>
                                    <div class="invalid-feedback">
                                        Este campo es requerido
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="correo" class="form-label label">Correo</label>
                                    <input type="email" id="correo" name="correo" class="form-control" aria-label="correo" aria-describedby="correo" required>
                                    <div class="invalid-feedback">
                                        Este campo es requerido
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="dni" class="form-label label">DNI</label>
                                    <input type="text" id="dni" name="dni" class="form-control" maxlength="8" aria-label="dni" aria-describedby="dni" required>
                                    <div class="invalid-feedback">
                                        Este campo es requerido
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="fecha_nacimiento" class="form-label label">Fecha Nacimiento</label>
                                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" aria-label="fecha_nacimiento" aria-describedby="fecha_nacimiento" required>
                                    <div class="invalid-feedback">
                                        Este campo es requerido
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="valor" class="form-label label">Valor inmueble</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="moneda">S/.</span>
                                        <input type="text" id="valor" name="valor" class="form-control" aria-label="valor inmueble" aria-describedby="moneda" required>
                                        <div class="invalid-feedback">
                                            Este campo es requerido
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="cuota_inicial" class="form-label label">Cuota inicial</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="moneda2">S/.</span>
                                        <input type="text" id="cuota_inicial" name="cuota_inicial" class="form-control" aria-label="valor inmueble" aria-describedby="moneda2" required>
                                        <div class="invalid-feedback">
                                            Este campo es requerido
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="tcea" class="form-label label">Tasa efectiva anual</label>
                                    <div class="input-group mb-3">
                                        <input type="text" id="tcea" name="tcea" class="form-control" aria-label="valor inmueble" aria-describedby="moneda" required>
                                        <span class="input-group-text" id="moneda">%</span>
                                        <div class="invalid-feedback">
                                            Este campo es requerido
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="plazo" class="form-label label">Plazo (años)</label>
                                    <select class="form-select" name="plazo" id="plazo" required>
                                        <option value="" selected>Escoger</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Este campo es requerido
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="autorizar" required>
                                        <label class="form-check-label" for="autorizar">
                                            <small>
                                                Autorizo a Alferza Desarrolladora inmobiliaria para que realice las actividades de prospección comercial y marketing descritas en la Política de Privacidad <strong>(*)</strong>
                                            </small>
                                        </label>
                                        <div class="invalid-feedback">
                                            <i class="fas fa-ban fa-fw"></i> Tiene que autorizar nuestras policitas de privacidad
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-xl-8 lh-1">
                                    <small class="calculator-short-info">El calculo de este crédito hipotecario es referencial y sujeto a condiciones de la entidad bancaria del cliente</small>
                                </div>
                                <div class="col-xl-4 text-center">
                                    <button type="submit" class="btn btn-secondary alferza-btn float-xl-end">CALCULAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        @if ($m > 0)
        <div class="row calculator-caption mt-5 mb-4">
            <div class="col-6 col-xl mb-4 mb-xl-0 text-center">
                <h5 class="mb-1">VALOR DEL INMUEBLE</h5>
                <strong class="h3 fw-bold">S/ {{ number_format($valor, 2) }}</strong>
            </div>
            <div class="col-6 col-xl mb-4 mb-xl-0 text-center">
                <h5 class="mb-1">CUOTA INICIAL</h5>
                <strong class="h3 fw-bold">S/ {{ number_format($cuotaInicial, 2) }}</strong>
            </div>
            <div class="col-6 col-xl text-center">
                <h5 class="mb-1">TEA</h5>
                <strong class="h3 fw-bold">{{ number_format($tcea, 2) }}%</strong>
            </div>
            <div class="col-6 col-xl text-center">
                <h5 class="mb-1">PLAZO (AÑOS)</h5>
                <strong class="h3 fw-bold">{{ $anos }}</strong>
            </div>
            <div class="col-12 col-xl mb-4 mb-xl-0 d-flex align-items-center justify-content-center flex-column order-first order-xl-last">
                <button class="btn btn-secondary btn-sm alferza-btn mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseForm" aria-expanded="true" aria-controls="collapseForm">
                    <i class="fas fa-reply"></i> Hacer otro calculo
                </button>
                <a href="#" class="btn btn-primary alferza-btn btn-sm"><i class="fas fa-download"></i> Descargar</a>
                {{-- {{ route('exportarExcel') }}?valor={{$valor}}&cuota_inicial={{$cuotaInicial}}&tcea={{$tcea}}&plazo={{$anos}} --}}
            </div>
        </div>
        <div class="table-responsive">
            @include('partials.table_calculator', [
                'anos' => $anos,
                'm' => $m,
                'deuda' => $deuda,
                'interes' => $interes
            ])
        </div>
        @endif
    </div>
</div>
<script>
    (function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('#form-calculator')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>
@endsection
