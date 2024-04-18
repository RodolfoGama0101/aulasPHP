<?php 
    $productValue = $_POST["product-input"];

    $plusValue = $productValue * 1.16;

    echo "O valor com acréscimo é de " . $plusValue;

    $valorParcela = $plusValue / 10;

    echo "<br>";

    echo "O valor das parcelas são de: " . $valorParcela;
?>