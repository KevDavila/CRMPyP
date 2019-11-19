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
			<th>Pedido/th>
			<th>Cliente</th>
			<th>RFC Cliente</th>
			<th>Dirección Cliente</th>
			<th>Colonia Gente</th>
     		<th>Correo Cliente</th>
     		<th>Telefono del Cliente
			</thead>
				</tr>
				<?php
					foreach($alumns as $al){
					$alumn = $al;
					?>
					<tr>
						<td><?php echo $alumn->pedido;?></td>
						<td><?php echo $alumn->entrega;?></td>
						<td><?php echo $alumn->rfc_cliente?></td>
						<td><?php echo $alumn->direccion_cliente;?></td>
						<td><?php echo $alumn->correo_cliente;?></td>
						<td><?php echo $alumn->telefono_de_cliente;?></td>

            <td><?php echo $alumn->id_pedido;?></td>

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
