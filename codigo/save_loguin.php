<?php
require_once "conexao.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario where email = '$email' and senha = '$senha'";

    $execute = mysqli_query ($conexao, $sql);

    header("location: home.php");


?>