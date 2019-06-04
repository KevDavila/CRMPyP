<?php

if(count($_POST)>0){
			$user = CotizacionData::getById($_POST["alumn_id"]);
			$user->rfc = $_POST["rfc"];
			$user->producto  = $_POST["producto"];
			$user->cantidad  = $_POST["cantidad"];
			$user->precio_producto  = $_POST["precio_producto"];
			$user->precio_instalacion  = $_POST["precio_instalacion"];
			$user->fecha_instalacion  = $_POST["fecha_instalacion"];
			$user->id_cliente  = $_POST["id_cliente"];
			$user->nombre  = $_POST["nombre"];
			$user->apellido = $_POST["apellido"];

			$u = $user->update();
			Core::alert("Actualizado Exitosamente!");
			print "<script>window.location='index.php?view=cotizacion';</script>";
	}
?>
