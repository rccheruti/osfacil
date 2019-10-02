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

	$erro_usuario	= isset($_GET['erro_usuario'])	? $_GET['erro_usuario'] : 0;
	$erro_email		= isset($_GET['erro_email'])	? $_GET['erro_email']	: 0;

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

        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" rel="stylesheet" >
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" rel="stylesheet" >
        <link href="css/estilos.css" type="text/css"  rel="stylesheet">
	</head>

	<body>

					<div class="col-md-4"></div>	    	
	    			<div class="col-md-4">
	    				<h3 style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2" align="center">Inserir novo usuário</h3>
	    				<br />
					<form method="post" action="registra_usuario.php" id="formCadastrarse">
						<div class="form-group">
							<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
								<?php
									if($erro_usuario){ // 1/true 0/false
										echo '<font style="color:#FF0000">Usuário já existe</font>';
									}
								?>
						</div>

						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
							<?php
								if($erro_email){
									echo '<font style="color:#FF0000">E-mail já existe</font>';
								}
							?>
						</div>
					
						<div class="form-group">
							<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
						</div>

						<button type="submit" class="btn btn-primary form-control" >Inserir</button>
					</form>
					</div>

					<div class="col-md-4"></div>
					<div class="clearfix"></div>
					<div class="col-md-4"></div>
					<div class="col-md-4"></div>
					<div class="col-md-4"></div>
			
					





		

			
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>