<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Gasto</h1>
	<br>
		<form class="form-horizontal" method="POST" id="addcategory" action="index.php?view=addgasto" role="form"> 

	<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Monto</label>
    <div class="col-md-6">
      <input type="text" name="monto" required class="form-control" id="name" placeholder="Monto">
    </div>
  </div>
   <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-md-6">
      <input type="text" name="descripcion" required class="form-control" id="name" placeholder="Descripcion">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha</label>
    <div class="col-md-6">
      <input type="date" name="fecha"  class="form-control" id="name" placeholder="Fecha">
    </div>
  </div>


 

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="team_id" value="<?php echo $_GET["team_id"];?>">
      <button type="submit" class="btn btn-primary">Agregar Pago</button>
    </div>
  </div>
</form>
	</div>
</div>