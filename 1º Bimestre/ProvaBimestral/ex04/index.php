<?php 
    $chico = 1.50;
    $juca = 1.30;
    $anos = 1;

    echo "<h3>Prova Real</h3>";

    while ($chico > $juca) { 
        $chico = $chico + 0.02;
        $juca = $juca + 0.03;

        echo $anos . " - " . $chico; echo "<br>";
        echo $anos . " - " . $juca; echo "<br>";
        $anos++;
    } 

    echo "<h1> Juca precisa de " . $anos . " anos para que ele seja maior que Chico! </h1>";
?>