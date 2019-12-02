<?php
$alumns = GastosData::getAll();
?>
<div class="row">
	<div class="col-md-12">
		<h1>Gastos</h1>

	<a href="index.php?view=newgasto" class="btn btn-default"><i class='fa fa-user-plus'></i>Ingresar Gasto</a>

<br><br>
			<?php
					if(count($alumns)>0){
						// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>ID Venta</th>
			<th>Fecha Pedido</th>
			<th>Fecha Entrega</th>
			<th>Descuento</th>
			<th>Total</th>
			<th>Cantidad</th>
			<th>ID Producto</th>
			<th>ID Cliente</th>
			</thead>
				</tr>
				<?php
					foreach($alumns as $al){
					$alumn = $al;
					?>
					<tr>
						<td><?php echo $alumn->id_venta;?></td>
						<td><?php echo $alumn->fecha_pedido;?></td>
						<td><?php echo $alumn->fecha_entrega;?></td>
						<td><?php echo $alumn->descuento;?></td>
						<td><?php echo $alumn->total;?></td>
						<td><?php echo $alumn->cantidad;?></td>
						<td><?php echo $alumn->id_producto;?></td>
						<td><?php echo $alumn->id_cliente;?></td>

					</tr>
					<?php
				}
				echo "</table>";
			}else{
					echo "<p class='alert alert-danger'>No Gastos Ingresados</p>";
		}
			?>
	</div>
</div>
