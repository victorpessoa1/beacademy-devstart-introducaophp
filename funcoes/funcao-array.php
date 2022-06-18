<?php

function mostrarNomes(array $nomes): void {
    foreach($nomes as $nome){
        echo "Nome: " . $nome.PHP_EOL;
    }
}

mostrarNomes(['José', 'Aline', 'Caio', 'Vanessa']);

