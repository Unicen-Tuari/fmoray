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

	function agregarProducto($idCategoria, $nombreProducto, $textoDescripcion, $precio, $imagenes){
		try{
			$destinos_finales=$this->subirImagenes($imagenes);
			$this->db->beginTransaction();
			$consulta_existe = $this->db->prepare('SELECT 1 FROM producto WHERE nombre =?');
			$consulta_existe->execute(array($nombreProducto));
			if (!$consulta_existe->fetch()){
				$consulta = $this->db->prepare('INSERT INTO producto(id_categoria, nombre, descripcion, precio, ruta_imagen) VALUES(?, ?, ?, ?, ?)');
				$consulta->execute(array($idCategoria, $nombreProducto, $textoDescripcion, $precio, $destinos_finales[0]));
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
			$consultaNombre = $this->db->prepare('SELECT nombre_categoria FROM categoria WHERE id_categoria=?');
			$consultaNombre->execute(array($producto['id_categoria']));
			$nombreCategoria = $consultaNombre->fetch();
			$producto['nombreCategoria'] = $nombreCategoria['nombre_categoria'];
			$productos[] = $producto;
		}
		return $productos;
	}


	private function subirImagenes($imagenes){
	    $carpeta = "uploads/";
	    $destinos_finales = array();
	    foreach ($imagenes["tmp_name"] as $key => $value) {
	      $destinos_finales[] = $carpeta.uniqid().$imagenes["name"][$key];
	      move_uploaded_file($value, end($destinos_finales));
	    }

	    return $destinos_finales;
	  }

	private function subirImagenesAjax($imagenes){
	    $carpeta = "uploads/";
	    $destinos_finales = array();
	    foreach ($imagenes as $imagen) {
	      $destino =  $carpeta.uniqid().$imagen["name"];
	      move_uploaded_file($imagen["tmp_name"], $destino);
	      $destinos_finales[] = $destino;
	    }
	    return $destinos_finales;
    }


  	function agregarImagenes($id_producto, $imagenes){
	    $rutas=$this->subirImagenesAjax($imagenes);
	    $consulta = $this->db->prepare('INSERT INTO imagen(fk_id_tarea,path) VALUES(?,?)');
	    foreach($rutas as $ruta){
	      $consulta->execute(array($id_tarea,$ruta));
	    }
  	}
}
?>