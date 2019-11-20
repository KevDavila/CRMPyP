<?php
$user = AssistanceData::getById($_GET["id_horario"]);
$user->del();
print "<script>window.location='index.php?view=assistance';</script>";

	

?>