<?php
require_once "conexao.php";
$idusuario = $_POST['idusuario'];
$idpostagem= $_POST['idpostagem'];
$texto = $_POST['texto'];

$sql = "INSERT INTO postagem (idusuario, idpostagem, texto) 
VALUES ('$idusuario', '$idpostagem', '$texto')";

mysqli_query ($conexao, $sql);

header("location: loguin.php");
?>