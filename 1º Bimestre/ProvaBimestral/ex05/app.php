<?php 
    $dias = $_GET["input-dias"];
    $anos = $dias / 365.25;
    $meses = $anos * 12;

    $anosRestantes = 5 - $anos;
    $mesesRestantes = (5 * 12) - $meses;
    $diasRestantes = (5 * 12 * 30) - $dias;

    echo "Ainda lhe resta aproximadamente " . round($anosRestantes, 0) . " anos!"; echo "<br>";
    echo "Ou aproximadamente " . round($mesesRestantes, 0) . " meses!"; echo "<br>";
    echo "Ou aproximadamente " . round($diasRestantes, 0) . " dias!"; echo "<br>";
?>