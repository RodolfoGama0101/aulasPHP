<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php setcookie("cor", "AA0022", time() + (3600*24*30*12*5)) ?>
    <title>Cookieeee....</title>

    <style>
        body {
            background-color: <?php echo $_COOKIE["cor"]; ?>;
        }
    </style>
</head>
<body>
    <?php 
        if (!isset($_COOKIE["nome"])) {
            echo "O cookie não existe";
        } else {
            echo "Olá " . $_COOKIE["nome"] . "!";
        }

        echo "<br>";

        $tempoMaximo = time() + 60;

        if (isset($_COOKIE["qtd-visitas"])) {
            echo "Você visitou essa página " . $_COOKIE["qtd-visitas"] . " vez(es).";
            setcookie("qtd-visitas", $_COOKIE["qtd-visitas"] + 1, $tempoMaximo);
        } else {
            echo "Esse é o seu primeiro acesso a esta página!";
            setcookie("qtd-visitas", 1, $tempoMaximo);
        }
    ?>    
</body>
</html>



