<?php

if(count($_POST)>0){
	$user = ClienteData::getById($_POST["alumn_id"]);
	$user->nombre = $_POST["nombre"];
	$user->apellido = $_POST["apellido"];
	$user->edad = $_POST["edad"];
	$user->fecha_nacimiento = $_POST["fecha_nacimiento"];
	$user->numero_telefono = $_POST["numero_telefono"];
	$user->correo = $_POST["correo"];

	$u = $user->update();
Core::alert("Actualizado Exitosamente!");
print "<script>window.location='index.php?view=clientes';</script>";


}


?>
