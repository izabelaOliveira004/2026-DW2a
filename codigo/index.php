<?php
require_once "conexao.php";

session_start();
$_SESSION['i']
    if ($ =! 0){
            header("location: home.php");
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

    <a href="cadastro_usuario.php">Cadastrar usuário</a> <br>

    <a href="loguin.php">Loguin</a> <br>

</body>
</html>