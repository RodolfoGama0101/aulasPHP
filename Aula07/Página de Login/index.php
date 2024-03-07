<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            width: 100vw;
            height: 100vh;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100%;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }

        .login {
            width: 400px;
            height: 300px;
            background-color: aqua;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .login-password label, input {
            margin: 5px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="title">
                <h1>Login</h1>
            </div>
    
            <div class="login-password">
                <form action="verifyLogin.php" method="post">
                    <label for="user">Usuário: </label> <br>
                        <input type="text" name="user">
                    <br>
                    <label for="password">Senha: </label> <br>
                        <input type="password" name="password">
                    <br>
                    <input type="submit" value="Fazer login">
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>