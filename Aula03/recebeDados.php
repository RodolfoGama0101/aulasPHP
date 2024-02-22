<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>
<body>
    <?php 
        // echo "Olá " . $_GET["nome"] . " " . $_GET["sobrenome"] . "!"; // Método GET
        // echo "Seja bem-vindo " . $_POST["nome"] . " " . $_POST["sobrenome"] . "!"; // Método POST

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $sexo = $_POST["sexo"];
        $carnaval = $_POST["carnaval"];
        $cidade = $_POST["cidade"];

        if ($sexo == "M") {
            $sexo = "Masculino";
        }

        if ($sexo == "F") {
            $sexo = "Feminino";
        }

        echo "Hello $nome $sobrenome ! <br>";
        echo "Sexo: $sexo <br>" ;
        echo "$nome é de $cidade! ";

        echo "<h4>Nos dias de carnaval eu vou: </h4>";
        foreach ($carnaval as $carna2) {
            echo "$carna2 <br>";
        }

        
    ?>
</body>
</html>