<!--html/MenuAdmin.php -->
<?php
	
	session_start();

	if(!isset($_SESSION['logueado'])) {
		header("Location: login.php");
		exit;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Admin</title>
</head>
<body>
	<h1>Menú Administrador</h1>
	<a href="http://localhost/ProyectoLucasBanegas2020B/controllers/listalibros.php">Ver Libros</a></br>
	<a href="http://localhost/ProyectoLucasBanegas2020B/controllers/listaprestamos.php">Ver Préstamos</a></br>

	</br>

	<a href="http://localhost/ProyectoLucasBanegas2020B/html/logout.php">Salir</a>
</body>
</html>