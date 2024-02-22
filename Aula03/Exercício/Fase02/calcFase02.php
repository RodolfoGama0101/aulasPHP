<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da fase 02</title>
</head>
<body>
    <?php 
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operador = $_POST["operador"];
        echo $operador;

        if($operador = "+") {
            $calc = $num1 + $num2;
        } else if($operador = "-") {
            $calc = $num1 - $num2;
        } else if($operador = "*") {
            $calc = $num1 * $num2;
        } else if($operador = "/") {
            $calc = $num1 / $num2;
        }

        echo "$num1 $operador $num2 = $calc"
    ?>
</body>
</html>