<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Empleado</h1>
	<br>
		<form class="form-horizontal" method="POST" id="addcategory" action="index.php?view=addperson" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre(s)*</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombre" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido Paterno*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" required class="form-control" id="name" placeholder="Apellido Paterno" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido Materno</label>
    <div class="col-md-6">
      <input type="text" name="address"  class="form-control" id="name" placeholder="Apellido Materno" required="">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento</label>
    <div class="col-md-6">
      <input type="text" name="phone"  class="form-control" id="name" placeholder="Fecha de Nacimiento" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">RFC</label>
    <div class="col-md-6">
      <input type="text" name="rfc"  class="form-control" id="name" placeholder="RFC" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Escolaridad</label>
    <div class="col-md-6">
      <input type="text" name="escolaridad"  class="form-control" id="name" placeholder="Escolaridad" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
    <div class="col-md-6">
      <input type="text" name="direccion"  class="form-control" id="name" placeholder="Direccion" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-md-6">
      <input type="text" name="telefono"  class="form-control" id="name" placeholder="Telefono" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Correo</label>
    <div class="col-md-6">
      <input type="mail" name="correo"  class="form-control" id="name" placeholder="Correo" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Departamento*</label>
    <div class="col-md-6">
      <input type="text" name="department"  class="form-control" id="name" placeholder="Departamento" required="">
    </div>
  </div>

   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Ingreso</label>
    <div class="col-md-6">
      <input type="text" name="ingreso"  class="form-control" id="name" placeholder="Fecha de Ingreso" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">ID Horario</label>
    <div class="col-md-6">
      <input type="text" name="idhorario"  class="form-control" id="name" placeholder="ID Horario" required="">
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