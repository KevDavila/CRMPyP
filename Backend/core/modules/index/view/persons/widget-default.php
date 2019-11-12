<?php
$alumns = EmpleadoData::getAll();
?>
<div class="row">
	<div class="col-md-12">
		<h1>Empleados</h1>
	<a href="index.php?view=newperson" class="btn btn-default"><i class='fa fa-user-plus'></i>Nueva persona</a>
<br><br>
		<?php
		if(count($alumns)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre(s)</th>
			<th>Apellido(s)</th>
			<th>Departamento</th>
			<th>Opciones</th>
			</thead>
			<?php
			foreach($alumns as $al){
				$alumn = $al;
				?>
				<tr>
				<td><?php echo $alumn->nombre ?></td>
				<td><?php echo $alumn->ape_paterno; ?></td>
				<td><?php echo $alumn->ape_materno ?></td>
				<td style="width:160px;">
				 <a href="index.php?view=viewperson&id=<?php echo $alumn->id;?>" class="btn btn-info btn-xs"> Ver</a>
				 <a href="index.php?view=editperson&id=<?php echo $alumn->id;?>" class="btn btn-warning btn-xs"> Editar</a>
				 <a href="index.php?action=delperson&id=<?php echo $alumn->id;?>&tid=<?php echo $team->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
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
