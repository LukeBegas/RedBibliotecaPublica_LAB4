<?php

//controllers/filtrolibros.php
	
	session_start();

	if(!isset($_SESSION['logueado'])) {
		header("Location: login.php");
		exit;
	}


require '../fw/fw.php';
require '../models/Libros.php';
require '../views/ListadoFiltro.php';

$l = new Libros();
$todos = $l->getFiltro();

$v = new ListadoFiltro();
$v->libros = $todos;
$v->render();