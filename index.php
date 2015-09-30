<?php 
	require_once 'config/config_app.php';
	require_once 'controller/datacom_controller.php';

	$datacomController = new DatacomController();
	
	if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST) ||
	$_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_HOME)
	{
		$datacomController->mostrarHome();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_PRINCIPAL){

		$datacomController->mostrarPrincipal();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_VER_PRODUCTO && isset($_REQUEST['id'])){

			$datacomController->verProducto();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_SOPORTE){

			$datacomController->mostrarSoporte();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_REDES){

			$datacomController->mostrarRedes();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_CAMARAS){

			$datacomController->mostrarCamaras();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_CARTUCHOS){

			$datacomController->mostrarCartuchos();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_LISTA){

			$datacomController->mostrarLista();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_PRODUCTOS){ 

			$datacomController->mostrarProductos();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_ADMIN){ 

			$datacomController->mostrarAdmin();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_AGREGAR_CATEGORIA){ 

			$datacomController->agregarCategoria();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_AGREGAR_PRODUCTO){ 
		
			$datacomController->agregarProducto();

	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_AGREGAR_IMAGENES){

		 	$datacomController->agregarImagenes();
	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_TABLA_PRODUCTOS){

		 	$datacomController->tablaProductos();
	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_TABLA_CATEGORIAS){

		 	$datacomController->tablaCategorias();
	} elseif ($_REQUEST[ConfigApp::$ACTION] == ConfigApp::$ACTION_BORRAR_PRODUCTO){

		 	$datacomController->borrarProducto();

	}

?>