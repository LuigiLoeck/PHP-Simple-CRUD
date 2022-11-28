<?php
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

header("Location:../index.php"); // se as variáveis de sessão não estão setadas direciona para o formulário de login
}

?>

<h1>Usuários</h1>
<form action="cadastro_usuario.php" method="POST">
Nome : <input type="text" name="nome"><br><br>
Email : <input type="text" name="email"><br><br>
CPF: <input type="text" name="cpf"><br><br>
Senha: <input type="password" name="senha"><br><br>
<input type="reset" name="botao" value="Limpar">
<input type="submit" name="botao" value="Enviar">
</form>

<a href='listagem_usuario.php'>Edição de Usuários</a><br><br>
<a href="../Produto/index.php">Ir para Produto</a><br>
<a href="../Categoria/index.php">Ir para Categoria</a><br><br>
<a href='../sair.php'>Sair</a>