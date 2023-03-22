<?php
require_once('conectar.php');
//pegar os dados que vieram do formulario no vetor $_POST 
$cod = $_POST['codigo'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$desc = $_POST['descricao'];
$valor = $_POST['valor'];
$qtd_estoque = $_POST['qtd_estoque'];

//montar o comando SQL que vai gravar os dados na tabela cadastro
$sql= "insert into cadastro (codigo, tipo, marca, descricao, valor, qtd_estoque) values 
('$cod','$tipo','$marca','$desc','$valor','$qtd_estoque')";
//executar/gravar os dados na tabela
mysqli_query($conexao,$sql) or die(mysqli_connect_error());

//rotina php para UPLOAD da foto do Autor(a) da Frase
//pegar o ultimo código gerado pelo mySQL
$ultimocod=mysqli_insert_id($conexao);

//voltar para form_cadastrar e passsar parâmetro por GET com mensagem de: 
// Frase Famosa Cadastrada com Sucesso!!!
$msg= urlencode('Instrumento Cadastrado com Sucesso!');
header("location:./form_cadastrar.php");
?>   

