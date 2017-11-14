<?php 
	session_start();//usaremos sesion
	if($_SESSION){//si esta seteada la sesion copiamos el nombre de la sesion en una variabre

				$username=$_SESSION['username'];

			}else{

				echo "<h1>no has iniciado sesion,se detendrá la ejecución</h1>";
				die(); //se esta intentando acceder al todolist sin haber iniciado sesion,muestra el mensaje y se detiene la ejecucion

			}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario todolist</title>
</head>
<body>
	<h1>Este espacio corresponde al todolist del usuario <?php echo $_SESSION['username'] ?></h1>
	//pequeño formulario que se envia a si mismo luego de cargar los datos los muestra

	<?php if (!$_POST) { //si se enviaron los datos los guarda en las variables

		?>

		<form action="todolist.php" method="post">
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="">
			<br/>
			<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="">
			<br/>
			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"></textarea>
			<br/>
			<input type="submit" name="submit" class="btn btn-primary" value="Enviar">
		</form>
		<?php
	}else{
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$mensaje=$_POST['mensaje'];
	echo $nombre."<br/>";
	echo $correo."<br/>";
	echo $mensaje."<br/>";
	}



 ?>


	<a href="logout.php">CERRAR SESION</a> //envia al archivo para destruir la sesion
</body>
</html>

	
