<?php
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:../index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}

include "conecta.php";

$sql = "select * from categoria order by codcategoria";

$resultado = mysqli_query($conexao,$sql);

?>

<h1>Produtos</h1>
<form action="cadastro_produto.php" method="POST">
Nome do produto : <input type="text" name="nome" maxlength="50"><br>
Descrição do produto : <br><textarea cols="30" rows="5" maxlength="100" name="desc"></textarea><br><br>
Categoria do produto : <select name="categoria">
    <option value="">Selecione uma categoria</option>
    <?php  
    while($linha=mysqli_fetch_assoc($resultado)) {
    ?>
    <option value="<?php echo $linha['codcategoria']?>"><?php echo $linha['nomecategoria']?></option>
    <?php
    }?>
</select><br><br>
<input type="reset" name="botao" value="Limpar">
<input type="submit" name="botao" value="Enviar">
</form>

<a href='listagem_produto.php'>Edição de Produtos</a><br><br>
<a href="../Usuário/index.php">Ir para Usuário</a><br>
<a href="../Categoria/index.php">Ir para Categoria</a><br><br>
<a href='../sair.php'>Sair</a>
