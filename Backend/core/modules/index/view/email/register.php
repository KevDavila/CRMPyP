<?php
//register.php

include('database_connection.php');

if(isset($_SESSION['user_id']))
{
	
}

$message = '';

if(isset($_POST["register"]))
{
	$query = "
	SELECT * FROM clientes 
	WHERE correo = :user_email
	";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
			':user_email'	=>	$_POST['user_email']
		)
	);
	$no_of_row = $statement->rowCount();
	if($no_of_row > 0)
	{
		$base_url = "http://localhost/email/";  //change this baseurl value as per your file path
			$mail_body = "
			<p>Hola ".$_POST['comment'].",</p>
			
			<p>Buen dia,<br />Playeras y Playeras</p>
			";
			require 'class/class.phpmailer.php';
			$mail = new PHPMailer;
			$mail->IsSMTP();  //Sets Mailer to send message using SMTP
			$mail->SMTPDebug = 0;//debug messages "log de error"							

			$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
			$mail->Port = 587;								//Sets the default SMTP server port
			$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
			$mail->Username = "sabbathkvlt@gmail.com";					//Sets SMTP username
			$mail->Password = "6k3v1n6quid6";					//Sets SMTP password
			$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
			$mail->From = 'support@playerasyplayeras.com';			//Sets the From email address for the message
			$mail->FromName = 'support playeras';					//Sets the From name of the message
			$mail->AddAddress($_POST['user_email'], $_POST['user_name']);		//Adds a "To" address			
			$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
			$mail->IsHTML(true);							//Sets message type to HTML				
			$mail->Subject = 'Email Verification';			//Sets the Subject of the message
			$mail->Body = $mail_body;							//An HTML or plain text message body
			if($mail->Send())								//Send an Email. Return true on success or false on error
			{
				$message = '<label class="text-success">El Correo ah sido enviado</label>';
			}
	}
	else
	{
		echo "correo no registrado";
		
		}
			
		
	}


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Playeras y Playeras</title>		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container" style="width:100%; max-width:600px">
			<h2 align="center">Playeras y Playeras</h2>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading"><h4>Enviar Correo</h4></div>
				<div class="panel-body">
					<form method="post" id="register_form">
						<?php echo $message; ?>
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="user_name" class="form-control" pattern="[a-zA-Z ]+" required />
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="user_email" class="form-control" required />
						</div>
						<label>Correo</label>
						<div class="form-group">
							
							<textarea  rows="4" cols="50" name="comment" form="register_form"></textarea> 
						</div>
						<div class="form-group">
							<input type="submit" name="register" id="register" value="Enviar" class="btn btn-info" />
						</div>
					</form>
					<p align="right"><a href="login.php">Login</a></p>
				</div>
			</div>
		</div>
	</body>
</html>