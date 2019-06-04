<?php
$alumns = VentaData::getMasPop();
?>
<div class="row">
	<div class="col-md-12">
		<h1>Producto Mas Popular</h1>
	
<br><br>
			<?php
					if($alumns){
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