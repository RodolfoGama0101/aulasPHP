<?php 
    $quantTermos = $_GET["quant-termos"];

    if ($quantTermos == 1) { 
        echo "Termo 1 = 0";
    } else if ($quantTermos == 2) { 
        echo "Termo 1 = 0";
        echo "Termo 2 = 1";
    } else { 
        echo "Termo 1 = 0"; echo "<br>";
        echo "Termo 2 = 1"; echo "<br>";

        $x = 1;
        $y = 0;

        for ($i = 3; $i <= $quantTermos; $i++) { 
            echo "Termo $i = " . $x . " + " .  $y . " = " . $x + $y;
            echo "<br>";

            $x = $x + $y;
            $y = $y + $x;
        }
    }
?>