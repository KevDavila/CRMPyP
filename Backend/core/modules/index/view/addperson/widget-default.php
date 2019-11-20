<?php

if(count($_POST)>0){
	$user = new EmpleadoData();
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->address = $_POST["address"];
	$user->phone = $_POST["phone"];
	$user->department = $_POST["department"];
	$user->rfc = $_POST["rfc"];
	$user->escolaridad = $_POST["escolaridad"];
	$user->direccion = $_POST["direccion"];
	$user->telefono = $_POST["telefono"];
	$user->correo = $_POST["correo"];
	$user->ingreso = $_POST["ingreso"];
	$user->idhorario = $_POST["idhorario"];

	


	$u = $user->add();


print "<script>window.location='index.php?view=persons';</script>";


}


?>