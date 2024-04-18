<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php 
        $i = 0;

        switch ($i) {
            case 0:
                echo "A variável 'i' é igual a 0";
                break;
            case 1: 
                echo "A variável 'i' é igual a 1";
                break;
            default:
                echo "A variável 'i' é diferente de 0 e 1";
        }

        echo "<br>";

        while ($i < 10) {
            echo "Contando: $i <br>";
            $i++;
        } 
        
        echo "<br>";

        do {
            echo "$i <br>";
            $i--;
        } while($i > 0);

        $cores = Array("Azul", "Amarelo", "Vermelho", "Verde");
        foreach ($cores as $cor) {
            echo $cor;
        }

        echo "<br>";

    ?>
</body>
</html>