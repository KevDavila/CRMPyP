<?php
$alumns = VentaData::getAll();
?>
<div class="row">
	<div class="col-md-12">
		<h1>Ventas</h1>
	<a href="index.php?view=maspop" class="btn btn-default"><i class='fa fa-user-plus'></i>Producto Mas Popular</a>
	<a href="index.php?view=menospop" class="btn btn-default"><i class='fa fa-user-plus'></i>Producto Menos Popular</a>
<br><br>
			<?php
					if(count($alumns)>0){
						// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Fecha Pedido</th>
			<th>Fecha Entrega</th>
			<th>Descuento</th>
			<th>total</th>
			<th>Cantidad</th>
      <th>Id Producto</th>
			</thead>
				</tr>
				<?php
					foreach($alumns as $al){
					$alumn = $al;
					?>
					<tr>
						<td><?php echo $alumn->fecha_pedido;?></td>
						<td><?php echo $alumn->fecha_entrega;?></td>
						<td><?php echo $alumn->descuento;?></td>
						<td><?php echo $alumn->total;?></td>
						<td><?php echo $alumn->cantidad;?></td>
            <td><?php echo $alumn->id_producto;?></td>

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
