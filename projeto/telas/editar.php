<h1>Editar Contato</h1>
<hr>

<form action="" method="POST">
    <input type="text" class="form-control mt-2" placeholder="Nome" name="nome" value="<?php echo $dados[0]; ?> ">

    <input type="text" class="form-control mt-2" placeholder="Email" name="email" value="<?php echo $dados[1]; ?> ">

    <input type="text" class="form-control mt-2" placeholder="telefone" name="telefone" value="<?php echo $dados[2]; ?> ">

    <button class="brn btn-primary mt-3">Enviar</button>
</form>