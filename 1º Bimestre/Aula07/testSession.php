<?php 
    session_start();
    
    echo "Olá " . $_SESSION["nome"] . ", seja bem-vindo! <br>";
    echo "Você mora em " . $_SESSION["cidade"] . ". <br>";
    echo "E você tem " . $_SESSION["idade"] . " anos. <br>";

    echo "<hr>";

    # unset($_SESSION["nome"]);
    session_unset();

    session_destroy();

    echo "Sessões destruidas!";
?>