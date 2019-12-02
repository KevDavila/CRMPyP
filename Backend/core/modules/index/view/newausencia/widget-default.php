<div class="row">
	<div class="col-md-12">
	<h1>Agregar Ausencia</h1>
	<br>
		<form class="form-horizontal" method="POST" id="addcategory" action="index.php?view=addausencia" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Inicio</label>
    <div class="col-md-6">
      <input type="date" name="f_inic" required class="form-control" id="name" placeholder="Fecha Inicio" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Final</label>
    <div class="col-md-6">
      <input type="date" name="f_fin" required class="form-control" id="name" placeholder="Fecha Final" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Autorizo</label>
    <div class="col-md-6">
      <input type="text" name="autorizo"  class="form-control" id="name" placeholder="Autorizo" required="">
    </div>
  </div>
  
  <br>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="team_id" value="<?php echo $_GET["team_id"];?>">
      <a href="index.php?view=newasistencia" type="submit" class="btn btn-danger">Cancelar</a>
      <button type="submit" class="btn btn-primary">Agregar Ausencias</button>
    </div>
  </div>

</form>
	</div>
</div>