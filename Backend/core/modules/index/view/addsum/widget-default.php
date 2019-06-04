<?php

if(count($_POST)>0){
	$user = new SumData();
	$user->codi_summ = $_POST["codi_summ"];
	$user->nom_summ = $_POST["nom_summ"];
	$user->color_summ = $_POST["color_summ"];
	$user->modelo_summ = $_POST["modelo_summ"];
	$user->descrip_summ = $_POST["descrip_summ"];
	$user->precio_summ = $_POST["precio_summ"];
	$user->cant_summ = $_POST["cant_summ"];

	$u = $user->add();


print "<script>window.location='index.php?view=sum';</script>";


}


?>
