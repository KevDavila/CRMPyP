<?php

if(count($_POST)>0){
	$user = new GastosData();
	$user->monto = $_POST["monto"];
	$user->descripcion = $_POST["descripcion"];
	//$user->fecha = $_POST["fecha"];
	

	


	$u = $user->add();


//print "<script>window.location='index.php?view=gastos';</script>";


}


?>