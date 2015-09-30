<?php

	require_once('view/datacom_view.php');
	require_once('model/datacom_model.php');

	class DatacomController{
		private $model;
		private $view;

		function __construct(){
			$this->view = new DatacomView();
			$this->model = new DatacomModel();
		}
// MOSTRAR HOME
		public function mostrarHome(){
			$this->view->mostrarHome();
		}
// MOSTRAR DESTACADOS
		public function mostrarPrincipal(){
			$this->view->mostrarPrincipal();
		}
// MOSTRAR SOPORTE
		public function mostrarSoporte(){
			$this->view->mostrarSoporte();
		}
// MOSTRAR REDES
		public function mostrarRedes(){
			$this->view->mostrarRedes();
		}
// MOSTRAR CAMARAS
		public function mostrarCamaras(){
			$this->view->mostrarCamaras();
		}
// MOSTRAR CARTUCHOS
		public function mostrarCartuchos(){
			$this->view->mostrarCartuchos();
		}
// MOSTRAR LISTA
		public function mostrarLista(){
			$this->view->mostrarLista();
		}
// MOSTRAR PRODUCTOS
		public function mostrarProductos(){
			$this->view->mostrarProductos($this->model->leerProducto());
		}
// MOSTRAR PRODUCTO ESPECIFICO
		public function verProducto(){
			$this->view->verProducto($this->model->leerProductoInfo($_REQUEST['id']));	
		}
// MOSTRAR ADMIN
		public function mostrarAdmin(){
			$this->view->mostrarAdmin($this->model->leerCategoria(), $this->model->leerProducto());
		}
// MOSTRAR TABLA CATEGORIAS
		public function tablaCategorias(){
			$this->view->tablaCategorias();
		}
// MOSTRAR TABLA PRODUCTOS
		public function tablaProductos(){
			$this->view->tablaProductos();
		}
// FUNCION PARA LLAMAR AL MODEL PARA AGREGAR CATEGORIA
		public function agregarCategoria(){
			if(isset($_REQUEST['categoria'])){
				$this->model->agregarCategoria($_REQUEST['categoria']);	
				header('Location: index.php');
			}
		}
// FUNCION PARA BORRAR UN PRODUCTO
		public function borrarProducto(){
	    	if(isset($_REQUEST['id_producto'])){
	     		$this->model->borrarProducto($_REQUEST['id_producto']);
	     		header('Location: index.php');
	    	}
	  	}
// FUNCION PARA LLAMAR AL MODEL PARA AGREGAR PRODUCTO
		public function agregarProducto(){
			if  ($_REQUEST['idCategoria'] != 0 && 
				isset($_REQUEST['nombreProducto']) &&
				isset($_REQUEST['textoDescripcion']) &&
				isset($_REQUEST['precio'])){
				$this->model->agregarProducto($_REQUEST['idCategoria'], $_REQUEST['nombreProducto'], $_REQUEST['textoDescripcion'], $_REQUEST['precio'], $_FILES['imagesToUpload'], $_REQUEST['id']);	
				header('Location: index.php');

			}
		}
// FUNCION PARA LLAMAR AL MODEL PARA AGREGAR IMAGENES CON AJAX
		function agregarImagenes(){
		    if(isset($_REQUEST['id_producto']) && isset($_FILES[0]['name'])){
		      $this->model->agregarImagenes($_REQUEST['id_producto'],$_FILES);
		      header('Location: index.php');
		    }else{
		      echo '{ "FALTA CARGAR LA IMAGEN" }';
		    }
		  }

}
?>