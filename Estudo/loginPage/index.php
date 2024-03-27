<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>

    <?php 
        if (isset($_COOKIE["biscoito"])) {
            header("Location: ./areaRestrita.php");
        }
    ?>
</head>
<body>
    <h1>Página de Login</h1>
    <form action="app.php" method="get">
        <label>User: </label>
            <input type="text" name="input-user"><br>
        <label>Password: </label>
            <input type="text" name="input-password">
        <button type="submit">Login</button>
    </form>

    <p>User = Rodolfo</p>
    <p>Password = 1234</p>
</body>
</html>