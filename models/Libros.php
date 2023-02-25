<?php

//models/Libros.php

class Libros extends Model {

	public function getTodos(){
		$this->db->query("SELECT * 
						FROM libros l
						LEFT JOIN genero g ON g.id_genero = l.id_genero
						LEFT JOIN sector s ON s.id_sector = l.id_sector");
		return $this->db->fetchAll();

	}

	public function getFiltro() {
		$t = $_GET['texto'];
		$f = $_GET['filtro'];
		$this->db->query("SELECT * 
						FROM libros l
						LEFT JOIN genero g ON g.id_genero = l.id_genero
						LEFT JOIN sector s ON s.id_sector = l.id_sector
						");
		return $this->db->fetchAll();
	
	}


}