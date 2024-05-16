<?php 
    include "checkLogin.php";
    include "conexao.php";

    $login = $user;
    $passOld = $_POST["senhaAntiga"];
    $passNew01 = $_POST["senhaNova01"];
    $passNew02 = $_POST["senhaNova02"];

    $buscSenha = "SELECT * FROM login WHERE user = '$user' AND password = '$passOld'";
    $resBanco = mysqli_query($conexao, $buscSenha);
    $existe = mysqli_num_rows($resBanco);

    if ($existe == "1") {
        if ($passNew01 == $passNew02) {
            $editarSenha = "UPDATE login SET 'password' = '".$passNew01."' WHERE user = '".$user."' AND password = '".$passOld."'";
            $resultado = mysqli_query($conexao, $editarSenha);
        }else {
            print("<script>document.location = 'mudarSenha.php?err=2' </script>");
        }
    } else {
        print("<script>document.location = 'mudarSenha.php?err=1' </script>");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de senha02</title>
</head>
<body>
    <h3>Senha alterada com sucesso</h3>
    Faça o <a href="logout.php">Logout</a> e acesse novamente para confirmar o processo
</body>
</html>