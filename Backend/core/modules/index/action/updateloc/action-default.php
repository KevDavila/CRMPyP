<?php

if(count($_POST)>0){
	$user = LocData::getById($_POST["alumn_id"]);
	$user->nom_loc = $_POST["nom_loc"];
	$user->encargado = $_POST["encargado"];
	$user->num_telefono = $_POST["num_telefono"];
	$user->dr_loc = $_POST["dr_loc"];
	$u = $user->update();

	Core::alert("Actualizado Exitosamente!");
	print "<script>window.location='index.php?view=locals';</script>";

	}

?>
