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

<script src="js/sair.js" onload="setTimeout()"></script>


<body>


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