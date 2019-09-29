<?php

  	$usuario_logado = 'admin';

  	if($usuario == $usuario_logado)
  	{
  		echo "<li class='breadcrumb-item'><a onclick='fazerRequisicao('adm_usuarios.php', 'div_conteudo')'>Administração</a></li>";
  	}

?>