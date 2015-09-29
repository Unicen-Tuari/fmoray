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

		public function mostrarHome(){
			$this->view->mostrarHome();
		}
		public function mostrarPrincipal(){
			$this->view->mostrarPrincipal();
		}
		public function mostrarSoporte(){
			$this->view->mostrarSoporte();
		}
		public function mostrarRedes(){
			$this->view->mostrarRedes();
		}
		public function mostrarCamaras(){
			$this->view->mostrarCamaras();
		}
		public function mostrarCartuchos(){
			$this->view->mostrarCartuchos();
		}
		public function mostrarLista(){
			$this->view->mostrarLista();
		}
		public function mostrarProductos(){
			$this->view->mostrarProductos($this->model->leerProducto());
		}
		public function verProducto(){
			$this->view->verProductos();	
		}
		public function mostrarAdmin(){
			$this->view->mostrarAdmin($this->model->leerCategoria(), $this->model->leerProducto());
		}
		public function agregarCategoria(){
			if(isset($_REQUEST['categoria'])){
				$this->model->agregarCategoria($_REQUEST['categoria']);	
				header('Location: index.php');
			}
		}
		public function agregarProducto(){
			if  ($_REQUEST['idCategoria'] != 0 && 
				isset($_REQUEST['nombreProducto']) &&
				isset($_REQUEST['textoDescripcion']) &&
				isset($_REQUEST['precio']) &&
				isset($_FILES['imagesToUpload'])){
				$this->model->agregarProducto($_REQUEST['idCategoria'], $_REQUEST['nombreProducto'], $_REQUEST['textoDescripcion'], $_REQUEST['precio'], $_FILES['imagesToUpload']);	
				header('Location: index.php');
			}
		}
		function agregarImagenes(){
		    if(isset($_REQUEST['id_producto']) && isset($_FILES)){
		      $this->model->agregarImagenes($_REQUEST['id_producto'],$_FILES);
		      echo '{ "result" :  "OK" }';
		    }else{
		      echo '{ "result" :  "Faltan paramentros" }';
		    }
		  }

}
?>