<?php

//controllers/listaprestamos.php

require '../fw/fw.php';
require '../models/Prestamos.php';
require '../views/ListadoPrestamos.php';

$p = new Prestamos;
$todos = $p->getTodos();

$v = new ListadoPrestamos();
$v->prestamos = $todos;
$v->render();
