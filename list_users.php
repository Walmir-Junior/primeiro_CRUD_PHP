<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>

<body>
    <h1>Lista de Usuarios</h1>

    <?php 
        $sql = "SELECT * FROM users";
        $res = $connection->query($sql);
        $qtd = $res->num_rows;


        if($qtd > 0) {
            print "<table class='table table-hover table-striped table-bordered'>";
            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>Email</th>";
            print "<th>Data de nascimento</th>";
            print "<th>Ações</th>";
            while ($row = $res->fetch_object()) {
                print "<tr>";
                print "<td>".$row->id ."</td>";
                print "<td>".$row->name ."</td>";
                print "<td>".$row->email ."</td>";
                print "<td>".$row->date_birth ."</td>";
                print "<td>
                <button onclick=\"location.href='?page=editar&id=" . $row->id ." '; \" class='btn btn-success'>Editar</button>

                <button onclick=\"if(confirm('tem certeza que deseja excluir este item?')){location.href='?page=salvar&user_action=excluir&id=" . $row->id ." ';}else{false} \" class='btn btn-danger'>Excluir</button>
                </td>";
                print "</tr>";
            }
            print "</table>";


        } else {
            print "<p class='alert alert-danger'>Não encontrou resultados</p>";
        }
    ?>

</body>

</html>