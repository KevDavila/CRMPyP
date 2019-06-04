<?php
$alumn = ClienteData::getById($_GET["id"]);
?>
<div class="row">
	<div class="col-md-12">
	<h1>Actualizar Cliente</h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?action=updatecliente" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" value="<?php echo $alumn->nombre;?>" name="nombre" required class="form-control" id="name" placeholder="Nombre" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" value="<?php echo $alumn->apellido;?>" name="apellido" required class="form-control" id="name" placeholder="Apellido" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Edad*</label>
    <div class="col-md-6">
      <input type="text" value="<?php echo $alumn->edad;?>" name="edad"  class="form-control" id="name" placeholder="edad" required="">
    </div>
  </div>

	<div class="form-group">
	<label for="inputEmail1" class="col-lg-2 control-label">Fecha de nacimiento*</label>
	<div class="col-md-6">
		<input type="date" value="<?php echo $alumn->fecha_nacimiento;?>" name="fecha_nacimiento"  class="form-control" id="name" placeholder="Fecha de Nacimiento" required="">
	</div>
</div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" value="<?php echo $alumn->numero_telefono; ?>" name="marca"  class="form-control" id="name" placeholder="Marca" required="">
    </div>
  </div>

	<div class="form-group">
	<label for="inputEmail1" class="col-lg-2 control-label">Correo*</label>
	<div class="col-md-6">
		<input type="text" value="<?php echo $alumn->correo; ?>" name="marca"  class="form-control" id="name" placeholder="Marca" required="">
	</div>
</div>

<p class="alert alert-info">* Campos obligatorios</p>
<br>
<div class="form-group">
	<div class="col-lg-offset-2 col-lg-10">
	<input type="hidden" name="alumn_id" value="<?php echo $_GET["id"];?>">
	<input type="hidden" name="alumn_id" value="<?php echo $_GET["id"];?>">
	<a href="index.php?view=clientes" type="submit" class="btn btn-danger">Cancelar</a>
		<button type="submit" class="btn btn-primary">Actualizar Datos</button>
	</div>
</div>
</form>
	</div>
	</div>
