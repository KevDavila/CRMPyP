<?php
$alumns = SumData::getAll();
?>
<div class="row">
	<div class="col-md-12">
		<h1>Almacen</h1>
	<a href="index.php?view=newsum" class="btn btn-default"><i class='fa fa-user-plus'></i> Nuevo producto</a>
<br><br>
			<?php
					if(count($alumns)>0){
						// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>ID</th>
			<th>Tipo</th>
			<th>Color</th>
			<th>Modelo</th>
			<th>Marca</th>
			<th>Talla</th>
			<th>Descripcion</th>
			<th>Precio</th>
			<th>Cantidad</th>
			</thead>
				</tr>
				<?php
					foreach($alumns as $al){
					$alumn = $al;
					?>
					<tr>
						<td><?php echo $alumn->id_materia;?></td>
						<td><?php echo $alumn->tipo_materia;?></td>
						<td><?php echo $alumn->Color;?></td>
						<td><?php echo $alumn->modelo;?></td>
						<td><?php echo $alumn->marca;?></td>
						<td><?php echo $alumn->talla;?></td>
						<td><?php echo $alumn->description;?></td>
						<td><?php echo $alumn->precio_unitario;?></td>
						<td><?php echo $alumn->cantidad;?></td>

					</tr>
					<?php
				}
				echo "</table>";
			}else{
					echo "<p class='alert alert-danger'>No hay Productos</p>";
		}
			?>
	</div>
</div>
