<?php
$alumns = MarketingData::getAll();
?>
<div class="row">
	<div class="col-md-12">
		<h1>Marketing</h1>
<<<<<<< HEAD
	<a href="./core/modules/index/view/email/register.php" class="btn btn-default"><i class='fa fa-user-plus'></i>Enviar Correo</a>
=======
	<a href="./core/modules/index/view/email/register.php" class="btn btn-default"><i class='fa fa-user-plus'></i> Enviar Cupon</a>
>>>>>>> 60e124fd2163673aef89178860a736b1a18a1165
<br><br>
			<?php
					if(count($alumns)>0){
						// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Producto</th>
			<th>Cantidad Vendida</th>
			<th>Costo</th>
			<th>Descuento</th>
			</thead>
				</tr>
				<?php
					foreach($alumns as $al){
					$alumn = $al;
					?>
					<tr>
						<td><?php echo $alumn->producto;?></td>
						<td><?php echo $alumn->cantidad_vendida;?></td>
						<td><?php echo $alumn->costo;?></td>
						<td><?php echo $alumn->descuento;?></td>

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
