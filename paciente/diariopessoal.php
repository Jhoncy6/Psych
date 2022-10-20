<!DOCTYPE html>
 <html lang="pt-br">
 <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/diariopessoal.css">


	<title>Login Pschy</title>
	<link rel="stylesheet" href="../assets/css/diariopessoal.css">
  </head>

 <body>
   <nav class="navbar navbar-light" style="background-color:#00a79d !important;">
   <div class="container">
      
      <img class="logo" src="../assets/img/logobranca.PNG">
      <a class="nav-link" href="../paciente/homep.php">Início</a>

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

<div class="container">
<h1 class="titulo">Diário Pessoal </h1>
<div class="row">
<div class="col-md-6"></div>
<div class="col-md-6">
<form action="/action_page.php">
  <p class="sobretexto"><label for="w3review">Nova Anotação</label></p>
  <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
  <br>
  <input type="submit" value="Submit">
</form>
</div>
</div>
</div>