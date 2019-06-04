<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Proveedor</h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?view=addprove" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre del proveedor*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="name" placeholder="Nombre del proveedor" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Número de telefono*</label>
    <div class="col-md-6">
      <input type="text" name="numero" required class="form-control" id="name" placeholder="Número de telefono" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Correo*</label>
    <div class="col-md-6">
      <input type="text" name="correo"  class="form-control" id="name" placeholder="Correo" required="">
    </div>
  </div>

	<div class="form-group">
	<label for="inputEmail1" class="col-lg-2 control-label">Dirección*</label>
	<div class="col-md-6">
		<input type="text" name="direccion"  class="form-control" id="name" placeholder="Dirección" required="">
	</div>
</div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Marca*</label>
    <div class="col-md-6">
      <input type="text" name="marca"  class="form-control" id="name" placeholder="Marca" required="">
    </div>
  </div>



  <p class="alert alert-info">* Campos obligatorios</p>
  <br>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="team_id" value="<?php echo $_GET["folio"];?>">
      <a href="index.php?view=prove" type="submit" class="btn btn-danger">Cancelar</a>
      <button type="submit" class="btn btn-primary">Agregar Proveedor</button>
    </div>
  </div>

</form>
	</div>
</div>
