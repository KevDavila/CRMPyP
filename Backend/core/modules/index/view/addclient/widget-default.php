<?php

if(count($_POST)>0){
	$user = new ClienteData();
	$user->nomb = $_POST["nombre"];
	$user->apel = $_POST["apellido"];
	$user->ed = $_POST["edad"];
	$user->fec = $_POST["fecha_nacimiento"];
	$user->nume = $_POST["numero_telefono"];
	$user->corr = $_POST["correo"];

	$u = $user->add();


print "<script>window.location='index.php?view=clientes';</script>";


}


?>
