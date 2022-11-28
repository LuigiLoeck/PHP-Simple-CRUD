<?php
$nome=$_POST['nome'];
$desc=$_POST['desc'];
$categ=$_POST['categoria'];

include "conecta.php";

$sql="insert into produto (nomeprod,descprod,categoriacod) values ('$nome','$desc','$categ')";

//echo $sql;

$resultado = mysqli_query($conexao,$sql);

if($resultado)
{
   echo "Cadastro Efetuado com sucesso";
}
else
{
   echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
   echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
}

?>
<br><a href='index.php'>Voltar </a>