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

<h1> Atualizar Registros</h1> 
<?php
require_once('conectar.php');
$sql="select * from cadastro";
$res=mysqli_query($conexao,$sql) or die(mysqli_connect_error());
$num=mysqli_num_rows($res);

while ($linha = mysqli_fetch_row($res))
{
$codi=$linha[0];
echo "Codigo: ".$linha[0]. ' - ';
echo "Descricao: ".$linha[3]. ' - ';
echo "Valor: ".$linha[4];
echo "<br />";
}
?>

<br /> <br /> <br />
<form name="dados" action="../php/exec_atualizar.php" method="POST">
<form name="dados" action="../php/exec_cadastrar.php" method="POST" enctype="multipart/form-data">
<input type="text" name="codigo" size="150" class="field" placeholder="Código:" value="<?php if (isset ($_GET['codigo'])) echo $_GET['codigo'] ?>" /> <br /> <br /> 
<input type="text" name="tipo" size="150" class="field" placeholder="Tipo:" value="<?php if (isset ($_GET['tipo'])) echo $_GET['tipo'] ?>" /> <br /> <br />
<input type="text" name="marca" size="150" class="field" placeholder="Marca:" value="<?php if (isset ($_GET['marca'])) echo $_GET['marca'] ?>"/> <br /> <br />
<input type="text" name="descricao" size="150" class="field" placeholder="Descrição:" value="<?php if (isset ($_GET['descricao'])) echo $_GET['descricao'] ?>"/> <br /> <br />
<input type="text" name="valor" size="150" class="field" placeholder="Valor:"value="<?php if (isset ($_GET['valor'])) echo $_GET['valor'] ?>"/> <br /> <br />
<input type="text" name="qtd_estoque" size="150" class="field" placeholder="Qtd de Estoque:" value="<?php if (isset ($_GET['qtd_estoque'])) echo $_GET['qtd_estoque'] ?>"/> <br /> <br />            
<input type="submit" class="btn" value="Atualizar"> 
</form>
<br>
</div>
</div>
</div>

<?php
if (isset ($_GET['retorno']))
{
 $msg = $_GET['retorno'];
 echo "<br />";
 echo "<font face='Arial' size='3' color='#F00'>";
 echo $msg;
 $msg="";
 echo "</font>";
}
?>
</body>
<br /> <br /> <br />
<div id="main-footer">
        <img src="../imgs/logobranco.svg" alt=" Logo" width="150px" height="58px">
        <br>
        <br>
        <p class="footer">TERMOS E CONDIÇÕES| POLITICA DE PRIVACIDADE <br>
        ⓒ Hören music store | Website por Bruno Eduardo da Silveira, Jacqueline R.Sant'Anna e Mariana Candor Vasconcellos<br></p>
    </div>

</html>
