<?php

if(Session::getUID()!=""){
		print "<script>window.location='index.php?view=home';</script>";
}

?>
<div class="row">
<br><br><br><br><br><br>
    	<div class="col-md-4 col-md-offset-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>
    		<div class="panel panel-info">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Iniciar Sesión</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
                    <fieldset>
                    	<div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="Usuario">                                        
                        </div>
			    	  	<!--div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" required name="email" type="text">
			    		</div-->
			    		<div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                        </div>
			    		<!--div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" required name="password" type="password" value="">
			    		</div-->
			    		<input class="btn btn-primary btn-block" type="submit" value="Iniciar Sesion">
			    		<!--<a href="index.php?view=newuser" class="btn btn-primary btn-block"><i class='glyphicon glyphicon-user'></i> Nuevo Usuario</a>-->
			    	</fieldset>
			      	</form>
			    </div>
			</div>

		</div>
	</div>
<br><br><br>