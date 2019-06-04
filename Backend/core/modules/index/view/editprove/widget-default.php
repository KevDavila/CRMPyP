<?php
$alumn = ProveData::getById($_GET["folio"]);
?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Proveedor</h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?action=updateprove" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre del proveedor*</label>
    <div class="col-md-6">
      <input type="text" value="<?php echo $alumn->nombre; ?>" name="nombre" required class="form-control" id="name" placeholder="Nombre del proveedor" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Número de telefono*</label>
    <div class="col-md-6">
      <input type="text" value="<?php echo $alumn->numero; ?>" name="numero" required class="form-control" id="name" placeholder="Número" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Correo*</label>
    <div class="col-md-6">
      <input type="text" value="<?php echo $alumn->correo; ?>" name="correo"  class="form-control" id="name" placeholder="Correo" required="">
    </div>
  </div>

	<div class="form-group">
	<label for="inputEmail1" class="col-lg-2 control-label">Dirección*</label>
	<div class="col-md-6">
		<input type="text" value="<?php echo $alumn->direccion; ?>" name="direccion"  class="form-control" id="name" placeholder="Dirección" required="">
	</div>
</div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Marca*</label>
    <div class="col-md-6">
      <input type="text" value="<?php echo $alumn->marca; ?>" name="marca"  class="form-control" id="name" placeholder="Marca" required="">
    </div>
  </div>



  <p class="alert alert-info">* Campos obligatorios</p>
  <br>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="alumn_id" value="<?php echo $_GET["folio"];?>">
    <input type="hidden" name="alumn_id" value="<?php echo $_GET["folio"];?>">
    <a href="index.php?view=prove" type="submit" class="btn btn-danger">Cancelar</a>
      <button type="submit" class="btn btn-primary">Actualizar Datos</button>
    </div>
  </div>

</form>
	</div>
