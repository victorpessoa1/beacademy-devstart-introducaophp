<?php

$frutas = [
    'Laranja',
    'Banana',
    'Abacaxi'
];

//Adicionando novas frutas no array
$frutas[] = 'Maça';

$frutas[10] = 'Melancia';

$frutas[] = 'Bergamota';

?>
<!-- Fazendo com estrutura de repetição -->
<ul>
    <?php
        for ($i=0; $i < 12; $i++) { 
            if (isset($frutas[$i])){
                echo "<li>$frutas[$i]</li>";
            }
        }
    ?>
</ul>