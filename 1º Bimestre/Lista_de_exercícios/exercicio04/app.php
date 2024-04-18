<?php 
    $valorA = $_GET["a"];
    $valorB = $_GET["b"];
    $valorC = $_GET["c"];


    function calculo($a, $b, $c) {
        // Calculando o Delta
        $delta = ($b^2) - (4 * $a * $c);
        $delta = sqrt($delta);

        if ($delta < 0) {
            echo "Sendo delta menor que zero não existem raízes reais";
        }

        if ($delta == 0) {
            $raiz0 = (($b * -1) + $delta) / (2 * $a);
            echo ("O valor de delta é igual a 0, logo o resulta é: " . $raiz0);
        }

        if ($delta > 0) {
            // Calculando raiz 1
            $raiz1 = (($b * -1) + $delta) / (2 * $a);
            echo("Raiz 1 é igual a " . round($raiz1, 0)); 
            echo "<br>";

            // Calculando raiz 2
            $raiz2 = (($b * -1) - $delta) / (2 * $a);
            echo("Raiz 2 é igual a " . round($raiz2, 0));
        }
    }

    calculo($valorA, $valorB, $valorC);


?>