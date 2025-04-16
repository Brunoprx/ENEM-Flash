<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'simulado';
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $dbname,$port);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}


?>
