<?php

session_start();

require_once "conexao.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario where email = '$email' and senha = '$senha'";

    $execute = mysqli_query ($conexao, $sql);


    if (mysqli_num_rows($execute) > 0) {

        $usuario = mysqli_fetch_assoc($execute);

        $_SESSION['idusuario'] = $usuario['idusuario'];
        $_SESSION['email'] = $usuario['email'];

        header("Location: home.php");
        exit;

}
    header("location: home.php");


?>