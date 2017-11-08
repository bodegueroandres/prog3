<?php 
	session_start();
	if($_SESSION){

				$username=$_SESSION['username'];

			}else{

				echo "<h1>no has iniciado sesion,se detendrá la ejecución</h1>";
				die();

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
	<a href="logout.php">CERRAR SESION</a>
</body>
</html>
