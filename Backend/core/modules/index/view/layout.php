<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Playeras & Playeras</title>
    <!-- ESTABLECER ICONO A LA VENTANA-->
    <link rel="shortcut icon" href="img/images.ico" />
    <!-- Bootstrap core CSS -->
    <link href="res/bootstrap3/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="js/jquery-1.10.2.js"></script>


<?php if(isset($_GET["view"]) && $_GET["view"]=="home"):?>
<link href='res/fullcalendar.min.css' rel='stylesheet' />
<link href='res/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='res/js/moment.min.js'></script>
<script src='res/fullcalendar.min.js'></script>
<?php endif; ?>
  </head>
  <body>
    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#6B8E23;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="color: #fff;">Playeras & Playeras<sup ><small><span class="label label-success"></span></small></sup> </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav" style="background-color:#6B8E23;">
         <ul class="nav navbar-nav">
          </ul>
<?php if(!isset($_SESSION["user_id"])):?>
          <!--<li><a href="./"><i class="fa fa-home"></i> Inicio</a></li>-->
<?php endif;?>
<?php
$u=null;
if(Session::getUID()!=""):
  $u = UserData::getById(Session::getUID());
?>
          <li><a href="index.php?view=home" style="color: #fff;"><i class="fa fa-home"></i> Inicio</a></li>
          <!--<li><a href="#" class="fa fa-user" data-toggle="dropdown"> Recursos Humanos<span class="caret"></span></a>

        <ul class="dropdown-menu">
          <li><a href="index.php?view=assistance"><i class="fa fa-check"></i> Asistencia</a></li>
          <li><a href="index.php?view=persons"><i class="fa fa-male"></i> Empleados</a></li>
          <li><a href="index.php?view=list"><i class="fa fa-table"></i> Reporte</a></li>
        </ul></li>-->
      <!--  <?php //para los usuarios de ERP Login
            $usuario = $_SESSION ['user_id'];
            if ($usuario == "14") {
          ?>
             <li><a href="#" class="fa fa-clipboard" data-toggle="dropdown"> Recursos Humanos<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?view=assistance"><i class="fa fa-check"></i> Asistencia</a></li>
          <li><a href="index.php?view=persons"><i class="fa fa-male"></i> Empleados</a></li>
          <li><a href="index.php?view=list"><i class="fa fa-table"></i> Reporte</a></li>
          <li><a href="index.php?view=users"><i class="fa fa-users"></i> Usuarios </a></li>
        </ul></li>
          <?php } ?>
        <?php
            $usuario = $_SESSION ['user_id'];

            if ($usuario == "13") {
          ?>
             <li><a href="#" class="fa fa-money" data-toggle="dropdown"> Finanzas<span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="index.php?view=assistance"><i class="fa fa-check"></i> Registro de Ingresos</a></li>
          <li><a href="index.php?view=persons"><i class="fa fa-male"></i> Empleados</a></li>
          <li><a href="index.php?view=list"><i class="fa fa-table"></i> Reporte</a></li>
        </ul></li>
          <?php } ?>
        <?php
            $usuario = $_SESSION ['user_id'];

            if ($usuario == "12") {
          ?>
             <li><a href="#" class="fa fa-user" data-toggle="dropdown"> Gestión de Empleados<span class="caret"></span></a>
              <ul class="dropdown-menu">
          <li><a href="index.php?view=assistance"><i class="fa fa-check"></i> Asistencia</a></li>
          <li><a href="index.php?view=persons"><i class="fa fa-male"></i> Empleados</a></li>
          <li><a href="index.php?view=list"><i class="fa fa-table"></i> Reporte</a></li>
        </ul></li>
          <?php } ?>

          <?php
            $usuario = $_SESSION ['user_id'];
            if ($usuario == "11") {
          ?>
             <li><a href="#" class="fa fa-user" data-toggle="dropdown"> Manufactura<span class="caret"></span></a>
              <ul class="dropdown-menu">
            <li><a href="index.php?view=assistance"><i class="fa fa-check"></i> Asistencia</a></li>
            <li><a href="index.php?view=persons"><i class="fa fa-male"></i> Empleados</a></li>
            <li><a href="index.php?view=list"><i class="fa fa-table"></i> Reporte</a></li>
            </ul></li>
          <?php } ?>

          <?php
            $usuario = $_SESSION ['user_id'];

            if ($usuario == "10") {
          ?>
             <li><a href="#" class="fa fa-user" data-toggle="dropdown">Gestión de Suministros<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?view=sum"><i class="fa fa-check"></i> Agregar Suministros</a></li>
                <li><a href="index.php?view=prove"><i class="fa fa-male"></i> Informacion de Proveedor</a></li>
                <li><a href="index.php?view=locals"><i class="fa fa-table"></i> Locales</a></li>
                <li><a href="index.php?view=trabajos"><i class="fa fa-table"></i> Trabajos</a></li>
              </ul></li>
          <?php } ?>
-->
          <?php if($u->is_admin):?>
           <!--<li><a href="#" class="fa fa-clipboard" data-toggle="dropdown"> CRM P&P<span class="caret"></span></a>
        <ul class="dropdown-menu">-->
          <li><a href="index.php?view=marketing"style="color: #fff;"><i class="fa fa-wifi"></i> Marketing</a></li>
          <!--<li><a href="index.php?view=encuestas"><i class="fa fa-comments-o"></i> Encuestas Marketing</a></li>-->
          <li><a href="index.php?view=sum" style="color: #fff;"><i class="fa fa-male"></i> Almacen</a></li>
          <li><a href="index.php?view=cotizacion"style="color: #fff;"><i class="fa fa-table"></i> Cotizaciones</a></li>
          <li><a href="index.php?view=venta"style="color: #fff;"><i class="fa fa-usd"></i> Ventas</a></li>
          <li><a href="index.php?view=prove"style="color: #fff;"><i class="fa fa-child"></i> Proveedores</a></li>
          <li><a href="index.php?view=clientes"style="color: #fff;"><i class="fa fa-child"></i> Clientes</a></li>
        </ul></li>

        <?php endif;?>

<?php endif;?>
          </ul>


<?php if(Session::getUID()!=""):?>
<?php
$u=null;
if(Session::getUID()!=""){
  $u = UserData::getById(Session::getUID());
  $user = $u->name." ".$u->lastname;

  }?>

          <ul class="nav navbar-nav navbar-right navbar-user" style="color: #fff;">
            <li class="dropdown user-dropdown">
        <a href="#" class="" data-toggle="dropdown" style="color: #fff;">
        <?php echo $user; ?> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="logout.php">Salir</a></li>
        </ul>
<?php else:?>
<?php endif; ?>

        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

<?php
  // puedo cargar otras funciones iniciales
  // dentro de la funcion donde cargo la vista actual
  // como por ejemplo cargar el corte actual
  View::load("login");

?>

<hr>
<center><p>Copyright &copy; 2019 Playeras&Playeras S.A. de C.V. Todos los derechos reservados.</p></center>


      </div><!-- /#page-wrapper -->
    </div><!-- /#wrapper -->
    <!-- JavaScript -->
<script src="res/bootstrap3/js/bootstrap.min.js"></script>

  </body>
</html>
