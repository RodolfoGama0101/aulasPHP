<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>

<body>
    <h1>Conversor de velocidade</h1>
    <h4>Insira a velocidade do objeto em m/s</h4>

    <form action="#" method="post">
        <label>Velociade (m/s): </label>
            <input type="text" name="input-speed">
        <button type="submit">Calcular</button>
    </form>


    <?php
        $speed = $_POST["input-speed"];

        function convertSpeed($inputSpeed) {
            $convert = $inputSpeed * 3.6;
            return $convert;
        }

        echo convertSpeed($speed) . " Km/h";


    ?>
</body>

</html>