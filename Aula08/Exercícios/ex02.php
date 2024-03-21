<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>

    <style>
        td {
            border: 3px solid black;
            width: 20px;
            height: 20px;
        }

        .par {
            background-color: white;
        }

        .impar {
            background-color: black;
        }
    </style>
</head>

<body>
    <?php


    echo "<table>";
    for ($linha = 1; $linha <= 8; $linha++) {
        echo "<tr>";

        $calcLinha = $linha % 2;

        switch ($calcLinha) {
            case 1:
                for ($coluna = 1; $coluna <= 8; $coluna++) {
                    $calcColuna = $coluna % 2;
        
                    if ($calcColuna == 1) {
                        echo "<td class='par'></td>";
                    } else if ($calcColuna == 0) {
                        echo "<td class='impar'></td>";
                    }
                }
            case 0: 
                for ($coluna = 1; $coluna <= 8; $coluna++) {
                    $calcColuna = $coluna % 2;
        
                    if ($calcColuna == 0) {
                        echo "<td class='par'></td>";
                    } else if ($calcColuna == 1) {
                        echo "<td class='impar'></td>";
                    }
                }
        }

        

        echo "</tr>";
    }
    echo "</table>";



    ?>
</body>

</html>