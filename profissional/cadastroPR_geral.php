<?php
session_start(); //inicia a sessao;
ob_start();

include ("../config.php"); //inclui arquivo de conexao com o BD

//recebe variaveis do form INSCREVASEPR
$nome = $_POST['nomePR'];
$email = $_POST['emailPR'];
$senha = $_POST['senhaPR'];
$telefone = $_POST['telPR'];
$rua = $_POST ['rua'];
$numero = $_POST ['numero'];
$complemento = $_POST ['complemento'];
$cpf = $_POST ['cpf'];
$especialidade= $_POST["especialidade"];
$estado = $_POST['estadoPR'];
$cidade = $_POST['cidadePR'];
$bairro= $_POST['bairroPR'];
$planodesaude = $_POST['planodesaude'];
$genero = $_POST['gender'];


//----------------------------------------------valida email ----------------------------------
$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$erro = false;
$dados_st = array_map('strip_tags', $dados_rc);
$dados = array_map('trim', $dados_st);


//faz a query;


$resultado_usuario = mysqli_query($pdo, $result_usuario);


//se o e-mail já estiver cadastrado;
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
  $erro = true;
  echo"<script language='javascript' type='text/javascript'>
  alert('Esse e-mail já está em uso. ');window.location
  .href='../index.php';</script>";
    die();
  
}else{
//----------------------------------------------VALIDA CPF--------------------------------------

if (strlen($cpf) != 11) {  // se o cpf for diferente de 11 dígitos redirecionar para o index

   echo "<script language='javascript' type='text/javascript'>
    alert('o CPF precisa de 11 dígitos, por favor digite novamente!');window.location
    .href='inscrevasePR.html';</script>";
    die();
}

$verificaJ = $cpf[9]; 
$verificaK = $cpf[10];

$J_letra = 10;
$J_soma = 0;
$J_array = array();
for ($i = 0; $i <= 8; $i++){
    $J_array[] = $cpf[$i] * $J_letra;
    $J_letra--;
    $J_soma = $J_soma + $J_array[$i];
}

$J_resto = $J_soma % 11;
$J_subtracao = 11 - $J_resto;

if ($J_subtracao > 9) {
    $J = 0;
    echo "J:" . $J . "<br> ";
} else {
    $J = $J_subtracao;
    echo "J else:" . $J . "<br>";
}

//Conseguindo K
$K_letra = 11;
$K_soma=0;
$K_array = array();
for ($ii = 0; $ii <= 9; $ii++){
    $K_array[] = $cpf[$ii] * $K_letra;
    $K_letra--;
    $K_soma = $K_soma + $K_array[$ii];
}

$K_resto = $K_soma % 11;
$K_subtracao = 11 - $K_resto;
if ($K_subtracao > 9) {
    $K = 0;
    echo "K:" . $K . "<br> ";

} else {
    $K = $K_subtracao;
    echo "K:" . $K . "<br> ";

}

// se o CPF E O e-mail estiverem certos...........

if ($verificaJ == $J && $verificaK == $K){
    $sql= "INSERT INTO profissional(nomePR, emailPR, senhaPR, telPR, estadoPR, cidadePR, bairroPR, ruaPR, numeroPR, complementoPR, cpf, especialidade, planodesaude, genero)
    VALUES ('$nome', '$email', '$senha', '$telefone', '$estado', '$cidade', '$bairro', '$rua', '$numero', '$complemento', '$cpf', '$especialidade',  '$planodesaude', '$genero')";


    if (mysqli_query($pdo, $sql)) {
        echo"<script language='javascript' type='text/javascript'>
        alert('Usuário cadastrado com sucesso!');window.location
        .href='../index.php';</script>";
        die();
    }

}else {
    echo "<script language='javascript' type='text/javascript'>
    alert('Não foi possível realizar o cadastro, insira os dados corretamente!');window.location
    .href='inscrevasePR.html';</script>";
    die();
}
}

