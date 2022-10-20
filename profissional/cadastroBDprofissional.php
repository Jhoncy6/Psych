<?php
//ver se o usuário existe no BD
//PROFISSIONAL

$usuario = $_POST["emailPR"]; 
$senha = $_POST["senhaPR"];


$query = "SELECT * FROM profissional WHERE emailPR='$usuario' and senhaPR='$senha' "; //CRIA A QUERY
 
$conexao = new PDO('mysql:host=127.0.0.1;dbname=psych', 'root', ''); //CONEXAO COM O BD
$resultado = $conexao->query($query);
$logado = $resultado->fetch();
$id_logado = $logado['id'];
 
if ($logado == null) { 
   // Usuário ou senha inválida
   header('Location: ../usuario-erro.php');
} 
else {
   session_start();
   $_SESSION['usuario_logado'] = $id_logado;
   $_SESSION["emailPR"] = $usuario; 
   $_SESSION["nomePR"] = $nome; 
   // Direciona o usuário para o painel administrativo do sistema
   header('Location: homem.php');
   echo $id_logado;
}

die();
?>