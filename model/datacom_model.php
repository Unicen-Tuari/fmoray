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

	function agregarProducto($idCategoria, $nombreProducto, $textoDescripcion, $precio){
		try{
			$this->db->beginTransaction();
			$consulta_existe = $this->db->prepare('SELECT 1 FROM producto WHERE nombre =?');
			$consulta_existe->execute(array($nombreProducto));
			if (!$consulta_existe->fetch()){
				$consulta = $this->db->prepare('INSERT INTO producto(id_categoria, nombre, descripcion, precio) VALUES(?, ?, ?, ?)');
				$consulta->execute(array($idCategoria, $nombreProducto, $textoDescripcion, $precio));
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
		return $categorias;
	}

	function leerProducto(){
		$productos = array();
		$consulta = $this->db->prepare('SELECT * FROM producto');
		$consulta->execute();
		while ($producto = $consulta->fetch()){
			$productos[] = $producto;
		}
		return $productos;
	}
}
?>