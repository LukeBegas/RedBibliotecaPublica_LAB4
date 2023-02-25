<!--html/MenuCliente.php -->
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
	<title>Menu Cliente</title>
</head>
<body>
	<h1>Menú Cliente</h1>
	<form id="busqueda" action="http://localhost/ProyectoLucasBanegas2020B/controllers/filtrolibros.php" method="get">
		<label for="texto">Búsqueda</label>
		<input type="text" name="texto">
		
		
	</form>
	<form>
		<label for="filtros">Filtrar por</label>
		<select name="filtro" id="filtros">
			<option value="1">Titulo</option>
			<option value="2">Género</option>
			<option value="3">Autor</option>
			<option value="4">Editorial</option>			
		</select>
		<input type="submit" value="Buscar">
	</form>

	</br>
	</br>
	</br>
	<a href="http://localhost/ProyectoLucasBanegas2020B/controllers/listalibros.php">Ver Catálogo</a>
	</br>

	</br>
	<a href="http://localhost/ProyectoLucasBanegas2020B/html/logout.php">Salir</a>

</body>
</html>