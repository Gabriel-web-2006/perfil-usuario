<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar CONTA.</title>
</head>
<body>

    <form action="excluir.php" method="post">
        <label for="nome">Inseri Usuário: </label>
        <input type="text" name="nome" id="nome">
        <br><br>
        <label for="email">Inseri E-mail: </label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="email">Id: </label>
        <input type="number" name="id" id="id">
        <br><br>
        <button type="submit">Apagar</button>
    </form>
    
</body>
</html>