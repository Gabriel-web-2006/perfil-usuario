<?php

session_start();
require('banco_dados/conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$id = $_POST['id'];


$sql = $pdo->prepare("DELETE FROM ultilizadores WHERE `ultilizadores`.`id` = '$id'");
$sql->execute();

