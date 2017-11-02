<?php 

	require_once("config.php");

	$sql = new Sql();

	$usuarios = $sql->select("SELECT * FROM tb_usuario");

	print_r($usuarios);

	// Não está funcionado --> echo json_encode($usuarios);


 ?>