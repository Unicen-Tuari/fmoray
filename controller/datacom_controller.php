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
			$this->view->mostrarProductos();
		}
		public function mostrarAdmin(){
			$this->view->mostrarAdmin($this->model->leerCategoria());
		}  
		public function agregarCategoria(){
			if(isset($_REQUEST['categoria'])){
				$this->model->agregarCategoria($_REQUEST['categoria']);	
				$this->mostrarHome();
			}
		}
	}
?>