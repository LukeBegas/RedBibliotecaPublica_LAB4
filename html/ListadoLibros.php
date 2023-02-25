<!--html/ListadoLibros.php -->

<!DOCTYPE html>
<html>
<head>
	<title>Listado de libros</title>
</head>
<body>

		<h1>Listado de Libros</h1>

		<table>
			<tr><th>Id</th><th>Titulo</th><th>Genero</th><th>Sector</th>
			<th>Autor</th><th>Editorial</th>
			<th>Idioma</th><th>Columna</th><th>Estante</th></tr>

			<?php foreach ($this->libros as $l ) { ?>
			<tr><td><?= $l['id_libros'] ?></td> <td><?= $l['titulo'] ?></td>
			<td><?= $l['detalle'] ?></td> <td><?= $l['detalle_sector'] ?></td>
			<td><?= $l['autor'] ?></td> <td><?= $l['editorial'] ?></td> 
			<td><?= $l['idioma'] ?></td> <td><?= $l['columna'] ?></td>
			<td><?= $l['estante'] ?></td>
			</tr>
		<?php } ?>
		</table>

</body>
</html>

