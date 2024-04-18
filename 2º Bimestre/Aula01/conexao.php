<?php 
header("Content-Type: text/html; charset-utf-8");

// Conexão com o Bando de Dados
$banco = "banco3ano";
$usuario = "root";
$senha = "";
$hostname = "127.0.0.1"; // Pode colocar "localhost"

$conexao = mysqli_connect($hostname, $usuario, $senha) or die(mysqli_error());
$banco2 = mysqli_select_db($conexao, $banco) or die("ERRO! Não foi possível conectar ao banco MySQL");

?> 