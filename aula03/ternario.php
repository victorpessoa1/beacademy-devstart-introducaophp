<?php

$idade = 17;

echo $idade >= 18 ? " De maior" : " De menor";

echo "<br>";

/*echo isset($nome) ? $nome : "Nome não definido"; ou */ echo $nome ?? "Nome não definido";