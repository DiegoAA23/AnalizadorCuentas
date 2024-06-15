<?php

function extraerCuentas(string $textocompleto)
{
    $lineas = preg_split('/\D+|\b\d{1,12}\b|\b\d{14,}\b/', $textocompleto);
    $cuentas = [];

    foreach ($lineas as $linea) {
        if ($linea != "" && strlen($linea) == 13) {
            $cuentas[] = $linea;
        }
    }

    return $cuentas;
}
