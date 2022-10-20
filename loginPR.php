

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<title>Login Pschy</title>
	
	 <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/stylog.css">

	
	
</head>
<body>
<form class="card" action = "paciente/cadastroBDpaciente.php" method="POST">

			
				<div class="col-sm-12">
					<img src="assets/img/logoazul.PNG" class="imglogo">
					 	
						
					
				</div>  
				<div class="container text-center">
  				<div class="row">
				<div class="col-md-6">
                <img src="assets/img/login/elemento.png" class="elemento">
				</div>
				

				
				
				<div class="col-md-6" >
				
					<label style="font-family: verdana;">Email</label>
					<input type="email" required name="emailPR" placeholder="Digite seu email" class="form-control 
				"value="">

			
                <span class="invalid-feedback"></span>
				 	
				<label style="font-family: verdana;">Senha</label>
					<input type="password" required name="senhaPR" placeholder="Digite sua senha" class="form-control
					">
                <span class="invalid-feedback"></span> 
				
				<div class="card-group btn">
					<button type="submit" value="acessar" style="font-family: verdana;">Entrar </button>
					
																
				</div>
                								
				</div>
				</div>

				</div>

				
							


																
				</div>
                
				<a class="small text-muted" href="#!" style="font-family: verdana;color: #33333a;display: flex;" style="font-size: 30px;">Esqueci minha senha</a>

				<p class="mb-5 pb-lg-2" style="color: #35363a;" style="font-family: verdana;"style="font-size: 30px;">Novo aqui? <a href="paciente/increvasePA.html"
					style="color: #33333a;"  style="font-family: verdana;color: #33333a;"style="font-size: 30px;">Cadastre-se como Paciente </a>ou 
                    <a href="profissional/inscrevasePR.html"  style="font-family: verdana;color:#33333a;">como Médico</a>

                    
                
                </p>
                    
               
		</div>



        
	</form>
</body>
</html>


				