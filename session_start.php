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

	date_default_timezone_set('America/Sao_Paulo');

	$date = date('d/m/Y');
	$date2 = date('d/m/Y H:m:s')

?>