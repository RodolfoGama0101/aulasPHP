<?php 
    include "checkLogin.php";
    include "conexao.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de senha</title>
</head>
<body>
    <h3>Alterar sua senha de acesso ao sistema</h3>
    <form action="mudarSenha02.php" method="post">
        <label>Usuário: </label> <?php echo $user; ?> <br>
        <label>Senha antiga: </label> <input type="password" name="senhaAntiga" id="senhaAntiga" required> <br>

        <?php 
            if (isset($_GET["err"])) {
                $erro = $_GET['err'];
                if ($erro == '1') {
                    echo "<span style='color: #ff0000'>ERRO! - A senha não confere</span><br>";
                }
            }
        ?>
        
        <label>Senha nova: </label> <input type="password" name="senhaNova01" required></input> <br>
        <label>Redigite a nova senha: </label> <input type="password" name="senhaNova02" required>

        <?php 
            if (isset($_GET["err"])) {
                $erro = $_GET['err'];
                if ($erro == '2') {
                    echo "<span style='color: #ff0000'>ERRO! - A senha não confere</span><br>";
                }
            }
        ?>

        <button type="submit" name="salvar">Salvar</button>
    </form>
</body>
</html>