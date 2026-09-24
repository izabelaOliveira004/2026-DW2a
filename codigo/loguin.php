<?php 
    session_start();
    require_once "conexao.php";
    require_once "funcao.php";

    if(isset($_POST['enviar'])){

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $resultado = loguin($conexao, $email, $senha);

        if ($resultado =! 0){

            header("location: home.php");
        }

        else{
            echo "Erro usuario não encontrado";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">

    Email: <br>
    <input type="text" name = "email"> <br><br>
    Senha: <br>
    <input type="text" name = "senha"> <br><br>

    <input type="submit" value= "enviar">

    </form>
</body>
</html>