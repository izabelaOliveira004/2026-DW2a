<?php
require_once "conexao.php";
$texto = $_POST['texto'];
$data_hora= $_POST['data_hora'];
$idusuario = $_POST['idusuario'];

$sql = "INSERT INTO postagem (texto, data_hora, idusuario) 
VALUES ('$texto', '$data_hora', '$idusuario')";

mysqli_query ($conexao, $sql);

header("location: loguin.php");
?>