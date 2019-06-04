<?php

if(count($_POST)>0){
	$user = ProductData::getById($_POST["alumn_id"]);
	$user->Color = $_POST["Color"];
	$user->modelo = $_POST["modelo"];
	$user->cantidad = $_POST["cantidad"];

	$user->user_id = $_SESSION["user_id"];


		$u = $user->update();
	Core::alert("Actualizado Exitosamente!");
	print "<script>window.location='index.php?view=listproduct';</script>";
	}
?>
