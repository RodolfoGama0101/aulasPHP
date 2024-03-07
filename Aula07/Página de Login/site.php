<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site bacana</title>

    <?php 
        session_start();

        if (!isset($_SESSION["autenticado"]) or !isset($_SESSION["user"])) {
            header("Location: index.php");
        }  
    ?>
</head>
<body>
    <?php 
        echo "Olá " . $_SESSION["user"]. ". Seja bem-vindo! <br>";
    ?>

    <p><a href="logoff.php">[SAIR]</a></p>
</body>
</html>