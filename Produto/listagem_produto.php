<?php

session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:../index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}

include "conecta.php";

$sql = "select * from produto, categoria where produto.categoriacod = categoria.codcategoria order by codproduto";
$resultado = mysqli_query($conexao,$sql);
$sql = "select * from categoria order by codcategoria";
$resultado2 = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {

?>
<section>
<form action="edicao_produto.php" method="post">
<p>ID: <?php echo $linha['codproduto']; ?></p>
<input type ="hidden" name = "codproduto" value="<?php echo $linha['codproduto']?>">
<p>Nome do produto:  <input type="text" name="nome" value="<?php echo $linha['nomeprod']?>"></p>
<p>Descrição do produto : <br><input type="text" size="100" maxlength="100" name="desc" value="<?php echo $linha['descprod']?> "></p>
<p>Categoria do produto : <select name="categoria">
    <?php  
    mysqli_data_seek($resultado2,0);
    while($linha2=mysqli_fetch_assoc($resultado2)) {
        if($linha['categoriacod']==$linha2['codcategoria']){
            ?>
            <option value="<?php echo $linha2['codcategoria']?>" selected><?php echo $linha2['nomecategoria']?></option>
            <?php
        } else {
            ?>
            <option value="<?php echo $linha2['codcategoria']?>"><?php echo $linha2['nomecategoria']?></option>
            <?php
        }
    }?>
</select><br><br></p>
<button type="submit" name="acao" value="editar"> Editar </button>
<button type="submit" name="acao" value="excluir" onclick = "return confirma_excluir()"> Deletar </button> 
</form>                                                         
</section>
<?php
}
?>
<a href='index.php'>Voltar </a>

