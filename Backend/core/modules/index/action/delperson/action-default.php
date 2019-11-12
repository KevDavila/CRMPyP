<?php
$user = EmpleadoData::getById($_GET["id_empleado"]);
$user->del();
print "<script>window.location='index.php?view=persons';</script>";

	

?>