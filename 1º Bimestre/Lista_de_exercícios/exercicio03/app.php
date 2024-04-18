<?php 
        $numInicial = $_POST["inicial"];
        $numFinal = $_POST["final"];

        if ($numInicial < $numFinal) {
            for($i = $numInicial; $i <= $numFinal; $i++) {
                echo ($i . " ");
            }
        } else if ($numInicial > $numFinal) {
            for($i = $numInicial; $i >= $numFinal; $i--) {
                echo ($i . " ");
            }
        } else if ($numInicial == $numFinal) {
            echo ("Escreva números diferentes!");
        }
    ?>