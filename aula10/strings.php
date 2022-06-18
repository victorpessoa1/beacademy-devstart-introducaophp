<?PHP

$nome = 'josé'; //José
$sobrenome = 'PESSOA';  //Pessoa

$nome2 = 'aline silva de freitas';


echo "Nome: " . ucfirst($nome) . PHP_EOL;
echo "Sobrenome: " . ucfirst(strtolower($sobrenome)) . PHP_EOL;

echo "Nome2: " . ucwords($nome2);