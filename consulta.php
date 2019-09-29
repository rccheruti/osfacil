<?php

require_once("session_start.php");

?>
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>OS Fácil</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- Bootstrap core CSS -->

		<link href="/docs/4.1/dist/css/bootstrap.css" rel="stylesheet">


		<!-- Documentation extras -->

		<link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
	
		<link type="text/css" href="css/estilos.css" rel="stylesheet"></link>
</head>

	<body>

		
	    <div class="container">	  
	    	<div class="col-md-4">
	    		<form method="post" action="consulta.php?#popup0" id="consultas">	    		
	    			<div class="form-grup">
					<input type="text" class="form-control" id="os" name="os" placeholder="Nº OS" required="requiored">
					<br/>
					<a href="#popup0">
					<button class="btn btn-primary form-control">Consultar</button>
					</a>
				</form>
			</div>
	    </div>
	    <div class="container">
	    	<div class="col-md-4">
	    		<form method="post" action="consulta.php?#popup1" id="consultas">
	    		
	    			<div class="form-grup">
					<input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" required="requiored">
					<br/>
					<a href="#popup1">
					<button class="btn btn-primary form-control">Consultar</button>
					</a>
				</form>
			</div>
		</div>


			<div class="container">
	    		<div class="col-md-4">
	    			<form method="post" action="consulta.php?#popup2" id="consultas">
	    		
	    			<div class="form-grup">
					<input type="text" class="form-control" id="serial" name="serial" placeholder="Serial number" required="requiored">
					<br/>
					<a href="#popup2">
					<button class="btn btn-primary form-control">Consultar</button>
					</a>
				</form>
				</div>
			</div>


				<div id="popup0" class="overlay">
					<div class="popup">
						<h3>Resultados OS</h3>
						<a class="close" href="#">&times;</a>
						<div class="content">

							OS: 001
							<br/>
							Nome: Josnel Teste da Silva

							<br/><hr/>
							<a href="resultado.php">
								<button>Abrir</button>
							</a>							

						</div>
					</div>
				</div>

				<div id="popup1" class="overlay">
					<div class="popup">
						<h3>Resultados</h3>
						<a class="close" href="#">&times;</a>
						<div class="content">
							
							Nome: Josnel Teste da Silva
							<br />	
							CPF: 000 111 222 33
							
							<br/><hr/>
							<a href="resultado.php">
								<button>Abrir</button>
							</a>
							

						</div>
					</div>
				</div>

				<div id="popup2" class="overlay">
					<div class="popup">
						<h3>Resultados</h3>
						<a class="close" href="#">&times;</a>
						<div class="content">

							SN: 0001
							<br />
							Samsung A20

							<br/><hr/>
							<a href="resultado.php">
								<button>Abrir</button>
							</a>
							
						</div>
					</div>
				</div>






	    	</div>
	    </div>


		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>