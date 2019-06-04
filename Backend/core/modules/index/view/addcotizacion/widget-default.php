<?php

if(count($_POST)>0){
	$user = new CotizacionData();
	$user->rf = $_POST["rfc"];
	$user->prod  = $_POST["producto"];
	$user->canti  = $_POST["cantidad"];
	$user->precio_prod  = $_POST["precio_producto"];
	$user->precio_inst  = $_POST["precio_instalacion"];
	$user->fecha_inst  = $_POST["fecha_instalacion"];
	$user->id_clien  = $_POST["id_cliente"];
	$user->nomb  = $_POST["nombre"];
	$user->apel = $_POST["apellido"];

	$u = $user->add();
print "<script>window.location='index.php?view=cotizacion';</script>";


}


?>
