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
