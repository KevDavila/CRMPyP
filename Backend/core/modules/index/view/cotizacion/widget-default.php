<?php
$alumns = CotizacionData::getAll();
?>
<head>
	<script language="javascript">
		function doSearch()
		{
			var tableReg = document.getElementById('datos');
			var searchText = document.getElementById('searchTerm').value.toLowerCase();
			var cellsOfRow="";
			var found=false;
			var compareWith="";
			// Recorremos todas las filas con contenido de la tabla
			for (var i = 1; i < tableReg.rows.length; i++)
			{
				cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
				found = false;
				// Recorremos todas las celdas
				for (var j = 0; j < cellsOfRow.length && !found; j++)
				{
					compareWith = cellsOfRow[j].innerHTML.toLowerCase();
					// Buscamos el texto en el contenido de la celda
					if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
					{
						found = true;
					}
				}
				if(found)
				{
					tableReg.rows[i].style.display = '';
				} else {
					// si no ha encontrado ninguna coincidencia, esconde la
					// fila de la tabla
					tableReg.rows[i].style.display = 'none';
				}
			}
		}
	</script>
	<style>
		#datos	{border:1px solid #ccc;padding:10px;}
		#datos tr:nth-child(even) {background:#ccc;}
		#datos td {padding:5px;}
	</style>
</head>


<div class="row">
	<div class="col-md-12">
		<h1>Cotizaciones</h1>
	<a href="index.php?view=newcotizacion" class="btn btn-default"><i class='fa fa-user-plus'></i>Nueva Cotizacion</a>
<br><br>
	<div class="form-group">
		<label for="inputEmail1" class="col-lg-4 control-label">Busqueda de cotizaciones</label>
     	<div class="input-group input-group-sm pull-right divbuscar">
        	<form><input id="searchTerm" type="text" class="redondeado" placeholder="Buscar..." onkeyup="doSearch()"></form>
     	</div>
	</div>
			<?php
			if(count($alumns)>0){
				// si hay usuarios
				?>
				<table id="datos" class="table table-bordered table-hover">
				<thead>
				<th>Producto</th>
				<th>Cantidad</th>
				<th>Costo</th>
				<th>Opciones</th>
				</thead>
				<?php
				foreach($alumns as $al){
					$alumn = $al;
					?>

					<tr>
					<td><?php echo $alumn->producto;?></td>
					<td><?php echo $alumn->costo;?></td>
					<td><?php echo $alumn->cantidad;?></td>
					<td style="width:160px;">
					 <a href="index.php?view=editcotizacion&id_cotizacion=<?php echo $alumn->id_cotizacion;?>" class="btn btn-warning btn-xs">Editar</a>
					</tr>
					<?php
				}
				echo "</table>";
			}else{
				echo "<p class='alert alert-danger'>No hay Cotizacion</p>";
			}
			?>
	</div>
</div>
