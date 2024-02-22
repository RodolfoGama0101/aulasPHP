<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do cálculo</title>
</head>
<body>
    <?php 
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $soma = $num1 + $num2;

    echo "A soma dos números A e B é igual a $soma";
    ?>
</body>
</html>