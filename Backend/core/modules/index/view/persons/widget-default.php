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
			<th>Id_Empleado</th>
			<th>Nombre(s)</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>			
			<th>Fecha de Nacimiento</th>
			<th>RFC</th>
			<th>escolaridad</th>
			<th>direccion</th>
			<th>Telefono</th>
			<th>Correo</th>
			<th>Departamento</th>
			<th>Fecha de Ingreso</th>
			<th>ID_Horario</th>
			<th>ID_ausencia</th>
			</thead>
			<?php
			foreach($alumns as $al){
				$alumn = $al;
				?>
				<tr>
				<td><?php echo $alumn->id_empleado ?></td>
				<td><?php echo $alumn->nombre ?></td>
				<td><?php echo $alumn->ape_paterno; ?></td>
				<td><?php echo $alumn->ape_materno ?></td>				
				<td><?php echo $alumn->fechaNac ?></td>
				<td><?php echo $alumn->rfc?></td>
				<td><?php echo $alumn->escolaridad?></td>
				<td><?php echo $alumn->direccion?></td>
				<td><?php echo $alumn->telefono?></td>
				<td><?php echo $alumn->correo?></td>
				<td><?php echo $alumn->departamento ?></td>
				<td><?php echo $alumn->fechaingreso?></td>
				<td><?php echo $alumn->id_horario?></td>
				<td><?php echo $alumn->id_ausencia?></td>
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
