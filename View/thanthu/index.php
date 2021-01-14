<?php
	

	if (isset($_GET['controller'])) {
		require('layouts/header.php');
		$action = $_GET['action'];
	$controller = $_GET['controller'];

	$controllerName = $controller .'Controller';

	require_once('../../Controller/admin/'. $controllerName .'.php');

	$controller = new $controllerName();
	$controller->$action();
	require('layouts/footer.php');
		} else {
			require('index.html');
			
		}
		
	?>