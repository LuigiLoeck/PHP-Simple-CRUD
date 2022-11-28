<?php

session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:../index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}

include "conecta.php";

$sql = "select * from categoria order by codcategoria";


$resultado = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {

?>
<section>
<form action="edicao_categoria.php" method="post">
<p>ID: <?php echo $linha['codcategoria']; ?></p>
<input type ="hidden" name = "codcategoria" value="<?php echo $linha['codcategoria']?>">
<p>Nome da categoria:  <input type="text" name="nome" value="<?php echo $linha['nomecategoria']?>"></p>
<button type="submit" name="acao" value="editar"> Editar </button>
<button type="submit" name="acao" value="excluir" onclick = "return confirma_excluir()"> Deletar </button> 
</form>                                                         
</section>
<?php
}
?>
<a href='index.php'>Voltar </a>

