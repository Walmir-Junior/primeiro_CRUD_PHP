<?php  
     switch ($_REQUEST["user_action"]) {

        case 'cadastrar':
            $name = $_POST["name"];
            $email = $_POST["email"];
            $pass = md5($_POST["pass"]);
            $date_birth = $_POST["date_birth"];

            $sql = "INSERT INTO users (name, email, password, date_birth) VALUES ('{$name}','{$email}','{$pass}','{$date_birth}')";

            $res = $connection->query($sql);

            if($res){
                print "<script>alert('Cadastrado com sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            }else{
                print "<script>alert('Não foi possivel cadastrar')</script>";
                print "<script>location.href='?page=novo'</script>";
            }

            break;

        case 'editar':
            $name = $_POST["name"];
            $email = $_POST["email"];
            $pass = md5($_POST["pass"]);
            $date_birth = $_POST["date_birth"];

            $sql = "UPDATE users SET name='{$name}',name='{$name}',email='{$email}',password='{$pass}',date_birth='{$date_birth}' WHERE id=". $_REQUEST["id"];

            $res = $connection->query($sql);

            if($res){
                print "<script>alert('Editado com sucesso com sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            }else{
                print "<script>alert('Não foi possivel editar')</script>";
                print "<script>location.href='?page=novo'</script>";
            }
            break;

        case 'excluir':
            
            $sql = "DELETE FROM users WHERE id=" . $_REQUEST["id"];
            $res = $connection->query($sql);

            if($res){
                print "<script>alert('Excluido com sucesso com sucesso')</script>";
                print "<script>location.href='?page=listar'</script>";
            }else{
                print "<script>alert('Não foi possivel excluir')</script>";
                print "<script>location.href='?page=novo'</script>";
            }

            break;
        
    }

?>