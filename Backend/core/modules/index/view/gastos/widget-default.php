<?php
$alumns = GastosData::getAll();
?>
<div class="row">
	<div class="col-md-12">
		<h1>Gastos</h1>

	<a href="./core/modules/index/view/email/register.php" class="btn btn-default"><i class='fa fa-user-plus'></i>Agregar Gastos</a>

	<a href="./core/modules/index/view/email/register.php" class="btn btn-default"><i class='fa fa-user-plus'></i> Enviar Cupon</a>

<br><br>
			<?php
					if(count($alumns)>0){
						// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>ID Gasto</th>
			<th>Descripcion</th>
			<th>Monto</th>
			<th>Tipo</th>
			</thead>
				</tr>
				<?php
					foreach($alumns as $al){
					$alumn = $al;
					?>
					<tr>
						<td><?php echo $alumn->id_gasto;?></td>
						<td><?php echo $alumn->descripcion;?></td>
						<td><?php echo $alumn->monto;?></td>
						<td><?php echo $alumn->id_tipo_gasto;?></td>

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
