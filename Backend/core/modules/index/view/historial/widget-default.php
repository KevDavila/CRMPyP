<?php
$info1 = $_POST['id'];
 $info = VentaData::getById($info1);

class VentaData {
	public static $tablename = "ventas";
	public static function getById($info1){
		 
		$sql = "select * from ventas where id_cliente=5";
		$query = Executor::doit($sql);
		return Model::many($query[0],new VentaData());
	}
	
}

?>
<div class="row">
	<div class="col-md-12">
			<h1>Historial </h1>


	<a href="../email/sendemail.php" class="btn btn-default"><i class='fa fa-user-plus'></i> Enviar email</a>
	<br>
	<br>
			<?php
			if($info){
				// si hay usuarios
				?>
				<table class="table table-bordered table-hover">
				<thead>
				<th>ID Venta</th>
				<th>Fecha de Pedido</th>
				<th>Fecha de Entrega</th>
				<th>Descuento</th>
				<th>Total</th>
				<th>Cantidad</th>
				<th>ID Producto</th>
				<th>ID Cliente</th>
				<th>ID Cotizacion</th>
				<th>ID Pago</th>

			<!--	<th>Opciones</th>-->
				</thead>
				<?php
				foreach($info as $al){
					$info = $al;
					?>

					<tr>
					<td><?php echo $info->id_venta;?></td>
					<td><?php echo $info->fecha_pedido;?></td>
					<td><?php echo $info->fecha_entrega;?></td>
					<td><?php echo $info->descuento;?></td>
					<td><?php echo $info->total;?></td>
					<td><?php echo $info->cantidad;?></td>
					<td><?php echo $info->id_producto;?></td>
					<td><?php echo $info->id_cliente;?></td>
					<td><?php echo $info->id_cotizacion;?></td>
					<td><?php echo $info->id_pago;?></td>
					
				<!--	<td style="width:160px;">
					 <a href="index.php?view=editcliente&id_cliente<?php echo $alumn->id_cliente;?>" class="btn btn-warning btn-xs">Editar</a>-->
					</tr>
					<?php
				}
				echo "</table>";
			}else{
				echo "<p class='alert alert-danger'>No hay Clientes</p>";
			}
			?>
	</div>
</div>