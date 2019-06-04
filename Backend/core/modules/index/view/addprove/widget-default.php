<?php

if(count($_POST)>0){
	$user = new ProveData();
	$user->nomb = $_POST["nombre"];
	$user->nume = $_POST["numero"];
	$user->corr= $_POST["correo"];
	$user->direc = $_POST["direccion"];
	$user->mar = $_POST["marca"];


	$u = $user->add();


	print "<script>window.location='index.php?view=prove';</script>";

	}

?>
