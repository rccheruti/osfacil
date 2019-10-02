<?php

require_once("session_start.php");

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>OS Fácil</title>
        <!--javascript		-->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/fazerRequisicao.js"></script>
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>



        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" rel="stylesheet" >
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" rel="stylesheet" >
        <link href="css/estilos.css" type="text/css"  rel="stylesheet">
                



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
  									
  									<?php
											  	
											  	if($usuario == 'admin')
											  	{	

											  		echo "<li class=\"breadcrumb-item\"><a onclick=\"fazerRequisicao('adm_usuarios.php', 'div_conteudo')\">Administração</a></li>";
											  	}

									?>

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
	   		<div class="col-md-12" id="div_conteudo">
	   			<script>$("#div_conteudo").load("home_init.php");</script>
	   		</div>
		</div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>