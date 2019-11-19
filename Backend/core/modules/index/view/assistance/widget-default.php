<?php
$alumns = AssistanceData::getAll();
?>
<div class="row">
	<div class="col-md-12">
		<h1>Asistencia</h1>
<a href="index.php?view=newasistencia" class="btn btn-default"><i class='fa fa-user-plus'></i>Ingresar Asistencia</a>
<form class="form-horizontal" id="loadlist" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Seleccionar Fecha:</label>
    <div class="col-lg-7">
      <input type="date" name="date_at" value="<?php echo date("Y-m-d");?>" required class="form-control" >
    </div>
    <div class="col-lg-offset-3">
    <input type="hidden" name="team_id" value="<?php echo $_GET["team_id"];?>">
      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
  </div>
</form>

<?php
		if(count($alumns)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Id_Horario</th>
			<th>Nombre</th>
			<th>Hora de Entrada</th>
			<th>Hora de Salida</th>
			<th>Fecha</th>			
			<th>Horas Extras</th>
			</thead>
			<?php
			foreach($alumns as $al){
				$alumn = $al;
				?>
				<tr>
				<td><?php echo $alumn->id_horario ?></td>
				<td><?php echo $alumn->nombre ?></td>
				<td><?php echo $alumn->hentrada ?></td>
				<td><?php echo $alumn->hsalida; ?></td>
				<td><?php echo $alumn->fecha ?></td>				
				<td><?php echo $alumn->hextra ?></td>
				
				<td style="width:160px;">
				 <a href="index.php?view=viewperson&id=<?php echo $alumn->id;?>" class="btn btn-info btn-xs"> Ver</a>
				 <a href="index.php?view=editperson&id=<?php echo $alumn->id;?>" class="btn btn-warning btn-xs"> Editar</a>
				 <a href="index.php?action=delperson&id_empleado=<?php echo $alumn->id_empleado;?>"
				 class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php
			}
			echo "</table>";
		}else{
				echo "<p class='alert alert-danger'>No hay Personas</p>";
			}
		?>



	</div>
</div>

<script>
	$("#loadlist").submit(function(e){
		e.preventDefault();
		var d = $("#loadlist").serialize();
		$.get("./?action=loadassistance",d,function(data){
			console.log(data);
			$("#data").html(data);

		});
	});
</script>