<?php

if(count($_POST)>0){
	$user = new EmpleadoData();
	$user->name = $_POST["name"];
	$user->lastname = $_POST["lastname"];
	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->department = $_POST["department"];
	

	


	$u = $user->add();


print "<script>window.location='index.php?view=persons';</script>";


}


?>