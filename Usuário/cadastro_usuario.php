<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$cpf=$_POST['cpf'];
$senha=$_POST['senha'];

include "conecta.php";

$sql="insert into pessoa (nome,email,cpf,senha) values ('$nome','$email','$cpf','$senha')";

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