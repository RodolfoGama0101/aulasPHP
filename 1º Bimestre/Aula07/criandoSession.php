<?php 
    session_start();
    $_SESSION["nome"] = "Rodolfo";
    $_SESSION["cidade"] = "Jacareí";
    $_SESSION["idade"] = 17;

    echo "Sessão Criada";
?>