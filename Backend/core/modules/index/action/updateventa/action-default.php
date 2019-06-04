<?php

if(count($_POST)>0){
	$user = VentaData::getById($_POST["alumn_id"]);
	$user->estatus = $_POST["estatus"];

	$user->user_id = $_SESSION["user_id"];

	$u = $user->update();

Core::alert("Actualizado Exitosamente!");
print "<script>window.location='index.php?view=reportes';</script>";


}


?>
