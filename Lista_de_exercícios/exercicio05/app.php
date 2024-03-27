<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da votação</title>
</head>

<body>
    <?php
    setcookie("cookieVotado", "votado", time() + (60));

    $escolhaVotacao = $_GET["radio-input"];

    if ($escolhaVotacao == null) {
        echo "Você precisa escolher uma das opções!";
    }

    if (isset($_COOKIE["cookieVotado"])) {
        header("Location: votado.php");
        echo "Você já votou!";
    }

    // Coloquei as variáveis como 0 apenas para não aparecer o erro de variável indefinida
    // O certo seria utilizar um banco de dados para armazenar os resultados
    $cocaCola = 0;
    $sprite = 0;
    $fanta = 0;
    $pepsi = 0;
    $cafe = 0;

    switch ($escolhaVotacao) {
        case "coca-cola":
            $cocaCola += 1;
            break;
        case "sprite":
            $sprite += 1;
            break;
        case "fanta":
            $fanta += 1;
            break;
        case "pepsi":
            $pepsi += 1;
            break;
        case "cafe":
            $cafe += 1;
            break;
    }
    
    function voltarIndex() {
        return header("Location: /index.php");
    }

    ?>

    <h3>Resultados atuais: </h3>
    Coca-cola:
    <?php echo $cocaCola; ?> <br>
    Sprite:
    <?php echo $sprite; ?> <br>
    Fanta:
    <?php echo $fanta; ?> <br>
    Pepsi:
    <?php echo $pepsi; ?> <br>
    Café:
    <?php echo $cafe; ?> <br>

    <button type="button" onclick="location.href='index.php'">Voltar</button>
</body>

</html>