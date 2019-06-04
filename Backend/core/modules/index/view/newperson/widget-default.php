<div class="row">
	<div class="col-md-12">
	<h1>Nueva Persona</h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?view=addperson" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre(s)*</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido(s)*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" required class="form-control" id="name" placeholder="Apellidos" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Domicilio*</label>
    <div class="col-md-6">
      <input type="text" name="address"  class="form-control" id="name" placeholder="Domicilio" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email"  class="form-control" id="name" placeholder="Email" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="phone"  class="form-control" id="name" placeholder="Telefono" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Departamento*</label>
    <div class="col-md-6">
      <input type="text" name="department"  class="form-control" id="name" placeholder="Departamento" required="">
    </div>
  </div>
<!--
<h2>Contacto</h2>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre completo*</label>
    <div class="col-md-6">
      <input type="text" name="c1_fullname" class="form-control" id="name" placeholder="Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Domicilio*</label>
    <div class="col-md-6">
      <input type="text" name="c1_address"  class="form-control" id="name" placeholder="Domicilio">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="c1_phone"  class="form-control" id="name" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nota</label>
    <div class="col-md-6">
      <textarea name="c1_note"  class="form-control" placeholder="Nota"></textarea>
    </div>
  </div>
  -->
  <p class="alert alert-info">* Campos obligatorios</p>
  <br>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="team_id" value="<?php echo $_GET["team_id"];?>">
      <a href="index.php?view=persons" type="submit" class="btn btn-danger">Cancelar</a>
      <button type="submit" class="btn btn-primary">Agregar Empleado</button>
    </div>
  </div>

</form>
	</div>
</div>