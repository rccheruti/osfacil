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

        <!--bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" rel="stylesheet" >
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" rel="stylesheet" >
        <link href="css/estilos.css" type="text/css"  rel="stylesheet">
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