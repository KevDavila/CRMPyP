<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Producto</h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?view=addsum" role="form">

	<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Codigo Barra*</label>
    <div class="col-md-6">
      <input type="text" name="codi_summ" required class="form-control" id="name" placeholder="Codigo de Barras" required="">
    </div>
  </div>

	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Nombre del producto*</label>
		<div class="col-md-6">
			<input type="text" name="nom_summ" required class="form-control" id="name" placeholder="Producto" required="">
		</div>
	</div>

	<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Color*</label>
    <div class="col-md-6">
      <input type="text" name="color_summ" required class="form-control" id="name" placeholder="Color" required="">
    </div>
  </div>

	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Modelo*</label>
		<div class="col-md-6">
			<input type="text" name="modelo_summ" required class="form-control" id="name" placeholder="Modelo" required="">
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Descripcion*</label>
		<div class="col-md-6">
			<input type="text" name="descrip_summ"  class="form-control" id="name" placeholder="Descripcion" required="">
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Precio*</label>
		<div class="col-md-6">
			<input type="text" name="precio_summ"  class="form-control" id="name" placeholder="Precio" required="">
		</div>
	</div>

	<div class="form-group">
		<label for="inputEmail1" class="col-lg-2 control-label">Cantidad*</label>
		<div class="col-md-6">
			<input type="text" name="cant_summ" required class="form-control" id="name" placeholder="Cantidad" required="">
		</div>
	</div>

  <p class="alert alert-info">* Campos obligatorios</p>
  <br>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="team_id" value="<?php echo $_GET["team_id"];?>">
      <a href="index.php?view=sum" type="submit" class="btn btn-danger">Cancelar</a>
      <button type="submit" class="btn btn-primary">Agregar Sumministro</button>
    </div>
  </div>

</form>
	</div>
</div>
