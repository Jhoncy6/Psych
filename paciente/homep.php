<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/app.css">


	<title>Login Pschy</title>
	<link rel="stylesheet" href="../assets/css/home.css">
</head>

<body>
<nav class="navbar navbar-light" style="background-color:#00a79d !important;">
<div class="container">
      
      <img class="logo" src="../assets/img/logobranca.PNG">

        <a class="nav-link" href="#">Perfil</a>
      
        <a class="nav-link" href="../paciente/diariopessoal.php">Diário Pessoal</a>
     
        <a class="nav-link" href="../paciente/arearelaxamento.php">Área de Relaxamento </a>

        <a href="../logout.php" class="btn btn-outline-success my-2 my-sm-0">Sair da conta</a>
      
	  
      <form class="form-inline my-2 my-lg-0">
        <div class="row">
          <div class="col-md-6"><input class="form-control mr-sm-2" type="search" placeholder="Pesquisar">
        </div>
        <div class="col-md-6"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
      </div>
      </div>
    </form>
    </div>
</nav>

<main class="main1">

    <div class="container">
      <div class="row">
         <div class="col-md-6">
          <h1 class="sobretexto">Bem vindo(a) ao Psych!
            <?php
            session_start();
            echo ($_SESSION["username"]);
            ?>

          </h1>
          <p class="subtitulo">Comece a escrever como você se sente!</p>
		  <a class="button1 item3"> + Adicionar anotação</a>
      </div>
    </div>
    <img class="medico" src="../assets/img/home/medico.PNG">
    <img class="onda" src="../assets/img/home/onda.PNG">
  </main>
</body>
</html>
