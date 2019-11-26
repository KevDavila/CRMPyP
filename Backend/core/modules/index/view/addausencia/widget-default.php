<?php

if(count($_POST)>0){
	$user = new AssistanceData();
	$user->f_inici = $_POST["f_inic"];
	$user->f_final = $_POST["f_fin"];
	$user->aut = $_POST["autorizo"];
	

	$u = $user->addaus();


print "<script>window.location='index.php?view=ausencias';</script>";


}


?>