<?php

require_once("session_start.php");

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>OS Fácil</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  		<script type="text/javascript" src="js/fazerRequisicao.js"></script>



		
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
	    <nav class="navbar navbar-default">
	      	<div class="container">
	        		<div class="navbar-header">
	        			<br/>
	        			<img src="imagens/icon_assistencia.png" width="50px" height="50px" />

	        			<h5 style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2">OS Fácil</h5>    			
	        			
	        			<br />

					</div>

					<div style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2">

						
						<br/>
						<br/>

	        		
	        			<nav aria-label="breadcrumb">
	        				
  								<ol class="breadcrumb navbar-right">
  								<h4 align="center"><?= $_SESSION['usuario'] ?></h4>

  									<li class="breadcrumb-item"><a onclick="fazerRequisicao('home_init.php', 'div_conteudo')">Home</a></li>  									
    								<li class="breadcrumb-item"><a onclick="fazerRequisicao('cadastro.php', 'div_conteudo')">Cadastrar</a></li>
    								<li class="breadcrumb-item"><a onclick="fazerRequisicao('os.php', 'div_conteudo')">Lançar OS</a></li>
    								<li class="breadcrumb-item"><a onclick="fazerRequisicao('consulta.php', 'div_conteudo')">Consultas</a></li>
    								<li class="breadcrumb-item"><a onclick="fazerRequisicao('sair.php', 'div_conteudo')">Sair</a></li>
  								</ol>
						</nav>						
	        		</div>		        			   		
	        </div>
	    </nav>

	   	<div class="container">
	   		<div class="col-md-12" id="div_conteudo" onload="home_init.php"></div>
		</div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>