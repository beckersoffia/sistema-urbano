<?php
// conexao.php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cidadess';
$port = 3307;

$con = mysqli_connect($host, $user, $password, $db, $port);
if (!$con) {
    die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}
?>