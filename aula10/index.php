<?php

$notasCursoA = [
    10,
    9,
    9.5,
    7
];

$notasCursoB = [
    8,
    7.4,
    5,
    6,
];

function mediaDeNotas(array $notas) : float
{
    // $total = 0;
    // $quantidade = 0;

    // foreach ($notas as $cadaNota) {
    //     $total += $cadaNota;
    //     $quantidade ++;
    // }
        
    return array_sum($notas) / count($notas);
}

echo mediaDeNotas($notasCursoA).PHP_EOL;
echo mediaDeNotas($notasCursoB).PHP_EOL;