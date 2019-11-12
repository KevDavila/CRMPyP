<?php

if(count($_POST)>0){
	$user = new SumData();
	$user->codigo_barra = $_POST["codi_summ"];
	$user->tipo_producto = $_POST["nom_summ"];
	$user->color = $_POST["color_summ"];
	$user->modelo = $_POST["modelo_summ"];
	$user->descripcion = $_POST["descrip_summ"];
	$user->precio_unitario = $_POST["precio_summ"];
	$user->cantidad = $_POST["cant_summ"];

	$u = $user->add();


print "<script>window.location='index.php?view=sum';</script>";


}


?>
