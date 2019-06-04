<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=newuser" class="btn btn-default pull-right"><i class='glyphicon glyphicon-user'></i> Nuevo Usuario</a>
		<h1>Lista de Usuarios</h1>
<br>
		<?php if(!isset($_SESSION["user_id"])):?>
         
		<?php endif;?>
		<?php 
			$u=null;
			if(Session::getUID()!=""):
			  $u = UserData::getById(Session::getUID());
		?>
		<?php endif;?>

		<?php

		$users = UserData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Usuario</th>
			<!--<th>Email</th>-->
			<th>Activo</th>

			<?php if($u->is_admin):?>
			<th>Administrador</th>
			<?php endif;?>
			<th>Opciones</th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->username; ?></td>
				<!--<td><?php echo $user->email; ?></td>-->
				<td>
					<?php if($user->is_active=='1'):?>
						<i class="glyphicon glyphicon-ok"></i>
					<?php endif; ?>
					<?php if($user->is_active=='0'):?>
						<i class="glyphicon glyphicon-remove"></i>
					<?php endif; ?>
				</td>
				<?php if($u->is_admin):?>
				<td style="width:120px;">
				<?php if($user->is_admin):?>
						<i class="glyphicon glyphicon-ok"></i>
					<?php endif; ?>
				<!--<td style="width:120px;">
					<?php if($user->is_admin):?>
						<i class="glyphicon glyphicon-ok"></i>
					<?php endif; ?>-->
				</td>
				<?php endif;?>
				<td style="width:120px;">
					<a href="index.php?view=edituser&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
					<?php if($u->is_admin):?>
					<a href="index.php?action=deluser&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
					<?php endif;?>
				</td>
				</tr>
				<?php
			}
?>
</table>

<?php
		}else{
			// no hay usuarios
		}
		?>
	</div>
</div>