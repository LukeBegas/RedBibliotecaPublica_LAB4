<?php

//models/Libros.php

class Prestamos extends Model {

	public function getTodos(){
		$this->db->query("SELECT  *
						FROM prestamos p
						LEFT JOIN usuario u ON u.id_usuario = p.id_usuario 
						LEFT JOIN libros l ON l.id_libros = p.id_libro");
		return $this->db->fetchAll();

	}


}