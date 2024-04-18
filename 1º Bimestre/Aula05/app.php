<?php 
    $nomes = [
        "Rodolfo",
        "Luiz",
        "Nicolas",
        "Paulo",
        "Arthur", 
        "Kauã",
        "Lívia",
        "Leonardo",
        "Davi",
        "Miguel"
    ];

    $pesquisa = $_POST["pesquisar"];

    if(in_array($pesquisa, $nomes)) {
        echo "Nome encontrado";
    } else {
        echo "Nome não encontrado";
    }
?>