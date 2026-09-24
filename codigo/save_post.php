<?php
session_start();

require_once "conexao.php";

$idusuario = $_SESSION['idusuario'];
$texto = $_POST['texto'];


$sql = "INSERT INTO postagem (idusuario, texto) 
VALUES ('$idusuario', '$texto')";

mysqli_query ($conexao, $sql);

header("location: listar_postagem.php");
?>