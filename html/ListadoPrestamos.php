<!--html/ListadoPrestamos.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Listado de prestamos</title>
</head>
<body>
	<h1>Listado de Prestamos</h1>
	<table>
			<tr><th>Id</th><th>Titulo</th><th>Cliente</th><th>Fecha</th>
			<th>Vencimiento</th></tr>

			<?php foreach ($this->prestamos as $p ) { ?>
			<tr><td><?= $p['id_prestamo'] ?></td> <td><?= $p['titulo'] ?></td>
			<td><?= $p['nombre'] ?></td> <td><?= $p['fecha_alta'] ?></td> 
			<td><?= $p['fecha_vencimiento'] ?></td></tr>
		<?php } ?>
		</table>

</body>
</html>