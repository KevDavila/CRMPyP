<?php

if(count($_POST)>0){
	$user = new EmpleadoData();
	$user->id = $_POST["id"];
	
	

	


	$u = $user->del();


print "<script>window.location='index.php?view=persons';</script>";


}


?>