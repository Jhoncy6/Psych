<?php
// Inicia sessões
session_start();

// Verifica se existe os dados da sessão de login
if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"]))
echo "Bem vindo " . $_SESSION['nome_usuario'] . "<br>";
{
// Usuário não logado! Redireciona para a página de login
header("Location: index.php");
exit;
}
?>