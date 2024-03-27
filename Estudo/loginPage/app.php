<?php 
    $user = $_GET["input-user"];
    $password = $_GET["input-password"];

    if ($user == "Rodolfo" && $password == "1234") {
        setcookie("biscoito", "loginFeito", time() + 120);
        header("Location: ./areaRestrita.php");
    } else {
        header("Location: ./index.php");
    }
?>