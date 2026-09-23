<?php
//session_star();

require_once "conexao.php";


function loguin($conexao, $email, $senha){
    $sql = "SELECT * FROM usuario where email = '$email' and senha = '$senha'";

    $execute = mysqli_query ($conexao, $sql);

    return $execute;

    exit;
}  

?>