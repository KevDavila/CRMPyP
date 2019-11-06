<?php
$alumn = CotizacionData::getById($_GET["id_cotizacion"]);
?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Cotización</h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?action=updatecotizacion" role="form">


 


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Producto*</label>
    <div class="col-md-6">
      <div class="input-group ">
      <div class="input-group-addon">
        <i class="glyphicon glyphicon-briefcase"></i>
      </div>
      <input type="text" value="<?php echo $alumn->producto;?>" name="producto" required class="form-control" id="name" placeholder="Producto" required="">
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Cantidad*</label>
    <div class="col-md-6">
      <div class="input-group">
      <div class="input-group-addon">
        <i class="fa fa-plus-square-o"></i>
      </div>
        <input type="text" value="<?php echo $alumn->cantidad;?>" name="cantidad"  class="form-control" id="name" placeholder="Cantidad" required="">
      </div>
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Precio de Producto*</label>
    <div class="col-md-6">
      <div class="input-group ">
      <div class="input-group-addon">
        <i class="fa  fa-dollar"></i>
      </div>
        <input type="text" value="<?php echo $alumn->costo; ?>" name="costo"  class="form-control" id="name" placeholder="Precio de Producto" required="">
      </div>
    </div>
  </div>

  


    

    

  <p class="alert alert-info">* Campos obligatorios</p>
  <br>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="alumn_id" value="<?php echo $_GET["id_cotizacion"];?>">
    <a href="index.php?view=cotizacion" type="submit" class="btn btn-danger">Cancelar</a>
      <button type="submit" class="btn btn-primary" id="agregar">Actualizar Datos</button>
    </div>
  </div>

</form>
	</div>
</div>
