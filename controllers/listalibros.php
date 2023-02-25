<?php

//controllers/listalibros.php
	
	session_start();

	if(!isset($_SESSION['logueado'])) {
		header("Location: login.php");
		exit;
	}


require '../fw/fw.php';
require '../models/Libros.php';
require '../views/ListadoLibros.php';

$l = new Libros();
$todos = $l->getTodos();

$v = new ListadoLibros();
$v->libros = $todos;
$v->render();
