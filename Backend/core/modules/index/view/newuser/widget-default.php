<div class="row">
	<div class="col-md-12">
	<h1>Agregar Usuario</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=adduser" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" required class="form-control" id="lastname" placeholder="Apellido" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre de usuario*</label>
    <div class="col-md-6">
      <input type="text" name="username" class="form-control" required id="username" placeholder="Nombre de usuario" required="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contrase&ntilde;a</label>
    <div class="col-md-6">
      <input type="password" name="password" class="form-control" id="inputEmail1" placeholder="Contrase&ntilde;a" required="">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Es administrador</label>
    <div class="col-md-6">
<div class="checkbox">
    <label>
      <input type="checkbox" name="is_admin"> 
    </label>
  </div>
    </div>
  </div>
  <label for="inputEmail1" class="col-lg-2 control-label">Departamento</label>
  <div class="form-group">
    <div class="col-md-6">
      <fieldset>   
        <label>
          <input type="radio" name="is_dep" value="1"> Recursos Humanos
        </label>
        <label>
          <input type="radio" name="is_dep" value="2"> Finanzas
        </label>
        <label>
          <input type="radio" name="is_dep" value="3"> Gestión de Empleados
        </label>
        <label>
          <input type="radio" name="is_dep" value="4"> Manufactura
        </label>
        <label>
          <input type="radio" name="is_dep" value="5"> Gestion de Suministros
        </label>
      </fieldset>
    </div>
  </div>

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <a href="index.php?view=users" type="submit" class="btn btn-danger">Cancelar</a>
      <button type="submit" class="btn btn-primary">Agregar Usuario</button>
    </div>
  </div>
</form>
	</div>
</div>