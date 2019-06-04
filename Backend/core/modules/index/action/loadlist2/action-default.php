		<?php
		$range = 0;
		if($_GET["start_at"]){
			$range= ((strtotime($_GET["finish_at"])-strtotime($_GET["start_at"]))+(24*60*60)) /(24*60*60);
			if($range>31){
				echo "<p class='alert alert-danger'>El Rango Maximo es 31 Dias.</p>";
				exit(0);
			}
		}else{
			echo "<p class='alert alert-danger'>Rango Invalido</p>";
			exit(0);
		}
		$alumns = VentaData::getAll();
		if(count($alumns)>0){
			// si hay usuarios
			?>

			<div class="panel panel-default">
			<div class="panel-heading">

			Lista de Asistencia
			</div>

<table class="table table-bordered table-hover">
			<thead>
				
				<?php for($i=0;$i<$range;$i++):?>
				<th><?php echo date("d-M",strtotime($_GET["start_at"])+($i*(24*60*60)));?></th>
				<?php endfor;?>
			</thead>
			<?php
			foreach($alumns as $al){
				$alumn = $al;

				//$values = array(""=>"Sin seleccion","1"=>"Asistencia","2"=>"Falta","3"=>"Retardo","4"=>"Permiso Vacaciones","5"=>"Permiso Enfermedad");
				?>
				<tr>
				
			<?php for($i=0;$i<$range;$i++):
					$fecha_pedido= date("Y-m-d",strtotime($_GET["start_at"])+($i*(24*60*60)));
					$fecha_entrega= date("Y-m-d",strtotime($_GET["finish_at"])+($i*(24*60*60)));
					$asist = VentaData::getByPD($alumn->id_venta,$fecha_pedido);
						?>


				<td ><?php echo $alumn->descripcion?></td>

			<?php endfor; ?>
				</tr>
				<?php

			}
echo "</table>";


		}else{
			echo "<p class='alert alert-danger'>No hay Grupos</p>";
		}


		?>

			</div>


			
