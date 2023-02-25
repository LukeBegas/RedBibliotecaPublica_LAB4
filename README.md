# RedBibliotecaPublica_LAB4
Proyecto final para la materia laboratorio IV

Nombre: RedBibliotecaPublica

Integrantes:
Banegas, Lucas. (Legajo 24377)

Descripción breve:
Sistema para una biblioteca pública. Permite a un usuario ‘Guest’ y a un
usuario ‘administrador de biblioteca’ consultar el catálogo y stock; y permite
solamente al usuario administrador de biblioteca realizar ciertos cambios en
las tablas , como el alta de libros nuevos, aumento de copias disponibles,
alta de Clientes y sus datos, realizar y chequear préstamos, y similares.

Pantallas a desarrollar:

1. Pantalla Login (Que desemboca a otra pantalla dependiendo del tipo de
usuario que se logee).
2. Pantalla de búsqueda en el catálogo (Filtra por género, permite búsqueda
de títulos o autores)
3. Listado de Libros según categoría seleccionada
4. Listado de Libros según búsqueda detallada.
5. Pantalla de información del libro seleccionado.
6. Pantalla de Administrador de biblioteca (permite seleccionar entre varias
tareas).
7. Pantalla de alta/baja de Préstamos .
8. Pantalla de consulta de tablas (libros, clientes, préstamos).
9. Pantalla de información del ítem seleccionado.

Tablas de la base de datos:

-libros (id_libros, título , id_género, autor, editorial, descripción, idioma,
-fecha_publicación, stock, id_sector, columna, estante)
-género (id_género, detalle)usuario(id_usuario, nombre, teléfono, email, fecha_alta,id_tipo)
-tipo_usuario(id_tipo, detalle)
-préstamos (id_préstamo, id_libros, id_usuario, fecha_alta,
-fecha_vencimiento)
-sector (id_sector, detalle)
