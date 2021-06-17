@extends('layouts.masterpage')

@section('title', 'Calculadora hipotecaria')

@section('body')
<div class="container-md calculator pt-5">
    <h2 class="text-center fw-bold mb-4">Calcula tu crédito <span>hipotecario</span></h2>
    <div class="col-xl-7 mx-auto">
        <div class="accordion pb-5" id="accordionForm">
            <div class="accordion-item">
                <div class="accordion-collapse collapse {{ $m == 0 ? 'show' : ''}}" id="collapseForm">
                    <div class="accordion-body">
                        <form action="{{ route('calculatorPost') }}" method="POST">
                            {{ csrf_field() }}
                            @method('post')
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label for="valor" class="form-label">Valor inmueble</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="moneda">S/.</span>
                                        <input type="text" id="valor" name="valor" class="form-control" aria-label="valor inmueble" aria-describedby="moneda">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="cuota_inicial" class="form-label">Cuota inicial</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="moneda2">S/.</span>
                                        <input type="text" id="cuota_inicial" name="cuota_inicial" class="form-control" aria-label="valor inmueble" aria-describedby="moneda2">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="tcea" class="form-label">Tasa efectiva anual</label>
                                    <div class="input-group mb-3">
                                        <input type="text" id="tcea" name="tcea" class="form-control" aria-label="valor inmueble" aria-describedby="moneda">
                                        <span class="input-group-text" id="moneda">%</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="plazo" class="form-label">Plazo (años)</label>
                                    <select class="form-select" name="plazo" id="plazo">
                                        <option value="" selected>Escoger</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-xl-8">
                                    <small class="calculator-short-info">El calculo de este crédito hipotecario es referencial y sujeto a condiciones de la entidad bancaria del cliente</small>
                                </div>
                                <div class="col-xl-4 text-center">
                                    <button type="submit" class="btn btn-dark btn-lg ps-5 pe-5 float-xl-end">CALCULAR</button>
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
        @php
            $totalint = 0;
        @endphp
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
            <div class="col-12 col-xl mb-4 mb-xl-0 d-flex align-items-center justify-content-center order-first order-xl-last">
                <button class="btn btn-secondary alferza-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseForm" aria-expanded="true" aria-controls="collapseForm">
                    Hacer otro calculo
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover text-center">
                <thead class="table-dark align-middle">
                    <tr>
                        <th class="p-3" scope="col">Nro Cuota</th>
                        <th class="p-3" scope="col">Saldo</th>
                        <th class="p-3" scope="col">Amortización</th>
                        <th class="p-3" scope="col">Interés</th>
                        <th class="p-3" scope="col">Cuota</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < ($anos * 12); $i++)
                    @php
                        // $totalint = $totalint + ($deuda * $interes);
                        $nuevoInteres = $deuda * $interes;
                        $amortizacion = $m - $nuevoInteres;
                        $deuda = $deuda - $amortizacion;
                    @endphp
                        <tr>
                            <td class="p-3" scope="row">{{ $i + 1 }}</td>
                            <td class="p-3">S/ {{ number_format($deuda, 2) }}</td>
                            <td class="p-3">S/ {{ number_format($amortizacion, 2) }}</td>
                            <td class="p-3">S/ {{ number_format($nuevoInteres, 2) }}</td>
                            <td class="p-3">S/ {{ number_format($amortizacion + $nuevoInteres, 2) }}</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>
@endsection
