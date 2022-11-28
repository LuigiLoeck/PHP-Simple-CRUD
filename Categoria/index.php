<?php
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:../index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}

?>

<h1>Categorias</h1>
<form action="cadastro_categoria.php" method="POST">
Nome da categoria : <input type="text" name="nome" maxlength="100"><br><br>
<input type="reset" name="botao" value="Limpar">
<input type="submit" name="botao" value="Enviar">
</form>

<a href='listagem_categoria.php'>Edição de categorias</a><br><br>
<a href="../Usuário/index.php">Ir para Usuário</a><br>
<a href="../Produto/index.php">Ir para Produto</a><br><br>
<a href='../sair.php'>Sair</a>