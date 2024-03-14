<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>

    <style>
        td{
            border: 3px solid black;
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body>
    <?php

    
    echo "<table>";
    for ($i = 0; $i < 8; $i++) {
        echo "<tr class=''>";
        for ($j = 0; $j < 8; $j++) {
            echo "<td class=''></td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    

    ?>
</body>

</html>