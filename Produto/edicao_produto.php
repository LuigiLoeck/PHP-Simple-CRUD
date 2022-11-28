<?php
include "conecta.php";
if($_POST['acao']=='editar')
{

    $codproduto= $_POST['codproduto'];
    $nome= $_POST['nome'];
    $desc=$_POST['desc'];
    $categ=$_POST['categoria'];

    $SQL= "update produto set nomeprod='$nome', descprod='$desc', categoriacod='$categ' where codproduto = '$codproduto'";
    //echo $SQL;

    $resultado=mysqli_query($conexao,$SQL);

    if($resultado)
    {
       echo "Alteração Efetuada com sucesso";
    }
    else
    {
       echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
       echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
    }

}
else
{


  if($_POST['acao']=='excluir')
  {

    $codproduto= $_POST['codproduto'];

    $SQL= "delete from produto where codproduto = '$codproduto'";
    //echo $SQL;

    $resultado=mysqli_query($conexao,$SQL);

    if($resultado)
    {
       echo "Exclusão Efetuada com sucesso";
    }
    else
    {
       echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
       echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
    }

}
}
?>
<br><a href='listagem_produto.php'>Voltar </a>


