<?php
$host = "localhost";
$user="root";
$password="root";
$database = "musisom";

$conexao = mysqli_connect($host, $user, $password, $database);

mysqli_query($conexao,"set NAMES utf8;");
/* if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}
echo "Status: Conectado com sucesso ao Banco de Dados: ".$database
?>
*/