<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Cliente</h1>
	<br>
		<form class="form-horizontal" method="POST" id="addcategory" action="index.php?view=addclient" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  

	<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Edad*</label>
    <div class="col-md-6">
      <input type="text" name="edad" required class="form-control" id="name" placeholder="Edad">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion*</label>
    <div class="col-md-6">
      <input type="text" name="Direccion" required class="form-control" id="name" placeholder="Direccion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de nacimiento*</label>
    <div class="col-md-6">
      <input type="date" name="fecha_nacimiento"  class="form-control" id="name" placeholder="Fecha de nacimiento">
    </div>
  </div>

	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
		<div class="col-md-6">
			<input type="text" name="numero_telefono"  class="form-control" id="name" placeholder="Telefono">
		</div>
	</div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Correo*</label>
    <div class="col-md-6">
      <input type="text" name="correo"  class="form-control" id="name" placeholder="Correo">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="team_id" value="<?php echo $_GET["team_id"];?>">
      <button type="submit" class="btn btn-primary">Agregar Cliente</button>
    </div>
  </div>
</form>
	</div>
</div>
