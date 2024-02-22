<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>

    <style>
        /* table {
            border-collapse: callapse;
        } */

        td {
            border: 1px solid black;
            background-color: 
        }

        tr {
            border: 1px solid black;
        }
    </style>

</head>
<body>
    <?php 
        echo "<table> <tr>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<td>$i</td>";
        }

        echo "</tr></table>";
        
        for ($c = 1; $c <= 10; $c++) {
            echo "|||";
            echo "<br>";
        } 

        print("= = = = = = = = = = = ");

        echo "<h2>Faz o L</h2>";

        echo "<table>";
        for ($a = 1; $a <= 10; $a++) {
            echo "<tr><td>$a</td></tr>";
        }
        echo "</table>";


    ?>
</body>
</html>