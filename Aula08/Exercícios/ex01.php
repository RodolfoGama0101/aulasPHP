<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <form action="#" method="post">
        <label>Sexo: </label>
            <select name="sexo" id="select-sexo">
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
            </select>
        <label>Tempo de serviço: </label>
            <input type="number" name="tempo-de-servico">
        <button type="submit">Calcular</button>
    </form>

    <?php 
        $sexo = $_POST["sexo"];
        $tempoServico = $_POST["tempo-de-servico"];

        if ($sexo == null && $tempoServico == null) {

        } else {
            if ($sexo == "masculino" && $tempoServico >= 35) {
                echo "<div class='resposta'> <h1> Você pode se aposentar! </h1> </div>";
            } else if ($sexo == "masculino" && $tempoServico < 35){
                echo "<div class='resposta'> <h1> Você não pode se aposentar! Infelismente </h1> </div>";
            }
    
            if ($sexo == "feminino" && $tempoServico >= 30) {
                echo "<div class='resposta'> <h1> Você pode se aposentar! </h1> </div>";
            } else if ($sexo == "feminino" && $tempoServico < 35){
                echo "<div class='resposta'> <h1> Você não pode se aposentar! Infelismente </h1> </div>";
            }
        }
    ?>
</body>
</html>