<?php

if(count($_POST)>0){
	$user = SumData::getById($_POST["alumn_id"]);
	$user->nom_sum = $_POST["nom_sum"];
	$user->cant_sum = $_POST["cant_sum"];
	$user->price = $_POST["price"];


	$u = $user->update();

	Core::alert("Actualizado Exitosamente!");
	print "<script>window.location='index.php?view=suministro';</script>";

	}

?>
