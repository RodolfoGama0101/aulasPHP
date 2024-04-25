<?php 
    include "checkLogin.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

    <style>
        body {
            background-color: #ffff11;
        }
    </style>
</head>

<body>
    <?php
        echo "Bem-vindo " . $user;
    ?>

    <a href="logout.php">Terminar sessão</a>
</body>

</html>