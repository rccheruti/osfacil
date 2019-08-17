<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);

echo '<script>
		setTimeout(function(){
		window.location.href="index.php";},2000);</script>'

?>
<!DOCTYPE html>
<html>
<head>
	<title>OS Fácil</title>
</head>
<body>

<nav class="navbar navbar-default navbar-static-left">
	      	<div class="container">
	        		<div class="navbar-header" align="center">
	        			<br/>
	        			<img src="imagens/icon_assistencia.png" width="100px" height="100px" />

	        			<h4 style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2">OS Fácil</h4>
	        			
	        			<br />   			
					</div>						        			   		
	        </div>
</nav>

	<div style="text-shadow: 0.1em 0.1em 0.15em #5fa8d2">
		<center>
			<br />
			<br />
			<h1>
				Obrigado por usar nosso sistema!
			</h1>

			<br />
			<h3>
				RogerCheruti®2019
			</h3>
		</center>
	</div>


</body>
</html>