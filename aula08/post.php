<form action="" method="POST" >
    <input type="text" name="nome" placeholder="Digite aqui">

    <button>Enviar</button>
</form>

<?php

if ($_POST) {
    echo $_POST['nome'];
}
?>