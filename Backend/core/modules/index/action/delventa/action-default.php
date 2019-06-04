<?php
$user = VentaData::getById($_GET["id"]);

$id = '';
if( isset( $_POST['id'])) {
    $id = $_POST['id'];
}
$user->del();
print "<script>window.location='index.php?view=persons';</script>";

?>
