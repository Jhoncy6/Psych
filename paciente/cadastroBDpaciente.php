<?php

//PACIENTE
$usuario = $_POST["username"];
$senha = $_POST["password"];
 
$query = "SELECT * FROM pacientes WHERE emailPA='$usuario' and senhaPA='$senha'";
 
$conexao = new PDO('mysql:host=127.0.0.1;dbname=psych', 'root', '');
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
   $_SESSION["username"] = $usuario;   
   
   // Direciona o usuário para o painel administrativo do sistema
   header('Location: homep.php');

}
die();
?>


