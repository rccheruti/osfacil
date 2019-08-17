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
    								<li class="breadcrumb-item"><a href="cadastro.php">Cadastrar</a></li>
    								<li class="breadcrumb-item"><a href="os.php">Lançar OS</a></li>
    								<li class="breadcrumb-item"><a href="consulta.php">Consultas</a></li>
  								</ol>
						</nav>
	        		</div>


	        			      		
	        </div>
	    </nav>

	    <div class="container row">	    	
	    	<div class="col-md-4">

<h1>Lorem Ipsum</h1>
<h3><p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
"Não há quem goste de dor, que a procure e a queira ter, simplesmente porque é dor..."
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Sed nec dui vestibulum, cursus ipsum nec, dignissim lectus.
Maecenas malesuada ex eget felis pharetra, in placerat eros pellentesque.
In interdum dui eu aliquam rhoncus.</p>	



			</div>
	    	<div class="col-md-4"	>

	    			    		
<p><h3>Sed at dui sagittis, accumsan sem sit amet, efficitur dui.
Nam et lorem aliquam felis fringilla maximus sed varius est.
Morbi in mi eu libero imperdiet posuere id eget mi.
Nunc laoreet enim eu mauris blandit feugiat.
Aliquam et risus in ex egestas gravida.
Morbi congue felis quis enim convallis egestas.
Proin interdum lacus id tincidunt aliquam.
Donec faucibus purus vitae magna efficitur laoreet.

</h3>
</div>

<div class="col-md-4">
	<p><h3>Nunc venenatis magna sit amet ex convallis facilisis.
Curabitur convallis lorem venenatis ligula pharetra fringilla.
Maecenas facilisis turpis in dui venenatis, et sagittis libero pretium.
Mauris interdum turpis nec est tristique, non hendrerit dui blandit.
Maecenas malesuada tellus consectetur massa facilisis efficitur.
Duis tempus turpis quis vehicula ornare.</p>
	
</div>
	    </div>
	    <div align="center">
	    	<button id="imprimir" class="btn btn-primary">Imprimir</button>
		</div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>