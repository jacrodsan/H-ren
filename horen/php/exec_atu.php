<?php
require_once('conectar.php');
//pegar os dados que veio do formulário no vetor $_POST
$cod = $_POST['codigo'];
$tipo = $_POST['tipo'];
$marca = $_POST['marca'];
$desc = $_POST['descricao'];
$valor = $_POST['valor'];
$qtde_estoque = $_POST['estoque'];
//montar o sql que irá atualizar o registro 
$sql="update cadastro set codigo='$cod', tipo='$tipo', marca='$marca', descricao='$desc', valor='$valor', estoque='$qtde_estoque' where codigo=$cod";
mysqli_query($conexao,$sql) or die(mysqli_connect_error());
//voltar para form_atualizar.php e passar parâmetro com a mensagem de: Cadastro atualizado com sucesso
$msg=urlencode('Registro atualizado com sucesso!');
header ("location: ../php/form_atu.php?retorno=$msg");
?>