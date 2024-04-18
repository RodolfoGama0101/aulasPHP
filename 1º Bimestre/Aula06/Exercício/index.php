<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>

    <style>
        body {
            border: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 300px;
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="data.php" method="post">
            <label for="nome">
                <p>Nome: </p><input type="text" name="nome">
            </label>
    
            <label for="senha">
                <p>Senha: </p><input type="password" name="senha">
            </label>

            <br>
            
            <input type="submit" value="Fazer Login">
        </form>
    </div>
    
    <?php 
        if (isset($_COOKIE["cookieNome"]) and isset($_COOKIE["cookieSenha"])) {
            header("Location: boasVindas.html");
        }
    ?>
</body>
</html>