<?php
include "conecta.php";
if($_POST['acao']=='editar')
{

    $codcategoria= $_POST['codcategoria'];
    $nome= $_POST['nome'];

    $SQL= "update categoria set nomecategoria='$nome' where codcategoria = '$codcategoria'";
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

    $codcategoria= $_POST['codcategoria'];

    $SQL= "delete from categoria where codcategoria = '$codcategoria'";
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
<br><a href='listagem_categoria.php'>Voltar </a>


