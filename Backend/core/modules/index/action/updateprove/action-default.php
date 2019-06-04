<?php

if(count($_POST)>0){
	$user = ProveData::getById($_POST["alumn_id"]);
	$user->nombre = $_POST["nombre"];
	$user->numero = $_POST["numero"];
	$user->correo = $_POST["correo"];
	$user->direccion = $_POST["direccion"];
	$user->marca = $_POST["marca"];


	$u = $user->update();

	Core::alert("Actualizado Exitosamente!");
	print "<script>window.location='index.php?view=prove';</script>";

	}

?>
