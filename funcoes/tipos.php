<?php

declare(strict_types=1);

function welcome(string $nome): string
{
    return "Bem vindo {$nome}";
}

function soma(float $n1, float $n2)
{
    return $n1 + $n2;
}  

echo soma(10.4, 20);

echo PHP_EOL . '-------------' . PHP_EOL;

echo soma(80, 90);
echo soma("José", "Pessoa");
