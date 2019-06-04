<?php
$alumns = ProveData::getAll();
?>
<div class="row">
	<div class="col-md-12">
		<h1>Proveedores</h1>
	<a href="index.php?view=newprove" class="btn btn-default"><i class='fa fa-user-plus'></i>Nuevo Proveedor</a>
<br><br>
		<?php
		if(count($alumns)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre del proveedor</th>
			<th>Numero de telefono</th>
			<th>Correo</th>
			<th>Nombre Empresa</th>
			<th>Direccion</th>
			<th>Opciones</th>
			</thead>
			<?php
			foreach($alumns as $al){
				$alumn = $al;
				?>
				<tr>
				<td><?php echo $alumn->nombre_contacto;?></td>
				<td><?php echo $alumn->telefono;?></td>
				<td><?php echo $alumn->correo;?></td>
				<td><?php echo $alumn->nom_empresa;?></td>
				<td><?php echo $alumn->direccion;?></td>
				<td style="width:160px;">
				 <a href="index.php?view=editprove&folio=<?php echo $alumn->id_provedor;?>" class="btn btn-warning btn-xs"> Editar</a>
				</tr>
				<?php
			}
			echo "</table>";
		}else{
				echo "<p class='alert alert-danger'>No hay Proveedor</p>";
			}
		?>
	</div>
</div>
