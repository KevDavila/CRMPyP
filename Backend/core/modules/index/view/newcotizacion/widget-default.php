<div class="row">
  <div class="col-md-12">
  <h1>Nueva Cotización</h1>
  <br>
    <form class="form-horizontal" method="post" id="addcategory" action="index.php?view=addcotizacion" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">RFC*</label>
    <div class="col-md-6">
      <div class="input-group ">
      <div class="input-group-addon">
        <i class="glyphicon glyphicon-plus"></i>
      </div>
       <input type="text"  name="rfc" required class="form-control" id="name" placeholder="RFC" maxlength="13" required="">
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Producto*</label>
    <div class="col-md-6">
      <div class="input-group ">
      <div class="input-group-addon">
        <i class="glyphicon glyphicon-briefcase"></i>
      </div>
      <input type="text" name="producto" required class="form-control" id="name" placeholder="Producto" required="">
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
        <input type="text" name="cantidad"  class="form-control" id="name" placeholder="Cantidad" required="">
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
        <input type="text"  name="precio_producto"  class="form-control" id="name" placeholder="Precio de Producto" required="">
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Precio de Instalación*</label>
    <div class="col-md-6">
      <div class="input-group ">
      <div class="input-group-addon">
        <i class="fa fa-dollar"></i>
      </div>
        <input type="text" name="precio_instalacion"  class="form-control" id="name" placeholder="Precio de Instalación" required="">
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Instalación*</label>
    <div class="col-md-6">
      <div class="input-group ">
      <div class="input-group-addon">
        <i class="fa fa-calendar"></i>
      </div>
       <input type="date"  name="fecha_instalacion"  class="form-control" id="name" placeholder="Fecha de Instalación" required="">
      </div>
    </div>
  </div>
  

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Numero de Cliente*</label>
    <div class="col-md-6">
      <div class="input-group ">
      <div class="input-group-addon">
        <i class="fa fa-asterisk"></i>
      </div>
       <input type="text" name="id_cliente"  class="form-control" id="name" placeholder="Numero de Cliente" required="">
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre del Cliente*</label>
    <div class="col-md-6">
      <div class="input-group ">
      <div class="input-group-addon">
        <i class="fa fa-user"></i>
      </div>
        <script>
        //Funcion para habilitar la fecha y guardarlo//
          $(document).ready(function(){
            $("#agregar").click(function(){
            $("#nombre").attr("disabled",false);
            });
          });
        </script>
       <input type="text" name="nombre"  class="form-control" id="nombre" placeholder="Nombre del Cliente" disabled="">
      </div>
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido del Cliente*</label>
    <div class="col-md-6">
      <div class="input-group ">
      <div class="input-group-addon">
        <i class="fa fa-user"></i>
      </div>
        <script>
        //Funcion para habilitar la fecha y guardarlo//
          $(document).ready(function(){
            $("#agregar").click(function(){
            $("#apellido").attr("disabled",false);
            });
          });
        </script>
       <input type="text" name="apellido"  class="form-control" id="apellido" placeholder="Apellido del Cliente" disabled="">
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
