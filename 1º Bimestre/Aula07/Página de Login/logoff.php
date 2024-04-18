<?php 
    session_start();

    if (isset($_SESSION["autenticado"]) && isset($_SESSION["user"])) {
        session_unset();    
    }  

    header("Location: index.php");

?>