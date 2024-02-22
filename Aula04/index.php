<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
</head>
<body>
    <?php 
        $componentes = array("SSD", "Processador");
        $componentes[2] = "Placa de vídeo";
        $componentes[] = "Mamória RAM";
        $componentes[] = "Placa-mãe";

        // echo $componentes[1];
        // echo "<br>";
        // echo $componentes[2];
        // echo "<br>";
        // echo $componentes[3];
        // echo "<br>";
        // echo $componentes[4];

        // Imprimir array por loop 
        echo "<h1>Componentes</h1>";
        for ($i=0; $i<=4; $i++) {
            echo $componentes[$i]."<br>";
        }

        echo "<h1>Range números passo 2</h1>";
        $numeros = range(2,100,2);
        for ($i=0; $i<=49; $i++) {
            echo $numeros[$i]." ";
        }

        echo "<h1>Range alfabeto</h1>";
        $letra = range("A", "Z");
        for ($i=0; $i<=25; $i++) {
            echo $letra[$i]." ";
        }

        echo "<br><p>";

        $precos = array("Ryzen 5 8600X" => 1580);
        $precos["Placa-mãe mATX"] = 367;
        $precos[2] = 1000;
        $precos[] = 700;

        foreach($precos as $elementos) {
            echo $elementos . "<br>";
        }

        echo "<br>";

        foreach ($precos as $indice => $valor) {
            echo $indice.": R$ ". $valor."<br>";
        }

        echo "<br>";

        $frutas = ["Limão", "Uva", "Laranja", "Banana", "Melancia", "Cupuaçu"];

        sort($frutas);
        shuffle($frutas);

        foreach ($frutas as $chave => $valor) {
            echo "Frutas [".$chave."] = ".$valor." <br>";
        }
        
    ?>
</body>
</html>