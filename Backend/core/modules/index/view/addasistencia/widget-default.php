<?php

if(count($_POST)>0){
	$user = new AssistanceData();
	$user->id_hora = $_POST["id_horario"];
	$user->hentrada = $_POST["hentrada"];
	$user->hsalida = $_POST["hsalida"];
	$user->fecha = $_POST["fecha"];
	$user->hextra = $_POST["hextra"];

	$u = $user->add();


print "<script>window.location='index.php?view=assistance';</script>";


}


?>