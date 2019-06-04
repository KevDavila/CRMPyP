<?php
//$alumn = ClienteData::getById($_GET["id"]);
?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Cliente</h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?view=clientes" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombres" value="<?php echo $alumn->nombres; ?>" required class="form-control" id="name" placeholder="Nombre" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido Paterno*</label>
    <div class="col-md-6">
      <input type="text" name="apePaterno" value="<?php echo $alumn->apePaterno; ?>" required class="form-control" id="name" placeholder="Apellido Paterno" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido Materno*</label>
    <div class="col-md-6">
      <input type="text" name="apeMaterno"  class="form-control" value="<?php echo $alumn->apeMaterno; ?>" id="name" placeholder="Apellido Materno" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Sexo*</label>
    <div class="col-md-6">
      <input type="text" name="sexo"  class="form-control" value="<?php echo $alumn->sexo; ?>" id="name" placeholder="Sexo" style="text-transform:uppercase" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="telefono" value="<?php echo $alumn->telefono; ?>"  class="form-control" id="name" placeholder="Telefono" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Correo*</label>
    <div class="col-md-6">
      <input type="text" name="correo" value="<?php echo $alumn->correo; ?>"  class="form-control" id="name" placeholder="Correo" disabled>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Nac*</label>
    <div class="col-md-6">
      <input type="date" name="fechaNac" value="<?php echo $alumn->fechaNac;?>" id="name" required class="form-control" disabled>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="alumn_id" value="<?php echo $_GET["id"];?>">
    <input type="hidden" name="tid" value="<?php echo $_GET["tid"];?>">
      <button href="index.php?view=clientes" class="btn btn-primary">Regresar</button>
    </div>
  </div>
</form>
	</div>
</div>
