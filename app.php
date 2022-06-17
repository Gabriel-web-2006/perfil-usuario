

<?php

session_start();
require('banco_dados/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = $pdo->prepare("INSERT INTO ultilizadores VALUES (null, '$nome', '$email')");
$sql->execute();


?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
</head>
<body>
    <h1>bem vindo</h1>
    <form action="atualizar.php" method="post">
        <label for="nome">Inseri Usuário: </label>
        <input type="text" name="nome" id="nome">
        <br><br>
        <label for="email">Inseri E-mail: </label>
        <input type="email" name="email" id="email">
        <br><br>
        <label for="email">Id: </label>
        <input type="number" name="id" id="id">
        <br><br>
        <button type="submit">Atualizar</button>
    </form>
    <a href="apagar.php">Ou Apagar a minha conta.</a>
    
</body>
</html>