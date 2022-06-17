<?php

session_start();
require('banco_dados/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$id = $_POST['id'];


$sql = $pdo->prepare("UPDATE `ultilizadores` SET `usuario` = '242401', `email` = 'hugopy@gmail.com' WHERE `ultilizadores`.`id` = '$id'");
$sql->execute(array($nome, $email));


?>