<?php
	require_once('libs/Smarty.class.php');

	class DatacomView{

		private $smarty;

		function __construct(){
			$this->smarty = new Smarty();
		}

		public function mostrarHome(){
			$this->smarty->display('templates/home.tpl');
		}
		public function mostrarPrincipal(){
			$this->smarty->display('templates/principal.tpl');
		}
		public function mostrarSoporte(){
			$this->smarty->display('templates/soporte.tpl');
		}
		public function mostrarRedes(){
			$this->smarty->display('templates/cableado.tpl');
		}
		public function mostrarCamaras(){
			$this->smarty->display('templates/camaras.tpl');
		}
		public function mostrarCartuchos(){
			$this->smarty->display('templates/cartuchos.tpl');
		}
		public function mostrarLista(){
			$this->smarty->display('templates/precios.tpl');
		}
		public function mostrarProductos(){
			$this->smarty->display('templates/productos.tpl');
		}
		public function mostrarAdmin($categorias){
			$this->smarty->assign('categorias', $categorias);
			$this->smarty->display('templates/admin.tpl');

		}
	}

?>