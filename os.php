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

		<script>
			window.onload = function() {
			var imprimir = document.querySelector("#imprimir");
		    imprimir.onclick = function() {
		    	imprimir.style.display = 'none';
		    	window.print();
                
		    	var time = window.setTimeout(function() {
		    		imprimir.style.display = 'block';
		    	}, 1000);
		    }
			}
		</script>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- Bootstrap core CSS -->

		<link href="/docs/4.1/dist/css/bootstrap.css" rel="stylesheet">


		<!-- Documentation extras -->

		<link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">

		<link href="/docs/4.1/assets/css/docs.min.css" rel="stylesheet">
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-left">
	      	<div class="container">
	        		<div class="navbar-header"><br/>
	        			<img src="imagens/icon_assistencia.png" width="50px" height="50px" />

	        			<h5 style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2">OS Fácil</h5>

	        			<br />   			
					</div>

					<div style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2">

						<br/>
						<br/>

							<nav aria-label="breadcrumb" class="navbar-right">
  								<ol class="breadcrumb">
  									<h4 align="center"><?= $_SESSION['usuario'] ?></h4>
  									<li class="breadcrumb-item"><a href="home.php">Home</a></li>
    								<li class="breadcrumb-item"><a href="cadastro.php">Cadastrar</a></li>
    								<li class="breadcrumb-item active" aria-current="page">Lançar OS</li>
    								<li class="breadcrumb-item"><a href="consulta.php">Consultas</a></li>
  								</ol>
							</nav>
	        		</div>


	        			
	        				
						       		
	        </div>
	    </nav>

	   	



	    	<div class="col-md-4"></div>  	
	    		
	    			<div class="col-md-4">
	    		<h3 style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2">Lançamento OS</h3>
	    		<br />
				<form method="post" action="conf_os.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Serial Number" required="requiored">
						
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="IMEI" required="requiored">
						
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


					<a href="conf_os.php">
						<button type="submit"class="btn btn-primary form-control">Gravar e Imprimir</button>
					</a>
				</form>	
	    	</div>

	    	<div class="col-md-4"></div>



	    	
	    	


			
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>