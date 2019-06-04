<?php
$user = SumData::getById($_GET["id_sum"]);
$user->del();
print "<script>window.location='index.php?view=suministro';</script>";

?>