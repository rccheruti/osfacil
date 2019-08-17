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

<!--CSS-->

<style class="cp-pen-styles">

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}</style>





<!--fim css-->	



		
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
    								<li class="breadcrumb-item"><a href="os.php">Lançar OS</a></li>
    								<li class="breadcrumb-item active" aria-current="page">Consultas</li>
  								</ol>
						</nav>
	        		</div>	        			
	        </div>
	    </nav>

	   	



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