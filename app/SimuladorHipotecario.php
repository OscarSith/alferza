<?php

namespace App;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SimuladorHipotecario implements FromView {

    private $valor;
    private $cuotaInicial;
    private $tcea;
    private $anios;

    public function __construct($valor, $cuotaInicial, $tcea, $anios)
    {
        $this->valor = $valor;
        $this->cuotaInicial = $cuotaInicial;
        $this->tcea = $tcea;
        $this->anios = $anios;
    }

    public function view(): View
    {
        $deuda = $this->valor - $this->cuotaInicial;

        // Calculos
        $interes = ($this->tcea / 100) / 12;
        $m = ($deuda * $interes * pow(1 + $interes, $this->anios * 12)) / (pow(1 + $interes, $this->anios * 12) - 1);


        return view('partials.table_calculator', [
            'anos' => $this->anios,
            'm' => $m,
            'deuda' => $deuda,
            'interes' => $interes
        ]);
    }
}
