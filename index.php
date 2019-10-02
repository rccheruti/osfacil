<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

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

		<script>
			$(document).ready( function(){

				//verificar se os campos de usuário e senha foram devidamente preenchidos
				$('#btn_login').click(function(){

					var campo_vazio = false;

					if($('#campo_usuario').val() == ''){
						$('#campo_usuario').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_usuario').css({'border-color': '#CCC'});
					}

					if($('#campo_senha').val() == ''){
						$('#campo_senha').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_senha').css({'border-color': '#CCC'});
					}

					if(campo_vazio) return false;
				});
			});					
		</script>


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
	        </div>
	    </nav>

	   		<div class="container">
	   		 	<div class="col-md-4">
	   		 		

    			</div>

    			<div class="col-md-4">
      				
      				<form method="post" action="validar_acesso.php" id="formLogin">
      							<p style="text-align: center; font-size: 30px; text-shadow: 0.1em 0.1em 0.15em #5fa8d2">Login</p>
								
								<div class="form-group">
									<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
								</div>

									<button type="buttom" class="btn btn-primary form-control" id="btn_login" align="center">Entrar</button>
													

					</form>
							<?php
								if($erro == 1){
									echo '<font color="#FF0000">Usuário e ou senha inválido(s)</font>';
								}
							?>

				</div>

				<div class="col-md-4">
					
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