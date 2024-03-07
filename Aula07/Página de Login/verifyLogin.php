<?php 
    $usuario = $_POST["user"];
    $senha = $_POST["password"];

    if ($usuario == "Rodolfo" && $senha == "0101") {
        session_start();
        $_SESSION["user"] = $usuario;
        $_SESSION["autenticado"] = true;
        header("Location: site.php");
    } else {
        header("Location: index.php");
    }
?>