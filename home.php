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

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



		
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

  									<li class="breadcrumb-item active" aria-current="page">Home</li>
  									<?php

  									$usuario_logado = 'admin';

  									if($usuario == $usuario_logado) {
  										echo '<li class="breadcrumb-item"><a href="adm_usuarios.php">Administração</a></li>';
  									}

  									?>
    								<li class="breadcrumb-item"><a href="cadastro.php">Cadastrar</a></li>
    								<li class="breadcrumb-item"><a href="os.php">Lançar OS</a></li>
    								<li class="breadcrumb-item"><a href="consulta.php">Consultas</a></li>
    								<li class="breadcrumb-item"><a href="sair.php">Sair</a></li>
  								</ol>
						</nav>						
	        		</div>		        			   		
	        </div>
	    </nav>

	   	<div class="container">
	   		 <div id="myCarousel" class="carousel slide" data-ride="carousel">

	   		 	  				
    			<!-- Wrapper for slides -->
    			<div class="carousel-inner">
      				<div class="item active">
        				<img src="imagens/img_01.png" alt="" style="width:100%; height:500px;">
      				</div>

      				<div class="item">
        				<img src="imagens/img_02.png" alt="" style="width:100%; height:500px;">
      				</div>
    
      				<div class="item">
        				<img src="imagens/img_03.png" alt="" style="width:100%; height:500px;">
      				</div>

      				<div class="item">
        				<img src="imagens/img_04.png" alt="" style="width:100%; height:500px;">
      				</div>
    			</div>	
    		</div>
		</div>

		<div class="container">
			<div style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2">
			<h6 align="center">RogerCheruti®2019</h6>
			</div>
		</div>






		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>