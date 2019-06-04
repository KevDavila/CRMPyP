<div class="row">
	<div class="col-md-12">
		<h1>Trabajos y sus estados. </h1>
		<form class="form-horizontal" id="loadlist" role="form">
		  <div class="form-group">
		    <label for="inputEmail1" class="col-lg-2 control-label">Inicio/Fin:</label>
		    <div class="col-lg-3">
		      <input type="date" name="start_at" value="<?php echo date("Y-m-d");?>" required class="form-control" >
		    </div>
		    <div class="col-lg-3">
		      <input type="date" name="finish_at" value="<?php echo date("Y-m-d");?>" required class="form-control" >
		    </div>
		    <div class="col-lg-offset-3">
		    <input type="hidden" name="team_id" value="<?php echo $_GET["team_id"];?>">
		      <button type="submit" class="btn btn-primary">Buscar</button>
		    </div>
		  </div>
		</form>
		<div class="container">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>Trabajo</th>
		        <th>Fecha de inicio</th>
		        <th>Estado</th>
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
