<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hören </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins:wght@200;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/forms.css">
</head>

<body>
    <php include 'conectar.php'; ?></php>
    <php include 'form_atu.php'; ?></php>
    <php include 'form_cadastrar.php'; ?>
    <php include 'form_excluir.php'; ?></php>
    <php include 'form_pesquisar.php'; ?></php>

    <div class="overlay"></div>
    <div class="wrapper">
        <header>
            <a href="../html/index.html"><img src="../imgs/logo1.svg" alt=" Logo" width="40%" height="40%"></a>

            <nav>
            <ul>
                    <li><a href="../html/index.html" class="active">Inicio</a></li>
                    <li><a href="../php/form_cadastrar.php">Cadastro</a></li>
                    <li><a href="../php/form_atu.php">Atualizar</a></li>
                    <li><a href="../php/form_excluir.php">Excluir</a></li>
                    <li><a href="../php/form_pesquisar.php">Pesquisa</a></li>
                </ul>
            </nav>
        </header>

        <div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
<h1> Pesquisar Instrumento </h1>
<form name="pesquisar" action="form_pesquisar.php" method="POST" >
<br>
<p>Informe o Código do instrumento:</p>
<br>
<input type="text" name="codigo" size="150" value="<?php if (isset ($_GET['codigo'])) echo $_GET['codigo'] ?>" /> <br /> <br /> 
<input type="submit" class="btn" value="Pesquisar" /></form>
</div>
</div>
</div>

<?php
//desligar a exibição de erros de script php
ini_set('display_errors', 0);
require_once('conectar.php');
$codi = $_POST['codigo'];
//Teste necessário para evitar mostrar mensagem 
//de "Autor(a) não encontrado" na primeira vez que carrega a pagina
if (isset ($_POST['codigo']))
{
//monta o comando SQL que busca os registros na tabela
$sql = "select * from cadastro where codigo='$codi'"; 
$res = mysqli_query($conexao,$sql) or die(mysqli_connect_error()); //executa o comando SQL
$num=mysqli_num_rows($res);
}

while ($linha = mysqli_fetch_assoc($res))
{
echo  "Código: ".$linha['codigo'];
echo "<br />";
echo "Descricao: ".$linha['descricao'];
echo "<br />";
echo "Valor: ".$linha['valor'];
echo "<br />"; echo "<br />"; echo "<br />";
} 
if ($codi=="")
  {echo "Informe o codigo para pesquisar";}
else if ($num==0)
  {echo "Instrumento não encontrado";}
?>

<br /> 
<div id="main-footer">
        <img src="../imgs/logobranco.svg" alt=" Logo" width="150px" height="58px">
        <br>
        <br>
        <p class="footer">TERMOS E CONDIÇÕES| POLITICA DE PRIVACIDADE <br>
        ⓒ Hören music store | Website por Bruno Eduardo da Silveira, Jacqueline R.Sant'Anna e Mariana Candor Vasconcellos<br></p>
    </div>

</body>

</html>
