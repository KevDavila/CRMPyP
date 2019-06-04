<?php
$alumn = PersonData::getById($_GET["id"]);
?>
<div class="row">
	<div class="col-md-12">
	<h1>Datos del Empleado</h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?action=updateperson" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre(s)</label>
    <div class="col-md-6">
      <input type="text" name="name" value="<?php echo $alumn->name; ?>" required class="form-control" id="name" placeholder="Nombre" readonly="readonly">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellidos</label>
    <div class="col-md-6">
      <input type="text" name="lastname" value="<?php echo $alumn->lastname; ?>" required class="form-control" id="name" placeholder="Apellidos" readonly="readonly">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Domicilio</label>
    <div class="col-md-6">
      <input type="text" name="address"  class="form-control" value="<?php echo $alumn->address; ?>" id="name" placeholder="Domicilio" readonly="readonly">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
    <div class="col-md-6">
      <input type="text" name="email"  class="form-control" value="<?php echo $alumn->email; ?>" id="name" placeholder="Email" readonly="readonly">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono</label>
    <div class="col-md-6">
      <input type="text" name="phone" value="<?php echo $alumn->phone; ?>"  class="form-control" id="name" placeholder="Telefono" readonly="readonly">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Departamento</label>
    <div class="col-md-6">
      <input type="text" name="department" value="<?php echo $alumn->department; ?>"  class="form-control" id="name" placeholder="Departamento" readonly="readonly">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Contratación</label>
    <div class="col-md-6">
      <input type="text" name="department" value="<?php echo $alumn->created_at; ?>"  class="form-control" id="name" placeholder="" readonly="readonly">
    </div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="alumn_id" value="<?php echo $_GET["id"];?>">
    <input type="hidden" name="tid" value="<?php echo $_GET["tid"];?>">
    <a href="index.php?view=persons" type="submit" class="btn btn-danger">Regresar</a>
      <!--button type="submit" class="btn btn-primary">Actualizar Datos</button-->
    </div>
  </div>
</form>
	</div>
</div>
