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
			<th>ID Gasto</th>
			<th>Descripcion</th>
			<th>Monto</th>
			<th>Fecha</th>
			
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
						<td><?php echo $alumn->fecha;?></td>
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
