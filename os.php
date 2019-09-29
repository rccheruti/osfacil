<?php

require_once("session_start.php");

?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>OS Fácil</title>

		<script src="js/funcoes.js"></script>
		
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
		<div class="col-md-3"></div>  	
	    		
	    			<div class="col-md-6">
	    		<h3 style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2" align="center">Lançamento OS</h3>
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

	    	<div class="col-md-3"></div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>