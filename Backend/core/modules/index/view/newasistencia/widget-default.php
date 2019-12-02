<div class="row">
	<div class="col-md-12">
	<h1>Agregar Asistencias</h1>
	<br>
		<form class="form-horizontal" method="POST" id="addcategory" action="index.php?view=addasistencia" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">ID Horario</label>
    <div class="col-md-6">
      <input type="text" name="id_horario" required class="form-control" id="name" placeholder="ID Horario" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Hora de Entrada</label>
    <div class="col-md-6">
      <input type="text" name="hentrada" required class="form-control" id="name" placeholder="Hora de Entrada" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Hora de Salida</label>
    <div class="col-md-6">
      <input type="text" name="hsalida"  class="form-control" id="name" placeholder="Hora de Salida" required="">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha</label>
    <div class="col-md-6">
      <input type="date" name="fecha"  class="form-control" id="name" placeholder="Fecha de Nacimiento" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Horas Extras</label>
    <div class="col-md-6">
      <input type="extra" name="hextra"  class="form-control" id="name" placeholder="Horas Extras" required="">
    </div>
  </div>
  
  <br>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="team_id" value="<?php echo $_GET["team_id"];?>">
      <a href="index.php?view=newasistencia" type="submit" class="btn btn-danger">Cancelar</a>
      <button type="submit" class="btn btn-primary">Agregar Horario</button>
    </div>
  </div>

</form>
	</div>
</div>