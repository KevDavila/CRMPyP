<?php
$alumns = ClienteData::getAll();
?>
<div class="row">
	<div class="col-md-12">
			<h1>Clientes </h1>
	<a href="index.php?view=newcliente" class="btn btn-default"><i class='fa fa-user-plus'></i> Nuevo Cliente</a>
	 
	<br>
	<br>
			<?php
			if(count($alumns)>0){
				// si hay usuarios
				?>
				<table class="table table-bordered table-hover">
				<thead>
				<th>Id</th>
				<th>Nombre</th>
				<th>Direccion</th>
				<th>Edad</th>
				<th>Fecha de nacimiento</th>
				<th>Telefono</th>
				<th>Correo</th>
			<!--	<th>Opciones</th>-->
				</thead>
				<?php
				foreach($alumns as $al){
					$alumn = $al;
					?>
					<form action="index.php?view=historial" method="post">
					<tr>
					<td><input type="checkbox" name="id" value="id_cliente"><?php echo $alumn->id_cliente;?></td>
					<td><?php echo $alumn->nombre;?></td>
					<td><?php echo $alumn->direccion;?></td>
					<td><?php echo $alumn->edad;?></td>
					<td><?php echo $alumn->fecha_nac;?></td>
					<td><?php echo $alumn->telefono;?></td>
					<td><?php echo $alumn->correo;?></td>
				<!--	<td style="width:160px;">
					 <a href="index.php?view=editcliente&id_cliente<?php echo $alumn->id_cliente;?>" class="btn btn-warning btn-xs">Editar</a>-->

					</tr>
					<input type="submit" name="submit">
					</form>
					<?php

				}
				echo "</table>";
			}else{
				echo "<p class='alert alert-danger'>No hay Clientes</p>";
			}
			?>
	</div>
</div>
