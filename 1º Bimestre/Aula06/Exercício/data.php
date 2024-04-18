<?php 
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $nomeLogin = "Rodolfo";
    $senhaLogin = "RodolfoLegal";

    $tempoCookie = 3600;

    setcookie("cookieNome", $nome, time() + $tempoCookie);
    setcookie("cookieSenha", $senha, time() + $tempoCookie);

    if ($nome == $nomeLogin && $senha == $senhaLogin) {
        header("Location: ./boasVindas.html");
    } else {
        echo "Senha ou Login incorretos!";
    }

    $botao = $_POST["logout"];

?>