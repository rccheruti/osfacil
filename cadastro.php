<?php

require_once("session_start.php");

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
			$(document).ready(function(){$("#cpf").mask("999.999.999-99");});
		</script>


	</head>

<body>
	 <div class="container">
	    	
	    		    	
		<div class="col-md-3"></div>
	    	

			<div class="col-md-6">
				<h3 style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2" align="center">Cliente</h3>
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

					
					<button type="submit" class="btn btn-primary form-control">Gravar</button>
				</form>

			</div>

			<div class="col-md-3">
	    	</div>

			<div class="clearfix"></div>
			<br />
			
			</div>
	    </div>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>