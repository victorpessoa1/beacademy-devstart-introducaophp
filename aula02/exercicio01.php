<!-- fazer uma calculadora em php -->
<form action="" method="post">
    <input type="number" name="num1" placeholder="Primeiro numero"><br>

    <input type="number" name="num2" placeholder="Segundo numero"><br>

    <button name="soma">Somar</button> <br>
    <button name="subtracao">Subtrair</button> <br>
    <button name="multiplicacao">Multiplicar</button> <br>
    <button name="divisao">Dividir</button> <br>
</form> 

<?php
    if ($_POST) {

        if(isset($_POST['soma'])) {
            echo "A soma de " .$_POST['num1'], " e " .$_POST['num2'], " é igual à " .$_POST['num1'] + $_POST['num2'], "<br>"; 
        }
        if(isset($_POST['subtracao'])) {
            echo "A subtracao de " .$_POST['num1'], " por " .$_POST['num2'], " é igual à " .$_POST['num1'] - $_POST['num2'], "<br>"; 
        }
        if(isset($_POST['multiplicacao'])) {
            echo "A multiplicação de " .$_POST['num1'], " e " .$_POST['num2'], " é igual à " .$_POST['num1'] * $_POST['num2'], "<br>"; 
        }
        if(isset($_POST['divisao'])) {
            echo "A divisão de " .$_POST['num1'], " por " .$_POST['num2'], " é igual à " .$_POST['num1'] / $_POST['num2'], "<br>"; 
        }
    }

?>