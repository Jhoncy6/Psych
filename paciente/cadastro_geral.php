<?php
session_start(); //inicia a sessao;
ob_start();

$hostname = "localhost"; //CONEXAO COM O BD
$bancodedados= "psych";
$usuario= "root";
$senha= "";


$pdo = mysqli_connect ($hostname, $usuario, $senha, $bancodedados);


//recebe as variaveis do form INSCREVASEPA
$nome = $_POST['nomePA'];
$email = $_POST['username'];
$senha = $_POST['password'];
$telefone = $_POST['telPA'];
$estado = $_POST['estadoPA'];
$cidade = $_POST['cidadePA'];
$bairro= $_POST['bairroPA'];
$planodesaude = $_POST['planodesaude'];
$genero = $_POST['gender'];


//validação de E-MAIL -- criação de variaveis;
$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$erro = false;
$dados_st = array_map('strip_tags', $dados_rc);
$dados = array_map('trim', $dados_st);


//faz a query;
$result_usuario = "SELECT * FROM pacientes WHERE emailPA='". $dados['username'] ."'";
$resultado_usuario = mysqli_query($pdo, $result_usuario);


//se o e-mail já estiver cadastrado;
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
  $erro = true;
  echo"<script language='javascript' type='text/javascript'>
  alert('Esse e-mail já está em uso. ');window.location
  .href='../index.php';</script>";

  
}else{

$sql= "INSERT INTO pacientes(nomePA, emailPA, senhaPA, telPA, estadoPA, cidadePA, bairroPA, convenioPA, genero)
VALUES ('$nome', '$email', '$senha', '$telefone', '$estado', '$cidade', '$bairro', '$planodesaude', '$genero')";       
  
        

if (mysqli_query($pdo, $sql)) {  //se a conexão foi efetuada com o banco dedados...
  echo"<script language='javascript' type='text/javascript'>
  alert('Login efetuado com sucesso no Banco de Dados!');window.location
  .href='../index.php';</script>";
  die();
  header ("Location:../index.php");
 
}
}

mysqli_close($pdo);


