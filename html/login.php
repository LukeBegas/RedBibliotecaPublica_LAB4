<?php 
	php -v;
	session_start();
	$cn = mysqli_connect("localhost", "root","","biblioteca");

	if(count($_POST) > 0) {

		

		$nombre = $_POST['nombre'];
		$pass = sha1($_POST['pass']);

		$res = mysqli_query($cn, "SELECT *
									FROM usuario 
									WHERE nombre='$nombre' and pass='$pass'
									LIMIT 1");

		if(mysqli_num_rows($res) == 1) {
			$_SESSION['logueado'] = true;
			$fila = mysqli_fetch_assoc($res);
			$_SESSION['nombre'] = $fila ['nombre'];
			if ($fila['id_tipo'] == 1) {
				header("Location: MenuAdmin.php");
				exit;
			}
			if ($fila['id_tipo'] == 2) {
				header("Location: MenuCliente.php");
				exit;
			}
			
			exit;
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>LogIn</h1>

	<form action="" method="post">
		<input type="text" name="nombre"> Nombre </br>
		<input type="password" name="pass"> Contraseña </br>

		</br>
		<input type="submit" value="Iniciar"/>

	</form>

</body>
</html>