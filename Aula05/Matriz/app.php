<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>
    <?php 
        $matriz[0][0] = "Descrição⠀⠀⠀";
        $matriz[0][1] = "Estoque⠀⠀⠀⠀";
        $matriz[0][2] = "Valor";

        $matriz[1][0] = "Ferrari⠀⠀⠀⠀⠀⠀";
        $matriz[1][1] = "17 ⠀⠀⠀⠀⠀⠀";
        $matriz[1][2] = "149.00";

        $matriz[2][0] = "212 Men⠀⠀⠀⠀⠀";
        $matriz[2][1] = "23⠀⠀⠀⠀⠀⠀";
        $matriz[2][2] = "259.00";

        $matriz[3][0] = "Polo⠀⠀⠀⠀⠀⠀⠀⠀";
        $matriz[3][1] = "1⠀⠀⠀⠀⠀⠀";
        $matriz[3][2] = "128.75";

        for($linha = 0; $linha < sizeof($matriz); $linha++) {
            for ($coluna=0; $coluna < count($matriz[$linha]); $coluna++) {
                echo $matriz[$linha][$coluna]." ";
            }
            echo "<br>";
        }

        echo "<br>------------ // --------------";
        echo "<br>";

        $nota = $_POST["nota"];

        if ($nota == 0) {
            echo "Nota: ". $nota. " ";
            echo "😭";
        } else { 
            echo "Nota: ". $nota;
            for($i=0; $i < $nota; $i++) {
                echo "⭐";
            }
        }

    ?>
</body>
</html>