<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cidadess';
$port = 3306; // ou 3307, dependendo da configuração

$con = mysqli_connect($host, $user, $password, $db, $port);

if (!$con) {
    die('Erro: ' . mysqli_connect_error());
}

echo 'Conexão bem-sucedida!';
?>
