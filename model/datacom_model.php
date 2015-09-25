<?php

	class DatacomModel {

		private $producto;
		private $categoria;
		private $db;

	function __construct() {
		$this->db = new PDO('mysql:host=localhost;dbname=datacom;', 'root', '');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	function agregarCategoria($categoria){
		try{
			$this->db->beginTransaction();
			$consulta_existe = $this->db->prepare('SELECT 1 FROM categoria WHERE nombre_categoria =?');
			$consulta_existe->execute(array($categoria));
			if (!$consulta_existe->fetch()){
				$consulta = $this->db->prepare('INSERT INTO categoria(nombre_categoria) VALUES(?)');
				$consulta->execute(array($categoria));
				$this->db->commit();
			}
			
		}
		catch(Exception $e){
			$this->db->rollBack();
			// echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}
	}

	function leerCategoria(){
		$categorias = array();
		$consulta = $this->db->prepare('SELECT * FROM categoria');
		$consulta->execute();
		while ($categoria = $consulta->fetch()){
			$categorias[] = $categoria;
		}
		if (!$categorias){
			$categorias[0]['id_categoria'] = 'No existen categorias';
			$categorias[0]['nombre_categoria'] = 'No existen categorias';
		}
		return $categorias;
	}
}
?>