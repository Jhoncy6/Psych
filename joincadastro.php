<?php

include "config.php";
session_start();
$_SESSION['emailPR']= $email;

$query = "SELECT profissional.emailPR FROM profissional
JOIN pacientes on 
pacientes.emailPA = profissional.emailPR
WHERE paciente.emailPA= $email";

$resultado_usuario = mysqli_query($pdo, $query);


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
