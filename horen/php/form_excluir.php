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
<h1> Excluir Registros </h1>
<?php
require_once('conectar.php');
$sql="select * from cadastro";
$res=mysqli_query($conexao,$sql) or die (mysqli_connect_error());
$num=mysqli_num_rows($res);
while ($linha = mysqli_fetch_row($res))
{
$codi=$linha[0];
echo "Codigo: ".$linha[1]. ' - '; //mostrar a frase 
echo "<a href='form_excluir.php?cod=$codi&&codigo=$linha[1]'> [ Excluir ] </a> ";
echo "<br />";
echo "<br />";
}
?>
<h2>Confirma exclusão do registro ?</h2>   
<form name="dados" action="../php/exec_excluir.php" method="POST">
<input type="hidden" name="cod" value="<?php if (isset ($_GET['cod'])) echo $_GET['cod'] ?>" />
         
Codigo:<input type="text" name="frase" size="150" readonly value="<?php if (isset ($_GET['cod'])) echo $_GET['cod'] ?>" />  
<br /> <br />
<input type="submit" name="excluir" value="Excluir" />
</form>
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
