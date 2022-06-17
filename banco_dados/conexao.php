<?php

// config 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "conta";

$pdo  = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);


?>