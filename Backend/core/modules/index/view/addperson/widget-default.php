<?php

if(count($_POST)>0){
	$user = new EmpleadoData();
	$user->monto = $_POST["name"];
	$user->descripcion = $_POST["lastname"];
	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->department = $_POST["department"];
	

	


	$u = $user->add();


print "<script>window.location='index.php?view=persons';</script>";


}


?>