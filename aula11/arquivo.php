<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, 'José' . PHP_EOL);
fwrite($arquivo, 'Aline' . PHP_EOL);
fwrite($arquivo, 'Caio' . PHP_EOL);

fclose($arquivo);