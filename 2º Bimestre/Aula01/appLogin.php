<?php 
include "conexao.php";

$user = $_GET["user"];
$pass = $_GET["pass"];

// echo $user . " - " . "$pass";

$query = "SELECT * FROM login WHERE user = '$user' AND password = '$pass'";

// echo " ";
// echo $query;

$result = mysqli_query($conexao, $query);

$existe = mysqli_num_rows($result);

// echo " ";
// echo $existe;

if ($existe == 1) {
    echo "<h1>Carregando...</h1>";
    session_start();
    $_SESSION["user2"] = $user;
    print("<script> document.location='main.php' </script>");
} else {
    echo("<script> document.location='index.html' </script>");
}

?>