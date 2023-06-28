<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>
    </title>
</head>

<body>
    <h1>Editar Usuario</h1>
    <?php 
        $sql = "SELECT * FROM users WHERE id =" . $_REQUEST["id"];
        $res = $connection->query($sql);
        $row = $res->fetch_object();
    ?>
    <form action="?page=salvar" method="post">

        <input type="hidden" name="user_action" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id ?>">

        <div class="mb-3">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" value="<?php print $row->name?>" >
        </div>

        <div class="mb-3">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" value="<?php print $row->email?>">
        </div>

        <div class="mb-3">
            <label for="pass">Senha</label>
            <input type="password" name="pass" class="form-control" required
        </div>

        <div class="mb-3">
            <label for="date">Data de nascimento</label>
            <input type="date" name="date_birth" class="form-control" value="<?php print $row->date_birth?>" require>
        </div>

        <div class="mb-3">
            <input type="submit" value="Enviar" class="btn btn-primary">

        </div>    
    </form>
</body>

</html>