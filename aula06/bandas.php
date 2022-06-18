<?php

$bandas = [
    'Dream Theater',
    'Neo Pi Neo',
    'Exaltasamba',
    'Iron Mainden'
];

$bandas[100] = 'Nirvana';

echo '<ul>';
foreach ($bandas as $banda) {
    echo "<li>{$banda}</li>";
}

    // for ($i=0; $i <= 2 ; $i++) { 
    //     echo '<li>' . $bandas[$i] . '</li>';
    // }
echo '</ul>';