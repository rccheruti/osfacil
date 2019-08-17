<?php 

session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$id_usuario = $_SESSION['id_usuario'];
	$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>OS Fácil</title>
		
		<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>



		<script type="text/javascript" src="js/jquery.maskedinput-1.1.4.pack.js"/></script>

		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- Bootstrap core CSS -->

		<link href="/docs/4.1/dist/css/bootstrap.css" rel="stylesheet">


		<!-- Documentation extras -->

		<link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">

		<link href="/docs/4.1/assets/css/docs.min.css" rel="stylesheet">

		<script>
		$(document).ready(function(){
		$("#cpf").mask("999.999.999-99");
		});
		</script>


	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-left">
	      	<div class="container">
	        		<div class="navbar-header" style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2"><br/>
	        			<img src="imagens/icon_assistencia.png" width="50px" height="50px" />

	        			<h5>OS Fácil</h5>

	        			<br />   			
					</div>

					<div style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2">

						<br/>
						<br/>
						<nav aria-label="breadcrumb" class="navbar-right">
  								<ol class="breadcrumb">
  									<h4 align="center"><?= $_SESSION['usuario'] ?></h4>
  									<li class="breadcrumb-item"><a href="home.php">Home</a></li>
    								<li class="breadcrumb-item active" aria-current="page">Cadastrar</li>
    								<li class="breadcrumb-item"><a href="os.php">Lançar OS</a></li>
    								<li class="breadcrumb-item"><a href="consulta.php">Consultas</a></li>
  								</ol>
						</nav>
	        		</div>


	        			      		
	        </div>
	    </nav>

	   	



	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-5">
	    		<h3 style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2">Equipamento</h3>
	    		<br />
				<form method="post" action="#" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Serial Number" required="requiored">
						
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="IMEI" required="requiored">
						
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" id="senha" name="senha" placeholder="Marca" required="requiored">
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" id="senha" name="senha" placeholder="Modelo" required="requiored">
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" id="senha" name="senha" placeholder="Cor" required="requiored">
					</div>
														
					<div class="form-group">
						<input type="text" class="form-control" id="senha" name="senha" placeholder="Observações" required="requiored">
					</div>


					<button type="submit" class="btn btn-primary form-control">Gravar</button>
				</form>	
	    	</div>

	    	<div class="col-md-2">
	    	</div>

			<div class="col-md-5">
				<h3 style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2">Cliente</h3>
	    		<br />
				<form method="post" action="#" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required="requiored">

						
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" required="requiored">
						
					</div>
					
					<div class="form-group">
						<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua/Numero/Complemento" required="requiored">
					</div>


					<div class="form-group">
						<input type="text" class="form-control" id="senha" name="senha" placeholder="CEP" required="requiored">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="senha" name="senha" placeholder="Bairro/Cidade/Estado" required="requiored">
					</div>


					<div class="form-group">
						<input type="text" class="form-control" id="senha" name="senha" placeholder="Telefone" required="requiored">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="senha" name="senha" placeholder="Celular" required="requiored">
					</div>

					
					<button type="submit" class="btn btn-primary form-control">Gravard</button>
				</form>

			</div>

			<div class="clearfix"></div>
			<br />
			
			</div>
	    </div>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>