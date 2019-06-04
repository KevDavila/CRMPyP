<div class="row">
	<div class="col-md-12">
		<h1>Locales: </h1>

	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>Local</th>
					<th>Ubicacion</th>
					<th>Estado de almacen</th>
					<th>Suministros faltantes</th>
				</tr>
			</thead>
			<tbody>
				<tr>

				</tr>
				<tr>

				</tr>
				<tr>

				</tr>
			</tbody>
		</table>
	</div>

	</div>
	</div>

<script>
	$("#loadlist").submit(function(e){
		e.preventDefault();
		var d = $("#loadlist").serialize();
		$.get("./?action=loadlist",d,function(data){
			console.log(data);
			$("#data").html(data);

		});
	});
</script>
